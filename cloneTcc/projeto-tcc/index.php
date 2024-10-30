<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- HTML5 & page default configs -->
    <link rel="icon" href="assets/images/kidscript-shortcut-icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> -->
    <title>KidScript | Início</title>
    <!-- icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,0" />
    <!-- icons -->
    <!-- HTML5 default configs -->

    <!-- Page styles -->
    <link rel="stylesheet" href="styles/utils.css">
    <link rel="stylesheet" href="components/header/header.css">
    <link rel="stylesheet" href="components/footer/footer.css">

    <link rel="stylesheet" href="styles/main.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <!-- Page styles -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>

    <header>
        <ul class="navbar">
            <li class="logo">
                <img src="assets/images/logo.png" alt="Logo Kidscript" width="180px">
            </li>

            <li class="icons">
                <a href="index.php" class="navlink">
                    <span class="material-symbols-outlined">
                        home
                    </span>
                    <p class="highlight-hover">Início</p>
                </a>
            </li>
            <li class="icons">
                <a href="pages/about.php" class="navlink">
                    <span class="material-symbols-outlined">
                        info
                    </span>
                    <p class="highlight-hover">Sobre</p>
                </a>
            </li>
            <li class="icons">
                <a href="pages/select-game.php" class="navlink">
                    <span class="material-symbols-outlined">
                        play_circle
                    </span>
                    <p class="highlight-hover">Aprenda</p>
                </a>
            </li>
            <li class="icons">
                <a href="pages/profile.php" class="navlink">
                    <span class="material-symbols-outlined">
                        person
                    </span>
                </a>
            </li>
        </ul>
    </header>

    <main>
        <div class="landing-page" id="landing-page">
            <img id="mobileLogo" src="assets/images/logo.png" alt="Logo Kidscript" width="250px">
            <div class="top-texts">
                <h2>
                    Aprenda programação
                    <br>
                    <span> COM DIVERSÃO! </span>
                </h2>
            </div>

            <div class="btnSection">
                <a href="pages/login.php"><button class="btn login"><strong>Entrar</strong></button></a>
                <a href="pages/sign-in.php"><button class="btn sign-in"><strong>Cadastre-se</strong></button></a>

            </div>
        </div>

        <div class="images">
            <img src="./assets/images/mascoteInvert.png" alt="Mascote Kidscript">
        </div>

        <div class="section landing-seguiment">
            <iframe src="https://www.youtube.com/embed/eIEPOiuk-Gs?si=wSboZT3AJj4EQNFs" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <!-- Utilizção de Data aos para animações da página -->

        <h2 class="section-title" data-aos="fade-left">Aprenda Jogando
            <hr>
        </h2>
        <div class="learn-playing">
            <div class="card">

                <h3 data-aos="fade-left">Quem somos</h3>
                <hr>
                <p data-aos="fade-left">
                    A Kidscript é uma plataforma gratuita de ensino de programação voltada para crianças de 8 a
                    12 anos. Nosso objetivo é ensinar programação de maneira divertida e acessível, utilizando jogos
                    intuitivos que tornam o aprendizado lúdico e envolvente.
                </p>
            </div>
            <div class="card">

                <h3 data-aos="fade-left">Como Ensinamos</h3>
                <hr>
                <p data-aos="fade-left">
                    As crianças aprendem programação, lógica, algoritmos e resolução de problemas por meio de jogos
                    interativos. Utilizamos uma linguagem básica e exercícios práticos para garantir que o aprendizado
                    seja simples e eficaz. Além disso, promovemos o desenvolvimento do pensamento computacional e
                    habilidades para lidar com frustrações. </p>
            </div>
            <div class="card">
                <h3 data-aos="fade-left">Nosso Compromisso</h3>
                <hr>
                <p data-aos="fade-left">
                    Estamos comprometidos em fornecer suporte contínuo e garantir o uso saudável da tecnologia.
                    Limitamos o tempo de uso das crianças na plataforma para evitar que fiquem online por períodos
                    prolongados. Na Kidscript, acreditamos que aprender programação pode ser divertido e acessível para
                    todas as crianças.
                </p>
            </div>
        </div>


        <h2 class="section-title" data-aos="fade-left">Mais sobre esta jornada
            <hr>
        </h2>

        <div class="journey">

            <div class="journey-card" data-aos="fade-left">
                <img src="./assets/images/nestor.png" alt="Mascote Nestor" width="180px">
                <h3>Plataforma Gamificada</h3>

            </div>
            <div class="journey-card" data-aos="fade-left">
                <img src="./assets/images/carol.png" alt="Mascote Carol" width="180px">
                <h3>2ª a 8ª série</h3>

            </div>
            <div class="journey-card" data-aos="fade-left">
                <img src="./assets/images/gabriel.png" alt="Mascote Gabriel" width="180px">
                <h3>Texto baseado em programação</h3>

            </div>
            <div class="journey-card" data-aos="fade-left">
                <img src="./assets/images/alibio.png" alt="Mascote Alibio" width="180px">
                <h3>Controle de Tempo</h3>

            </div>

        </div>

        <div class="call-to-action">
            <div class="cta-asset">
                <img src="assets/images/misael_marlon.png" alt="Mascote Marlon" width="400px" class="misael"
                    data-aos="fade-left">

            </div>
            <div class="calling-to-action">
                <h2 data-aos="fade-left">
                    Junte-se à <span>KidScript</span>
                </h2>
                <br>
                <h3 data-aos="fade-left">
                    Aprenda programação de forma interativa e divertida.
                </h3>
                <a href="pages/sign-in.php" data-aos="fade-left">
                    <button class="btn login" id="cta-btn">
                        <strong>Comece Hoje</strong>
                    </button>
                </a>
            </div>
        </div>
    </main>

    <script>
        AOS.init();
    </script>
</body>
<footer class="footer">
    <div class="footer-map">
        <a href="https://linktr.ee/kidscript.org">Fale conosco</a>
        <a href="pages/about.php">Sobre nós</a>
        <a href="pages/select-game.php">Aprenda agora</a>
        <a href="pages/unlogged.php">Meu usuário</a>

        <a href="https://ios.org.br/">Instituto da Oportunidade Social</a>

    </div>

    <div class="footer-text">

        <p> Todos os direitos reservados.
            <br>
            Desenvolvido por KidScript™ &reg &copy
        </p>

    </div>

    <div class="btn-back">
        <a href="#landing-page"><button href="" class="btn">Voltar ao topo</button></a>
    </div>

</footer>

</html>