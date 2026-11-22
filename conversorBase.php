<?php
$binario = '';
$decimal = '';
$octal = '';
$hexadecimal = '';
$erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $binario = trim($_POST['binario'] ?? '');

    if ($binario === '') {
        $erro = 'Por favor, digite um número binário.';
    } elseif (!preg_match('/^[01]+$/', $binario)) {
        $erro = 'Entrada inválida. Use apenas 0 e 1.';
    } else {
        $decimal = base_convert($binario, 2, 10);
        $octal = base_convert($binario, 2, 8);
        $hexadecimal = strtoupper(base_convert($binario, 2, 16));
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Binário</title>
    <link rel="stylesheet" href="css-grupo/conversorBase.css">
</head>
<body>
    <h1>Conversor Binário</h1>
    
    <form method="POST" action="">
        <label for="binario">Número Binário (Base 2):</label>
        <input type="text" id="binario" name="binario" placeholder="Ex: 101101" value="<?= htmlspecialchars($binario) ?>"  required >
    <button type="submit">Converter</button>
    </form>

    <?php if ($erro): ?>
        <div><?= htmlspecialchars($erro) ?></div>
    <?php endif; ?>

    <?php if ($decimal !== ''): ?>
        <div>
            <div>
                <h3>Decimal (Base 10):</h3>
                <h3><?= htmlspecialchars($decimal) ?></h3>
            </div>
            <div>
                <h3>Octal (Base 8):</h3>
                <h3><?= htmlspecialchars($octal) ?></h3>
            </div>
            <div>
                <h3>Hexadecimal (Base 16):</h3>
                <h3><?= htmlspecialchars($hexadecimal) ?></h3>
            </div>
        </div>
    <?php endif; ?>
    <button onclick="window.location.href='dashboard.php'">Voltar para a página inicial</button>
</body>
</html>