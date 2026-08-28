<?php
session_start();

if ($_SESSION["nombre"]==null && $_SESSION["apellido"]==null){
    header('Location: index.php'); 
}
?>

<!-- Idea de pagina: pagina para subir y jugar juegos -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="iconos/carga.gif">
    <title>Document</title>
</head>
<?php include'includes/header.php' ?>
<body>
    <div class="tex1">
    nombre:<?php echo $_SESSION["nombre"];?><br>
    apellido:<?php echo $_SESSION["apellido"];?><br>
    </div>
</body>
<a href="logout.php">salir</a>
<?php include'includes/footer.php'?>
<!-- <?php include'proyecto/index.html'?> -->
</html>