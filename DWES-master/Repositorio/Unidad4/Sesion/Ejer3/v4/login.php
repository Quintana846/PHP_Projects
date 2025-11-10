<?php
session_start();

if(!isset($_POST['usuario'] & $_POST['contraseña'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form action="inicio.php" method="post">
        <h1>Inicio de sesión</h1>
        Nombre <input type="text" name="usuario">
        Constraseña <input type="text" name="contraseña"> <br>
        <input type="button" value="Entrar">
    </form>
</body>
</html>

<?php
} else
$hn= "localhost";
$db= "bdsimon";
$un= $_POST['usuario'];
$pw= $_POST['contraseña'];

?>