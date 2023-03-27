<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="css/estilos.css">

    <title>Example</title>
</head>

<body>
    <header>
        <div id="logo">
            <img src="img/logo.png" alt="Logo">
        </div>
        <h1>Departamento de Engenharia Informática</h1>

        <div class="avatar-area">
            <span class="name-user">Maria Costa</span>
            <img src="img/default_img.png" alt="User img">
        </div>
        <div id="menuIcon">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
    </header>
    <div class="container">
        <nav>
            <ul>
                <li>
                    <i class="fas fa-info-circle"></i>
                    <a href="index.php">Apresentação</a>
                </li>
                <li>
                    <i class="fas fa-box"></i>
                    <a href="cursos.php">Cursos</a>
                </li>
                <li class="sel">
                    <i class="far fa-file"></i>
                    <a href="disciplinas.php">Disciplinas</a>
                </li>
                <li>
                    <i class="fas fa-users"></i>
                    <a href="docentes.php">Docentes</a>
                </li>
                <li>
                    <i class="fab fa-wpforms"></i>
                    <a href="candidatura.php">Candidatura</a>
                </li>
            </ul>
        </nav>

        <section id="main">
            <div class="content">
                <div class="left-content">
                    <h2>Disciplinas</h2>
                    <form class="disc-search" method="get">
                        <div class="search-item">
                            <label for="idCurso">Curso:</label>
                            <select name="curso" id="idCurso">
                                <?php foreach ($lista_cursos as $c) : ?>
                                    <option value="<?php echo $c->abreviatura; ?>" <?php echo $c->abreviatura == $curso ? "selected" : ""; ?>>
                                        <?php echo $c->tipo . " - " . $c->nome ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="search-item">
                            <label for="idAno">Ano:</label>
                            <div id="anos-group">
                                <input type="radio" name="ano" id="idA1" value="1" <?php echo $ano == 1 ? "checked" : "" ?>>
                                <label for="idA1">1</label>

                                <input type="radio" name="ano" id="idA2" value="2" <?php echo $ano == 2 ? "checked" : "" ?>>
                                <label for="idA2">2</label>

                                <input type="radio" name="ano" id="idA3" value="3" <?php echo $ano == 3 ? "checked" : "" ?>>
                                <label for="idA3">3</label>
                            </div>
                        </div>
                        <div class="search-item">
                            <button type="submit" class="bt" id="btn-filter">Filtrar</button>
                        </div>
                    </form>
                    <div class="semestres-area">
                        <div class="semestre">
                            <h3>Semestre: 1</h3>
                            <?php partialView("partials.semester_table", ["disciplinas" => $disc_sem1]); ?>
                        </div>
                        <div class="semestre">
                            <h3>Semestre: 2</h3>
                            <?php partialView("partials.semester_table", ["disciplinas" => $disc_sem1]); ?>
                        </div>
                    </div>
                </div>
                <aside>
                    <h3>Disciplinas</h3>
                    <div class="disc-area">
                        <div class="disc">
                            <div class="disc-name">Programação I</div>
                            <div class="del-disc"><i class="far fa-trash-alt"></i></div>
                        </div>
                        <div class="disc">
                            <div class="disc-name">Análise Matemática</div>
                            <div class="del-disc"><i class="far fa-trash-alt"></i></div>
                        </div>
                        <div class="disc">
                            <div class="disc-name">Fisica Aplicada</div>
                            <div class="del-disc"><i class="far fa-trash-alt"></i></div>
                        </div>
                        <div class="disc">
                            <div class="disc-name">Álgebra Linear</div>
                            <div class="del-disc"><i class="far fa-trash-alt"></i></div>
                        </div>
                    </div>
                    <div class="bt-area">
                        <button type="button" class="bt">Inscrever</button>
                        <button type="button" class="bt">Limpar</button>
                    </div>
                </aside>
            </div>
            <footer>
                <p>
                    © <a href="mailto:	coord.dei.estg@ipleiria.pt"> Departamento de Engenharia Informática</a>
                </p>
            </footer>

        </section>
    </div>
    <script src="js/menu.js"></script>
</body>

</html>