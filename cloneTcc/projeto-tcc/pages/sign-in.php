
<?php

include '../components/configs/config.php';

if (isset($_SESSION['username'])) {
    header("Location: profile.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username_input = mysqli_real_escape_string($conn, $_POST['username-input']);
    $password_input = mysqli_real_escape_string($conn, $_POST['password-input']);
    $password_input_validation = mysqli_real_escape_string($conn, $_POST['password-input-validation']);
    $email_input = mysqli_real_escape_string($conn, $_POST['email-input']);
    $email_input_validation = mysqli_real_escape_string($conn, $_POST['email-input-validation']);
    $username_input_age = mysqli_real_escape_string($conn, $_POST['username-age']);
    $username_input_name = mysqli_real_escape_string($conn, $_POST['username-name']);

    // Checar se as senhas são iguais
    if ($password_input !== $password_input_validation) {
        echo "<div class='card-msg'><p>Erro: As senhas não coincidem.</p></div>";
    } else if ($email_input !== $email_input_validation) {
        echo "<div class='card-msg'><p>Erro: Os emails não coincidem.</p></div>";
    } else {
        // Encriptografar a senha que acabou de ser recebida
        // Esse trecho do código foi gerado por Inteligência Artificial
        $hashed_password = password_hash($password_input, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (username, user_password, user_email, user_age, user_name) VALUES (?, ?, ?, ?, ?)";

        $stmt = mysqli_stmt_init($conn);
        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, "sssis", $username_input, $hashed_password, $email_input, $username_input_age, $username_input_name);

            if (mysqli_stmt_execute($stmt)) {
                header("Location: login.php");
                exit();
            } else {
                echo "Erro: Não foi possível inserir a consulta desse usuário: " . mysqli_error($conn);
            }
        } else {
            echo "Erro: A preparação da consulta falhou: " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- HTML5 & page default configs -->
    <link rel="icon" href="../assets/images/kidscript-shortcut-icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>KidScript | Cadastre</title>
    <!-- HTML5 default configs -->
    <!-- icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,0" />
    <!-- icons -->

    <!-- Page styles -->
    <link rel="stylesheet" href="../styles/utils.css">
    <link rel="stylesheet" href="../components/header/header.css">
    <link rel="stylesheet" href="../styles/sign-in.css">
</head>

<body>

    <?php include '../components/header/header.php'; ?>

    <div class="container">

        <div class="pop-up sign-in-page">
            <div class="logo-login">
                <img src="../assets/images/logo.png" alt="Logo Kidscript" width="250px">
            </div>
            <div class="sign-in-title">
                <h2>FAÇA SEU CADASTRO</h2>
            </div>
            <form action="" method="POST" class="sign-in-form">
                <div class="input">
                    <input type="text" id="username-input" name="username-input" placeholder="Nome de usuário" required>

                </div>
                <div class="input">
                    <input type="text" id="username-name" name="username-name" placeholder="Nome" required>

                </div>
                <div class="input">
                    <input type="number" id="username-age" name="username-age" placeholder="Idade" required>

                </div>
                <div class="input">
                    <input type="password" id="password-input" name="password-input" placeholder="Senha" required>
                </div>
                <div class="input">
                    <input type="password" id="password-input-validation" name="password-input-validation" placeholder="Repita a senha" required>

                </div>
                <div class="input">
                    <input type="email" id="email-input" name="email-input" placeholder="E-mail" required>

                </div>
                <div class="input">
                    <input type="email" id="email-input" name="email-input-validation" placeholder="Repita o e-mail" required>

                </div>

                <div class="btn-submit input">
                    <input type="submit" value="Cadastrar" class="btn btn-submit">
                </div>

            </form>
            <div class="input login-page-btn">
                <a href="login.php">Já tenho login?</a>

            </div>

        </div>

    </div>
</body>

</html>