<?php
include '../components/configs/config.php';

if (isset($_SESSION['username'])) {
    header("Location: profile.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username_input = mysqli_real_escape_string($conn, $_POST['username-input']);
    $password_input = mysqli_real_escape_string($conn, $_POST['password-input']);

    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = mysqli_stmt_init($conn);
    if (mysqli_stmt_prepare($stmt, $sql)) {
        // Esse trecho do código foi gerado por Inteligência Artificial
        mysqli_stmt_bind_param($stmt, "s", $username_input);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password_input, $row['user_password'])) {
                $_SESSION['username'] = $row['username'];
                $_SESSION['user_email'] = $row['user_email'];
                $_SESSION['user_age'] = $row['user_age'];
                $_SESSION['user_name'] = $row['user_name'];
                header("Location: profile.php");
                exit();
            } else {
                echo "<div class='card-msg'><p>Usuário ou senha incorreta.</p></div>";
            }
        } else {
            echo "<div class='card-msg'><p>Nenhum usuário encontrado</p></div>";
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- HTML5 & page default configs -->
    <link rel="icon" href="../assets/images/kidscript-shortcut-icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>KidScript | Login</title>
    <!-- HTML5 default configs -->
    <!-- icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,0" />
    <!-- icons -->

    <!-- Page styles -->
    <link rel="stylesheet" href="../styles/utils.css">
    <link rel="stylesheet" href="../components/header/header.css">
    <link rel="stylesheet" href="../styles/login.css">
</head>

<body>
    <?php include '../components/header/header.php'; ?>
    <div class="container">
        <div class="pop-up login-page">
            <div class="logo-login">
                <img src="../assets/images/logo.png" alt="Logo Kidscript" width="250px">
            </div>
            <div class="login-title">
                <h2>LOGIN</h2>
            </div>
            <form action="" method="POST" class="login-form">
                <div class="input">
                    <input type="text" id="username-input" name="username-input" placeholder="Digite seu usuário"
                        required>
                </div>
                <div class="input">
                    <input type="password" id="password-input" name="password-input" placeholder="Digite sua senha"
                        required>
                </div>
                <div class="btn-submit input">
                    <input type="submit" value="Entrar" class="btn btn-submit">
                </div>

            </form>
            <div class="input sign-in-page-btn">
                <a href="sign-in.php">Não tem uma conta? Cadastre-se</a>
            </div>
        </div>
    </div>
</body>

</html>