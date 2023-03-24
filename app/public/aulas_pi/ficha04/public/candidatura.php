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
                <li>
                    <i class="fas fa-users"></i>
                    <a href="docentes.php">Docentes</a>
                </li>
                <li class="sel">
                    <i class="fab fa-wpforms"></i>
                    <a href="candidatura.php">Candidatura</a>
                </li>
            </ul>
        </nav>

        <section id="main">
            <div class="content">
                <div class="left-content">
                    <h2>Candidatura</h2>
                    <form action="#" id="candidatura-form" method="post">
                        <div id="general-info" class="area-form">
                            <div class="form-left-area">
                                <div class="item-form">
                                    <label for="idNome">Nome:</label>
                                    <input type="text" name="nome" id="idNome">
                                </div>
                                <div class="item-form">
                                    <label for="idEmail">Email:</label>
                                    <input type="email" name="email" id="idEmail">
                                </div>
                                <div id="telefones-area">
                                    <div class="item-form">
                                        <label for="idTel1">Telefone 1:</label>
                                        <input type="text" name="telefone1" id="idTel2" class="cx-small">
                                    </div>
                                    <div class="item-form">
                                        <label for="idTel2">Telefone 2:</label>
                                        <input type="text" name="telefone2" id="idTel2" class="cx-small">
                                    </div>
                                </div>
                                <div class="item-form">
                                    <label for="generos-area">Género:</label>
                                    <div id="generos-area">
                                        <div class="item-form">
                                            <input type="radio" name="genero" id="idGenM" value="M">
                                            <label for="idGenM">Masculino</label>
                                        </div>
                                        <div class="item-form">
                                            <input type="radio" name="genero" id="idGenF" value="F">
                                            <label for="idGenF">Feminino</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-right-area">
                                <div id="origem-area">
                                    <div class="title-items">Origem:</div>
                                    <div class="item-form">
                                        <input type="radio" name="origem" id="idOrigemP" value="P">
                                        <label for="idOrigemP">Portugal</label>
                                    </div>
                                    <div class="item-form">
                                        <input type="radio" name="origem" id="idOrigemUE" value="UE">
                                        <label for="idOrigemUE">União Europeia</label>
                                    </div>
                                    <div class="item-form">
                                        <input type="radio" name="origem" id="idOrigemO" value="O">
                                        <label for="idOrigemO">Outra</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="cand-dados-area" class="area-form">
                            <div class="form-left-area">
                                <div class="item-form">
                                    <label for="idCurso">Curso pretendido:</label>
                                    <select name="curso" id="idCurso">
                                        <option value="EI" selected>Engenharia Informática</option>
                                        <option value="JDM">Jogos Digitais e Multimédia</option>
                                        <option value="MCIF">Mestrado em Cibersegurança e Informática Forense</option>
                                        <option value="MEI-CM">Mestrado em Engenharia Informática - Computação Móvel
                                        </option>
                                        <option value="TESP-DWM">TeSP - Desenvolvimento Web e Multimédia</option>
                                        <option value="TESP-PSI">TeSP - Programação de Sistemas de Informação</option>
                                        <option value="TESP-RSI">TeSP - Redes e Sistemas Informáticos</option>
                                        <option value="TESP-TI">TeSP- Tecnologias Informáticas</option>
                                    </select>
                                </div>
                                <div class="item-form">
                                    <label for="idMedia">Média de entrada:</label>
                                    <input type="number" name="media" id="idMedia" class="cx-small">
                                </div>
                                <div class="item-form m23-item">
                                    <label for="idM23">Maior que 23:</label>
                                    <input type="checkbox" name="m23" id="idM23">
                                </div>
                                <div class="item-form">
                                    <label for="idObs">Observações: </label>
                                    <textarea name="obs" id="idObs" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-right-area">
                                <div id="estatutos-area">
                                    <div class="title-items"> Estatutos Pretendidos:</div>
                                    <div class="item-form">
                                        <input type="checkbox" name="estatutos[]" id="idEstatutosTE" value="TE">
                                        <label for="idEstatutosTE">Trabalhador-Estudante</label>
                                    </div>
                                    <div class="item-form">
                                        <input type="checkbox" name="estatutos[]" id="idEstatutosNE" value="NE">
                                        <label for="idEstatutosNE">Necessidades Especiais</label>
                                    </div>
                                    <div class="item-form">
                                        <input type="checkbox" name="estatutos[]" id="idEstatutosE" value="E">
                                        <label for="idEstatutosE">Erasmus</label>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="bt-area">
                            <button type="submit" class="bt">Enviar candidatura</button>
                            <button type="reset" class="bt">Limpar</button>
                        </div>
                    </form>

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