<?php

namespace models;

use \internal\Model;

class Curso extends Model
{
    static public function getAll()
    {
        $sql = "select * from cursos";

        $conn = static::connect();

        $sth = $conn->prepare($sql);
        $sth->execute();

        return $sth->fetchAll(\PDO::FETCH_CLASS);
    }
}
