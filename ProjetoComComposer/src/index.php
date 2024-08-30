<?php
session_start();
if ($_SERVER ['REQUEST METHOD'] == 'POST'){
    $usuario = $_POST['usuario']??'';
    $senha = $_POST['senha']??'';

    $correctUsuário = 'admin';
    $correctSenha = 'admin123';

if ($usuario === $correctUsuário && $senha === $correctSenha ){
    $_SESSION['message'] = 'Login com Sucesso!';

}else{
    $_SESSION['message'] = 'Usuário ou Senha Incorretos';
 }
}

$message = $_SESSION['message']?? '';
unset ($_SESSION['message']);

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            padding: solid 10px blue;
        }
    </style>
</head>
<body>
    
<h1>Login</h1>
<?php if ($message):?>
    <p><?php echo htmlspecialchars($message);?></p>
<?php endif; ?>
    
    <form action="index.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <input type="submit" value=Enviar>
        <br><br>
        <label for="senha">Senha:</label>
        <input type="text" name="senha" id="senha">
        <input type="submit" value="Enviar">

        <?php
        
        ?>



    
</body>
</html>