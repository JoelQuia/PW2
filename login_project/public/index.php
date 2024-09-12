<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (isset($_GET['error'])): ?>
        <p style="color:red;">Usuário ou senha incorretos!</p>
    <?php endif; ?>
    <form action="process_login.php" method="POST">
        <label for="username">Usuário:</label>
        <input type="text" id="username" name="username" required>
        <br><br>
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
