<?php 
    $nome = "aluno";
    $email = "aluno@teste.com";
    $senha = "123456";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $eemail = $_POST["e-mail"];
        $password = $_POST["password"];

        if ($eemail === $email && $password === $senha) {
            echo "<h1>Bem-vindo, $nome!</h1>";
        } else {
            echo "<h1>Usuário ou senha incorretos.</h1>";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4 em 1</title>
    <link rel="stylesheet" href="css-grupo/dashboard.css">
</head>
<body>
    <img class="hero-photo" src="assets/foto-calculadora.jpg" alt="Mesa de trabalho com laptop, calculadora e caderno">
    <h1>4 em 1</h1>
    <nav>
        <ul>
            <li><a href="conversorMoeda.php">Conversor de Real(BRL) para Dolar(USD)</a></li>
            <li><a href="conversorPeso.php">Conversor de Libra(lb) para Quilo(kg)</a></li>
            <li><a href="sorteador.php">Sorteador de Números</a></li>
            <li><a href="conversorBase.php">Conversor de Base Numérica</a></li>
        </ul>
    </nav>
</body>
