<?php

namespace controllers;

use models\Curso;

class CursoController
{
    public function index()
    {
        $todosCursos = Curso::getAll();
        view("cursos.index", ["cursos" => $todosCursos]);
    }
}
