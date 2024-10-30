<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="icon" href="../assets/images/kidscript-shortcut-icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../components/header/header.css">
    <link rel="stylesheet" href="../components/footer/footer.css">

    <link rel="stylesheet" href="../styles/utils.css">
    <link rel="stylesheet" href="../styles/about.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,0" />

    <meta charset="UTF-8">
    <title>KidScript | Sobre nós</title>
</head>

<body>

    <?php include '../components/header/header.php'; ?>

    <main>

        <h2 data-aos="fade-left" id="landing-page">Sobre Nós</h2>

        <div class="mvv">

        <!--  Utilização de Data aos para animações da página  -->

            <div class="mission card" data-aos="fade-left">
                <h3>Nossa missão</h3>
                <p>
                    Nosso propósito é transformar a forma como as crianças interagem com a tecnologia, oferecendo uma
                    abordagem lúdica e educativa para o aprendizado de programação. Buscamos otimizar o tempo
                    dedicado a dispositivos eletrônicos, transformando-o em uma experiência de aprendizado
                    significativa e estimulante.
                </p>
            </div>

            <div class="values card" data-aos="fade-left">
                <h3>Nossos valores</h3>
                <p>
                    Em nosso projeto, temos como valores fundamentais a educação de qualidade, a responsabilidade
                    digital, a inclusão e a diversão no aprendizado.
                </p>
            </div>

            <div class="vision card" data-aos="fade-left">
                <h3>Nossa visão</h3>
                <p>
                    Nossa visão é inspirar uma nova geração de jovens programadores, capacitando-os para um futuro
                    digital brilhante e promovendo uma abordagem inovadora e divertida no aprendizado de habilidades
                    tecnológicas essenciais.
                </p>
            </div>
        </div>

        <div class="video">
            <iframe src="https://www.youtube.com/embed/IURcu5BYTOE?si=G_2474twSwtAPpP3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>


    </main>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <?php include '../components/footer/footer.php'; ?>


</body>

</html>
