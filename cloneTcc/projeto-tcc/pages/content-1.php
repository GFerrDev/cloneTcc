<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/images/kidscript-shortcut-icon.png">
    <link rel="stylesheet" href="../components/header/header.css">
    <link rel="stylesheet" href="../styles/utils.css">
    <link rel="stylesheet" href="../styles/content.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,0" />

    <meta charset="UTF-8">
    <title>KidScript | Linguagem de Estilo</title>
</head>

<body>

    <?php include '../components/header/header.php'; ?>

    <main>

        <div class="section" id="CDSection">
            <div class="expSection" id="expSection">
                <div class="exp-inform">
                    <div class="video">
                    <div class="btn_div">
                            <label class="switch btn-exp">
                                <input type="checkbox" id="toggle">
                                <span class="slider"></span>
                            </label>
                        </div>
                        <div class="title-btn">
                            
                            <h2>2. Linguagem de Estilo</h2>
                        </div>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/c5Na7YaEKyE?si=18bZDWRURvV-Heup" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>


                    <div id="modulo" class="text-content">
                        <h2>O que é Linguagem de Estilo?</h2>
                        <p>A linguagem de estilo é como colorir as páginas do computador e foi criada para fazer nossos sites e páginas mais bonitos e interessantes.</p>

                        <p>Na linguagem de estilo, usamos comandos para dizer ao computador como queremos que os sites se pareçam e com os comandos falamos para as máquinas como os elementos devem aparecer na tela, definindo cores, formas e tamanhos.</p>

                        <h2>Como usamos?</h2>
                        <p>Para definirmos cores e formas dos elementos da nossa página, primeiro selecionamos o nosso elemento, que é o que queremos mudar. </p>
                        <p>Depois, definimos oque queremos mudar dentro do elemento, como a cor, junto com o valor que define ela.</p>
                        <p> Formando assim esta estrutura de comando:</p>

                        <img src="../assets/images/ex1.png" alt="Exemplo 1 Linguagem de estilo" width="200px">

                        <h2>Exemplo:</h2>
                        <p>Como exemplo, faremos um código que muda a parede de uma casa ficticia:</p>
                        
                        <img src="../assets/images/ex2.png" alt="Exemplo 2 Linguagem de estilo" width="200px">
                        
                        <h2>Pratique!</h2>
                        <p>Agora que tu já sabe como definir cores diferentes para os elementos da tela, pratique seu aprendizado mudando as cores do jogo Snake Game!</p>
                        
                        <br>
                       <a href="./game.php"><button class="btn login">
                            Pratique
                        </button></a>
                    </div>
                </div>
            </div>
    </main>

    <script src="../assets/script/content.js"></script>
</body>

</html>