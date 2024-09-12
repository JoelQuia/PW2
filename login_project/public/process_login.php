<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $valid_user = "admin";
    $valid_password = "admin123";

    
    if ($username === $valid_user && $password === $valid_password) {
        echo "<h2>Login com sucesso!</h2>";
    } else {
        header("Location: index.php?error=1");
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
