<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="/css/estilos.css">

    <title>Example</title>
</head>

<body>
    <header>
        <div id="logo">
            <img src="/img/logo.png" alt="Logo">
        </div>
        <h1>Departamento de Engenharia Informática</h1>

        <div class="avatar-area">
            <span class="name-user">Maria Costa</span>
            <img src="/img/default_img.png" alt="User img">
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
                <li>
                    <i class="far fa-file"></i>
                    <a href="disciplinas.php">Disciplinas</a>
                </li>
                <li class="sel">
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
                    <h2>Docentes</h2>
                    <form class="disc-search" action="#" method="GET">
                        <div class="search-item">
                            <label for="idCurso">Curso:</label>
                            <select name="curso" id="idCurso">
                                <option value="EI" selected>Engenharia Informática</option>
                                <option value="JDM">Jogos Digitais e Multimédia</option>
                                <option value="MCIF">Mestrado em Cibersegurança e Informática Forense</option>
                                <option value="MEI-CM">Mestrado em Engenharia Informática - Computação Móvel</option>
                                <option value="TESP-DWM">TeSP - Desenvolvimento Web e Multimédia</option>
                                <option value="TESP-PSI">TeSP - Programação de Sistemas de Informação</option>
                                <option value="TESP-RSI">TeSP - Redes e Sistemas Informáticos</option>
                                <option value="TESP-TI">TeSP- Tecnologias Informáticas</option>
                            </select>
                        </div>
                        <div class="search-item">
                            <label for="idAno">Ano:</label>
                            <div id="anos-group">
                                <input type="radio" name="ano" id="idA1" value="1">
                                <label for="idA1">1</label>
                                <input type="radio" name="ano" id="idA2" value="2" checked>
                                <label for="idA2">2</label>
                                <input type="radio" name="ano" id="idA3" value="3">
                                <label for="idA3">3</label>
                            </div>
                        </div>
                        <div class="search-item">
                            <label for="idDisc">Disc:</label>
                            <select name="disc" id="idDisc">
                                <option value="9119212">Sistemas Gráficos e Interação</option>
                                <option value="9119213">Algoritmos e Estrutruras de Dados</option>
                                <option value="9119214">Bases de dados</option>
                                <option value="9119215">Redes de Computadores</option>
                                <option value="9119216">Programação Avançada</option>
                                <option value="9119217" selected>Aplicações para a Internet</option>
                                <option value="9119218">Engenharia de Software</option>
                            </select>
                        </div>
                        <div class="search-item">
                            <button type="submit" class="bt" id="btn-filter">Filtrar</button>
                        </div>
                    </form>
                    <div class="docentes-area">
                        <div class="docente">
                            <div class="docente-imagem">
                                <img src="/img/docentes/marcoMonteiro.bmp" alt="Imagem do docente">
                            </div>
                            <div class="docente-info-area">
                                <div class="docente-name">Marco António de Oliveira Monteiro</div>
                                <div class="docente-dep">ESTG - Departamento de Engenharia Informática</div>
                                <div class="docente-info">
                                    <span class="docente-label"><i class="fas fa-envelope"></i></span>
                                    <span class="docente-info-desc"><a href="mailto:marco.monteiro@ipleiria.pt">marco.monteiro@ipleiria.pt</a>
                                    </span>
                                </div>
                                <div class="docente-info">
                                    <span class="docente-label"><i class="fas fa-map-marker-alt"></i></span>
                                    <span class="docente-info-desc">ESTG - C2/G1.5-12</span>
                                </div>
                                <div class="docente-info">
                                    <span class="docente-label"><i class="fas fa-phone"></i></span>
                                    <span class="docente-info-desc">203166</span>
                                </div>
                                <div class="docente-info">
                                    <span class="docente-label"><i class="fas fa-archive"></i></span>
                                    <span class="docente-info-desc">A069</span>
                                </div>
                            </div>
                        </div>
                        <div class="docente">
                            <div class="docente-imagem">
                                <img src="/img/docentes/eduardoSilva.png" alt="Imagem do docente">
                            </div>
                            <div class="docente-info-area">
                                <div class="docente-name"> Eduardo Manuel Caetano da Silva</div>
                                <div class="docente-dep">ESTG - Departamento de Engenharia Informática</div>
                                <div class="docente-info">
                                    <span class="docente-label"><i class="fas fa-envelope"></i></span>
                                    <span class="docente-info-desc"><a href="mailto:eduardo.silva@ipleiria.pt">eduardo.silva@ipleiria.pt</a>
                                    </span>
                                </div>
                                <div class="docente-info">
                                    <span class="docente-label"><i class="fas fa-map-marker-alt"></i></span>
                                    <span class="docente-info-desc">ESTG - C2</span>
                                </div>
                                <div class="docente-info">
                                    <span class="docente-label"><i class="fas fa-phone"></i></span>
                                    <span class="docente-info-desc">-</span>
                                </div>
                                <div class="docente-info">
                                    <span class="docente-label"><i class="fas fa-archive"></i></span>
                                    <span class="docente-info-desc">-</span>
                                </div>
                            </div>
                        </div>
                        <div class="docente">
                            <div class="docente-imagem">
                                <img src="/img/docentes/eugeniaBernardino.jpg" alt="Imagem do docente">
                            </div>
                            <div class="docente-info-area">
                                <div class="docente-name">Eugénia Moreira Bernardino</div>
                                <div class="docente-dep">ESTG - Departamento de Engenharia Informática</div>
                                <div class="docente-info">
                                    <span class="docente-label"><i class="fas fa-envelope"></i></span>
                                    <span class="docente-info-desc"><a href="mailto:eugenia.bernardino@ipleiria.pt">eugenia.bernardino@ipleiria.pt</a>
                                    </span>
                                </div>
                                <div class="docente-info">
                                    <span class="docente-label"><i class="fas fa-map-marker-alt"></i></span>
                                    <span class="docente-info-desc">ESTG - C2/G.1.5-11</span>
                                </div>
                                <div class="docente-info">
                                    <span class="docente-label"><i class="fas fa-phone"></i></span>
                                    <span class="docente-info-desc">203167</span>
                                </div>
                                <div class="docente-info">
                                    <span class="docente-label"><i class="fas fa-archive"></i></span>
                                    <span class="docente-info-desc">A064</span>
                                </div>
                            </div>
                        </div>
                        <div class="docente">
                            <div class="docente-imagem">
                                <img src="/img/docentes/telmoMarques.jpg" alt="Imagem do docente">
                            </div>
                            <div class="docente-info-area">
                                <div class="docente-name">Telmo Filipe Moreira Marques</div>
                                <div class="docente-dep">ESTG - Departamento de Engenharia Informática</div>
                                <div class="docente-info">
                                    <span class="docente-label"><i class="fas fa-envelope"></i></span>
                                    <span class="docente-info-desc"><a href="mailto:telmo.marques@ipleiria.pt">telmo.marques@ipleiria.pt</a>
                                    </span>
                                </div>
                                <div class="docente-info">
                                    <span class="docente-label"><i class="fas fa-map-marker-alt"></i></span>
                                    <span class="docente-info-desc">ESTG - C2/GL.2-7</span>
                                </div>
                                <div class="docente-info">
                                    <span class="docente-label"><i class="fas fa-phone"></i></span>
                                    <span class="docente-info-desc">203149</span>
                                </div>
                                <div class="docente-info">
                                    <span class="docente-label"><i class="fas fa-archive"></i></span>
                                    <span class="docente-info-desc">-</span>
                                </div>
                            </div>
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