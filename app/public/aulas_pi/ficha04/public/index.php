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
                <li class="sel">
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
                <li>
                    <i class="fab fa-wpforms"></i>
                    <a href="candidatura.php">Candidatura</a>
                </li>
            </ul>
        </nav>

        <section id="main">
            <div class="content">
                <div class="left-content">
                    <h2>Apresentação</h2>
                    <p>
                        O Departamento de Engenharia Informática (DEI) foi criado formalmente em 1997 com a aprovação
                        dos Estatutos da Escola Superior de Tecnologia e Gestão (ESTG), tendo no entanto as suas origens
                        na área de Informática existente na ESTG desde que esta entrou em funcionamento no ano letivo
                        1989/90.
                    </p>
                    <p>
                        O DEI é uma unidade funcional da ESTG à qual estão afetos docentes, laboratórios e serviços de
                        apoio relacionados com o ensino da engenharia informática. O DEI é responsável pelos cursos de
                        licenciatura em Engenharia Informática (EI), Licenciatura em Jogos Digitais e Multimédia,
                        Mestrado em Computação Móvel, Mestrado em Gestão de Sistemas de Informação Médica, Mestrado em
                        Cibersegurança e Informática Forense, Pós-Graduação em Informática de Segurança e Computação
                        Forense, Pós-Graduação em Informática de Segurança e Computação Forense. É também responsável
                        pela lecionação de diversas unidades curriculares da área da Informática que fazem parte do
                        plano curricular de outros cursos lecionados na ESTG. As atividades desenvolvidas pelo DEI
                        seguem as linhas de orientação estratégica definidas pelos orgãos da ESTG (Conselho Científico,
                        Conselho Pedagógico e Conselho Diretivo).
                    </p>
                    <p>
                        A organização do DEI está definida pelos estatutos da ESTG em:
                    </p>
                    <ul>
                        <li>Coordenador;</li>
                        <li>Conselho de Departamento;</li>
                        <li>Plenário.</li>
                    </ul>
                    <h3>Objetivos</h3>
                    <p>
                        Formar técnicos superiores qualificados a exercer a sua profissão com elevado nível de qualidade
                        científica, técnica, ética e de relações humanas e com capacidade de adaptação às constantes
                        mudanças tecnológicas.
                    </p>
                    <p>
                        Contribuir para a criação e divulgação de conhecimento técnico e cientifico em diversas áreas da
                        engenharia informática.
                    </p>
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