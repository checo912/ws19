<?php

$usuarios = [
    'arturo.alvarez' => password_hash('arturo123', PASSWORD_DEFAULT),
    'sergio.garcia' => password_hash('sergio123', PASSWORD_DEFAULT),
    'pamela.monroy' => password_hash('pamela123', PASSWORD_DEFAULT)
];

if (!empty($_POST["nickname"]) && !empty($_POST["password"])) {
    $nickname = $_POST["nickname"];
    $password = $_POST["password"];

    if (array_key_exists($nickname, $usuarios)) {
        if (password_verify($password, $usuarios[$nickname])) {
            $error = "OK";
            echo "Bienvenido a BOCAR GROUP"; 
        } else {
            $error = "incorrecto";
            header("Location: index.php?error=$error");
            exit();
        }
    } else {
        $error = "incorrecto";
        header("Location: index.php?error=$error");
        exit();
    }
} else {
    $error = "vacio";
    header("Location: index.php?error=$error");
    exit();
}
?>
