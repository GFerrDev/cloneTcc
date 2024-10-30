<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: unlogged.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">


<head>
    <link rel="icon" href="../assets/images/kidscript-shortcut-icon.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles//utils.css">
    <link rel="stylesheet" href="../components/header/header.css">
    <link rel="stylesheet" href="../styles/game.css">

    <!-- icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,0" />
    <!-- icons -->
    <title>KidScript | Snake Game</title>


</head>


<body>

    <?php include '../components/header/header.php'; ?>
    <div class="ide">
        <!-- comida >forma e cor ; cores da pagina; cores das linhas-->
        <div class="ideHeader">
            <span>snake game style</span>
            <button onclick="openIde()" class="ideBtn">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                    class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z" />
                </svg>
            </button>
        </div>
        <form id="elementForm" method="get" action="">
            <select name="elemento" id="elemento">
                <option value="">Elemento</option>
                <option value="cabeca">Cabeça da cobra</option>
                <option value="corpo">Corpo da cobra</option>
                <option value="comida">Comida</option>
                <option value="linhas">Linhas do campo</option>
            </select><span> {</span><br>

            <select name="atributo1" id="atributo1" required>
                <option value="cor">Cor</option>
            </select><span> : </span>

            <select class="valor" name="valor1" id="valor1">
                <option value="">Valor</option>
                <option value="#ff0000">vermelho</option>
                <option value="#0e420b">Verde</option>
                <option value="#238d1d">Verde escuro</option>
                <option value="#0051ff">Azul</option>
                <option value="#08007b">Azul escuro</option>
            </select><span> ;</span><br>
            <p>}</p>

            <input id="ideBtn" class="btn" type="submit" value="Enviar">
        </form>


        <?php

        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            // ***    
            $elemento = isset($_GET['elemento']) ? $_GET['elemento'] : '';
            $atributo1 = isset($_GET['atributo1']) ? $_GET['atributo1'] : '';
            $valor1 = isset($_GET['valor1']) ? $_GET['valor1'] : '';
            // **
            $cor = $valor1;

        }

        if ($elemento == 'campo') {
            $canvasDefaultColor = '#81b56e';
        }
        ?>


    </div>

    <div class="game-panel ">
        <div class="score"><span>Score: </span><span class="score--value">00</span>

            <div class="menu-screen">
                <span class="game-over"> Game Over </span>
                <span class="final-score"> Score <span>00</span></span>

                <button class="btn-play">
                    Jogar Novamente
                </button>
            </div>
        </div>
        <button id="rotate" onclick="landScape()">
            <img src="../assets/images/rotate.png" alt="Botão de rotacionar">
        </button>
        <button id="toggleNav" onclick="toggleNav()">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-chevron-bar-down" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M3.646 4.146a.5.5 0 0 1 .708 0L8 7.793l3.646-3.647a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 0-.708M1 11.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5" />
            </svg>
        </button>
        <canvas width="600" height="600"></canvas>
        <div class="gameNav">
            <button id="toggleNav1" onclick="toggleNav()">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-chevron-bar-up"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M3.646 11.854a.5.5 0 0 0 .708 0L8 8.207l3.646 3.647a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 0 0 0 .708M2.4 5.2c0 .22.18.4.4.4h10.4a.4.4 0 0 0 0-.8H2.8a.4.4 0 0 0-.4.4" />
                </svg>
            </button>

            <div class="control">
                <button onclick="leftPressed()">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-left-square-fill"
                        viewBox="0 0 16 16">
                        <path
                            d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1" />
                    </svg>
                </button>
                <div class="sides">
                    <button onclick="upPressed()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-up-square-fill" viewBox="0 0 16 16">
                            <path
                                d="M2 16a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2zm6.5-4.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 1 0" />
                        </svg></button>
                    <button onclick="downPressed()">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-down-square-fill"
                            viewBox="0 0 16 16">
                            <path
                                d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6.5 4.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5a.5.5 0 0 1 1 0" />
                        </svg>
                    </button>
                </div><button onclick="rightPressed()">
                    <svg id="arrowRigth" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                        <path
                            d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1" />
                    </svg>
                </button>
            </div>
            <button onclick="openIde()" class="ideBtn">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-file-earmark-code"
                    viewBox="0 0 16 16">
                    <path
                        d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z" />
                    <path
                        d="M8.646 6.646a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 9 8.646 7.354a.5.5 0 0 1 0-.708m-1.292 0a.5.5 0 0 0-.708 0l-2 2a.5.5 0 0 0 0 .708l2 2a.5.5 0 0 0 .708-.708L5.707 9l1.647-1.646a.5.5 0 0 0 0-.708" />
                </svg>
            </button>
        </div>

        <div class="gap"></div>


    </div>
    <script>
        const rotate = document.getElementById('rotate');
        const body = document.body;

        function landScape() {
            body.classList.toggle("landScape");
        };

        function openIde() {
            body.classList.toggle("openIde");
        };

        function toggleNav() {
            body.classList.toggle("navDisplay");
        }

        const canvas = document.querySelector('canvas');
        const ctx = canvas.getContext('2d'); // ctx = context (contexto)

        const score = document.querySelector(".score--value")
        const finalScore = document.querySelector(".final-score > span") // pegando o span de dentro do "final-score"
        const menu = document.querySelector('.menu-screen')
        const buttonPlay = document.querySelector('.btn-play')
        const audio = new Audio('coin.mp3')
        const size = 30
        const initalPosition = {
            x: 300,
            y: 300
        }

        let snake = [{
            x: 300,
            y: 300
        },]

        const addScore = () => {
            score.innerHTML = +score.innerHTML + 10
        }

        const randomNumber = (min, max) => {
            return Math.round(Math.random() * (max - min) + min)
        }

        const randomPosition = (min, max) => {
            const number = randomNumber(0, canvas.width - size) // para a comida não ficar fora do grid, se retira o tamanho do bloco do tamanho do canvas
            return Math.round(number / 30) * 30 // esse calculo dá muitos números "quebrados" por isso esta em ".round"
        }

        const food = {
            x: randomPosition(0, 570),
            y: randomPosition(0, 570),
            color: '<?php
            $foodDefaultColor = "red";
            if ($elemento == "comida") {
                $foodDefaultColor = $cor;
            }
            echo $foodDefaultColor;
            ?>'
        }

        let direction, loopId; // loopId fica aqui para poder se chamada mais tarde antes da declaração do que ela faz, para que o loop anterior possa ser limpo antes de executar ele novamente

        const drawFood = () => {

            const {
                x,
                y,
                color
            } = food //food carrega com si, sua cor, e cordenadas, então não se tem a necessidade de puxar "food" e o atributo definido

            ctx.shadowColor = color;
            ctx.shadowBlur = 50;
            ctx.fillStyle = color;
            ctx.beginPath();
            ctx.arc(x + size / 2, y + size / 2, size / 2, 0, Math.PI * 2, true); // Desenha um círculo para a comida
            ctx.fill();
            ctx.shadowBlur = 0;
        }

        const drawSnake = () => {
            ctx.fillStyle = '<?php
            $snakeDefaultColor = "#0e420b";
            if ($elemento == "corpo") {
                $snakeDefaultColor = $cor;
            }
            echo $snakeDefaultColor;
            ?>'

        snake.forEach((position, index) => {

            if (index == snake.length - 1) {
                ctx.fillStyle = '<?php
                $snakeHeadDefaultColor = "#238d1d";
                if ($elemento == "cabeca") {
                    $snakeHeadDefaultColor = $cor;
                }
                echo $snakeHeadDefaultColor;
                ?>'
                // colore o ultimo elemento, que é a cabeça da cobra
            }

            ctx.beginPath();
            ctx.arc(position.x + 15, position.y + 15, size / 2, size / 2, Math.PI * 2, true) // posição x, posição y (vertical e horizontal, "size, size" = tamanho declarado na variável fixa de nome size)
            ctx.fill()
            ctx.stroke()
        })
        }

        const moveSnake = () => {
            if (!direction) return // se não tiver indo para lado nenhum, não executa o comando de colocar e tirar blocos abaixo

            const head = snake[snake.length - 1]


            if (direction == 'right') {
                snake.push({
                    x: head.x + size,
                    y: head.y
                }) //adiciona um bloco como primeiro na direção que a cobra está andando 
            }
            if (direction == 'left') {
                snake.push({
                    x: head.x - size,
                    y: head.y
                }) //adiciona um bloco como primeiro na direção que a cobra está andando 
            }
            if (direction == 'up') {
                snake.push({
                    x: head.x,
                    y: head.y - size
                }) //adiciona um bloco como primeiro na direção que a cobra está andando 
            }
            if (direction == 'down') {
                snake.push({
                    x: head.x,
                    y: head.y + size
                }) //adiciona um bloco como primeiro na direção que a cobra está andando 
            }

            snake.shift() //remove o ultimo elemento da array 
        }

        const drawGrid = () => {
            ctx.lineWidth = 1
            ctx.strokeStyle = '<?php
            $lineDefaultColor = "#19191";
            if ($elemento == "linhas") {
                $lineDefaultColor = $cor;
            }
            echo $lineDefaultColor;
            ?>'

        for (let i = 30; i < canvas.width; i += 30) {
            ctx.beginPath()
            ctx.lineTo(i, 0)
            ctx.lineTo(i, 600)
            ctx.stroke()

            ctx.beginPath()
            ctx.lineTo(0, i)
            ctx.lineTo(600, i)
            ctx.stroke()
        }

        }

        const checkEat = () => {
            const head = snake[snake.length - 1]

            if (head.x == food.x && head.y == food.y) {
                addScore()
                snake.push(head) // verifica se a posição da cabeça da cobra é a mesma da comida e adicona mais um bloco no corpo da cobra (no mesmo esquema já visto antes: adiciona um bloco a frente, e exclui o ultimo de trás para a cobra se movimentar)
                audio.play() // se a cobra passar por cima, reproduz o audio

                food.x = randomPosition(),
                    food.y = randomPosition()

                let x = randomPosition()
                let y = randomPosition()

                while (snake.find((position) => position.x == x && position.y == y)) {
                    x = randomPosition(0, canvas.width - size);
                    y = randomPosition(0, canvas.height - size);
                }
                // quando a cobra está grande de mais, a comida gera em baixo do corpo dela as vezes, esse while faz com que, se o corpo da cobra estiver passando por cima do local onde seria gerada a comida, ela rode o loop ate achar um lugar onde o corpo da cobra não esteja passando por cima e tambem impede que seja gerada fora do canvas

                food.x = x
                food.y = y
            }
        }


        const checkCrash = () => {
            const head = snake[snake.length - 1]
            const canvasLimit = canvas.width - size
            const neckIndex = snake.length - 2 // verifica a partir de pescoço(um bloco após a cabeça da cobra)


            const wallCrash =
                head.x < 0 || head.x > canvasLimit || head.y < 0 || head.y > canvasLimit

            const selfCollision = snake.find((position, index) => {
                return index < neckIndex && position.x == head.x && position.y == head.y // se a cobra colidir com ela mesma em qualaquer ponto de sua extensão/cauda, tambem é resetado o jogo
            })

            if (wallCrash || selfCollision) {
                gameOver() // se a posição de algum ponto do corpo passar de 570 o navegador vai exibir essa mensagem
            }
        }

        const gameOver = () => {
            direction = undefined

            menu.style.display = 'flex'
            finalScore.innerHTML = score.innerHTML

        }

        const gameLoop = () => {
            clearInterval(loopId)
            ctx.clearRect(0, 0, 600, 600) //limpa o quadrado movido para frente para que um novo possa ser adicionado
            drawGrid() // desenha as grades
            drawFood() // posiciona a comida
            moveSnake() // move a cobra ou se ainda não teve movimento posiciona ela no local default
            drawSnake() //executa/cria um pixel/bloco da cobra
            checkEat() // verifica se a cobra comeu o objeto
            checkCrash() // se você bater na parede voce perde por conta dessa função
            loopId = setTimeout(() => {
                gameLoop()
            }, 220) // ms
        }

        gameLoop() //executa o jogo

        function leftPressed() {
            direction = `left`;
        }

        function upPressed() {
            direction = `up`;
        }

        function downPressed() {
            direction = `down`;
        }

        function rightPressed() {
            direction = `right`;
        }

        document.addEventListener('keydown', ({
            key
        }) => { // possibilita o console pegar informações de qual tecla está sendo pressionada no seu teclado
            if (key == 'ArrowRight' && direction != 'left') {
                direction = 'right'
            }

            if (key == 'ArrowLeft' && direction != 'right') {
                direction = 'left'
            }

            if (key == 'ArrowUp' && direction != 'down') {
                direction = 'up'
            }

            if (key == 'ArrowDown' && direction != 'up') {
                direction = 'down'
            }

            // "&& direction != 'alguma direção' " é usado para que a cobra não possa mudar de posição de um lado posto a outro
        })

        buttonPlay.addEventListener('click', () => {
            score.innerText = '00'
            menu.style.display = 'none'

            snake = [initalPosition]
        })

        // for(var i = 0; i < 1; i++){
        //     setTimeout(5)
        //     body.innerHTML = '<div class="time-limit"><h3>Você excedeu o limite de tempo</h3><br>Volte amanhã para seguir aprendendo<br><button class="btn"><a href="select-game.php">Encerrar</a></button></h3></div>'

        // }
        // ***
        setTimeout(function () {
            document.body.innerHTML = '<div class="time-limit"><h3>Você excedeu o limite de tempo</h3><br>Volte amanhã para seguir aprendendo<br><button class="btn"><a href="select-game.php">Encerrar</a></button></h3></div>';
        }, 3600000);
        //**
    </script>
    <!--
    *** Referencias utilizadas nessa pagina ***
    https://www.youtube.com/watch?v=LyWSsZktVOg&t=959s
    https://www.youtube.com/watch?v=Je0B3nHhKmM&t=1257s
    https://developer.mozilla.org/en-US/docs/Web/API/Canvas_API
    https://chatgpt.com/
        Esta pagina contem diversos trexos de codigo que utilizaram
    ia como ferramenta de desenvolvimento e Referencias de codigo. 
    Apenas os marcados com *** no inicio e ** no fim contem codigo 
    copiado de ia
    -->
</body>

</html>