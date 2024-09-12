<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style">
    <title>Login</title> 
</head>

<body>
    <h2>Iniciar sesion</h2>
    <form action="procesar.php" method="POST">
    <p><label for="nickname">Usuario</label>
    <input type="text" name="nickname"></p>
    
    <p><label for="password">Password</label>
    <input type="text" name="password"></p>
     
<?php
if(isset($_GET["error"])){
    $error = $_GET["error"];
    if($error == "incorrecto"){
        echo "<h2>El usuario o el password no son correctos</h2>";
    }
    if($error == "vacio"){
        echo "<h2>Uno o mas campos estan vacios</h2>";
    }
}
?>

    <P><input type="submit" value="Accceder"></p>
    </form>

</body>
</html> 
