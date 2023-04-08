<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <li class="sel">
                    <i class="fas fa-box"></i>
                    <a href="cursos.php">Cursos</a>
                </li>
                <li>
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
                    <h2>Cursos</h2>
                    <div class="cursos-area">
                        <?php foreach ($cursos as $curso) : ?>
                            <div class="curso">
                                <div class="curso-imagem">
                                    <img src="<?php echo "/aulas_pi/ficha04/public/img/cursos/{$curso->abreviatura}.png"; ?>" alt="Imagem do curso">
                                </div>
                                <div class="curso-info-area">
                                    <div class="curso-info">
                                        <span class="curso-label">Abreviatura</span>
                                        <span class="curso-info-desc"><?php echo $curso->abreviatura; ?></span>
                                    </div>
                                    <div class="curso-info">
                                        <span class="curso-label">Nome</span>
                                        <span class="curso-info-desc"><?php echo $curso->nome; ?></span>
                                    </div>
                                    <div class="curso-info">
                                        <span class="curso-label">Tipo</span>
                                        <span class="curso-info-desc"><?php echo $curso->tipo; ?></span>
                                    </div>
                                    <div class="curso-info">
                                        <span class="curso-label">Semestres</span>
                                        <span class="curso-info-desc"><?php echo $curso->semestres; ?></span>
                                    </div>
                                    <div class="curso-info">
                                        <span class="curso-label">ECTS</span>
                                        <span class="curso-info-desc"><?php echo $curso->ECTS; ?></span>
                                    </div>
                                    <div class="curso-info">
                                        <span class="curso-label">Vagas</span>
                                        <span class="curso-info-desc"><?php echo $curso->vagas; ?></span>
                                    </div>
                                    <div class="curso-info">
                                        <span class="curso-label">Contacto</span>
                                        <span class="curso-info-desc"><?php echo $curso->contato; ?></span>
                                    </div>
                                    <div class="curso-info">
                                        <span class="curso-label">Objetivos</span>
                                        <span class="curso-info-desc"><?php echo $curso->objetivos; ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
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
                <p>
                    © <a href="mailto:	coord.dei.estg@ipleiria.pt"> Departamento de Engenharia Informática</a>
                </p>
                </p>
            </footer>

        </section>
    </div>
    <script src="js/menu.js"></script>


</body>

</html>