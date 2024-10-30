<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "kidscript_db";

// $servername = "sql113.infinityfree.com";
// $username = "if0_36928071";
// $password = "SUGmxu0iqoLhX4";
// $database = "if0_36928071_kidscript";

// Criar conexão    
$conn = mysqli_connect($servername, $username, $password, $database);

// Checar conexão
if (!$conn) {
    die("Erro: " . mysqli_connect_error());
}
