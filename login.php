<?php
session_start();

$email = $_POST["email"];
$clave = $_POST["clave"];

$usermail="admin@admin.com";
$userclave="biscocho";

$clave=trim(htmlspecialchars($clave));
if(empty($email) or empty($clave))
{
     echo "error en las credemciales";
     exit();
}
if($email == $usermail && $clave == $userclave)
{
    $_SESSION["nombre"]="Pepe";
    $_SESSION["apellido"]="grillo";
    header("Location: home.php");
    exit();
}
else
{
    header("Location: index.php?error=incorrecto");
    exit();
}
?>