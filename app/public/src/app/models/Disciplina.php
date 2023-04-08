<?php

namespace models;

use \internal\Model;

class Disciplina extends Model
{
    static public function get($curso, $ano, $semestre)
    {
        $sql = "select * from disciplinas where curso = ? and ano = ? and semestre = ?";

        $conn = static::connect();

        $sth = $conn->prepare($sql);
        $sth->execute([$curso, $ano, $semestre]);

        return $sth->fetchAll(\PDO::FETCH_CLASS);
    }
}
