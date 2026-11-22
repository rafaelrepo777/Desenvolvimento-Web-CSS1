<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libras para Quilos</title>
    <link rel="stylesheet" href="css-grupo/conversorPeso.css">
</head>
<body>
    <h1>Conversor de Libras (lbs) para Quilos (kg)</h1>
    <form method="POST">
        <label>Libras (lbs):</label>
        <input type="number" name="libras" step="any" required>
        <button type="submit">Converter</button>
    </form>

    <?php
    if (isset($_POST['libras'])) {
        $libras = $_POST['libras'];
        $quilos = $libras * 0.453592;
        echo "<h2>O resultado da conversão é:</h2>";
        echo "<h3>$libras lbs = " . round($quilos, 2) . " kg</h3><br>";
    }
    ?>
    <br><button onclick="window.location.href='dashboard.php'">Voltar para a página inicial</button>
</body>
</html>
