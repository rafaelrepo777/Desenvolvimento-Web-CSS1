<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Real para Dólar</title>
    <link rel="stylesheet" href="css-grupo/conversorMoeda.css">
</head>
<body>
    <h1>Conversor de Real para Dólar</h1>
    <form action="conversorMoedaRes.php" method="post">
        <label for="idinheiro">Digite o valor em Real (R$):</label><br>
        <input type="number" id="idinheiro" name="dinheiro" step="0.01" required><br><br>
        <button type="submit">Converter</button><br><br>
    </form>
    <button onclick="window.history.back()">Voltar</button>
</body>
</html>