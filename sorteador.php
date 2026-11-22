<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de Números</title>
    <link rel="stylesheet" href="css-grupo/sorteador.css">
</head>
<body>
    <h1>Sorteador de Números</h1>
    <?php 
        $min = 0;
        $max = 100;
        $number = mt_rand($min, $max);

        echo "<p>Sorteando um número entre $min e $max...<br> O número sorteado foi: <strong>$number</strong></p>";
    ?>
    <button onclick="location.reload()">Sortear outro Número</button><br><br>
    <button onclick="window.location.href='dashboard.php'">Voltar para a página inicial</button>
</body>
</html>