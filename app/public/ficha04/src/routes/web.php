<?php

use \internal\Route;

Route::get("/cursos", "CursoController@index");
Route::get("/disciplinas", "DisciplinaController@index");
