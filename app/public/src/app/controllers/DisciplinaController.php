<?php

namespace controllers;

use \models\Curso;
use \models\Disciplina;

class DisciplinaController
{
    public function index()
    {
        $curso = $_GET["curso"] ?? "EI";
        $ano = $_GET["ano"] ?? 1;

        $sem1 = Disciplina::get($curso, $ano, 1);
        $sem2 = Disciplina::get($curso, $ano, 2);

        $listaCursos = Curso::getAll();

        view("disciplinas.index", [
            "disc_sem1" => $sem1,
            "disc_sem2" => $sem2,
            "curso" => $curso,
            "ano" => $ano,
            "lista_cursos" => $listaCursos
        ]);
    }
}
