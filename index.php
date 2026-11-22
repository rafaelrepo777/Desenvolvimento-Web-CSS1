<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css-grupo/login.css">
</head>
<body>
    <form action="dashboard.php" method="post">
        <label for="iemail">Email:</label><br>
        <input type="email" id="iemail" name="e-mail" required><br>
        <label for="ipassword">Senha:</label><br>
        <input type="password" id="ipassword" name="password" required><br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>