<?php require 'conexion.php';

$nombre = $_POST['nombre'];
$portada = $_POST['portada'];
$descripcion = $_POST['descripcion'];
$ruta = $_POST['ruta'];
$genero1_id = $_POST['genero1_id'];
$genero2_id = $_POST['genero2_id'];
$creador_id = $_POST['creador_id'];

$stmt = mysqli_prepare($conexion,
    'INSERT INTO juegos (nombre, portada, descripcion, ruta, genero1_id, genero2_id, creador_id) VALUES (?, ?, ?,?,?,?,?)');
mysqli_stmt_bind_param($stmt, 'ssssiii', $nombre, $portada, $descripcion, $ruta, $genero1_id, $genero2_id, $creador_id);

if (!mysqli_stmt_execute($stmt)) {
    die('No se pudo guardar: ' . mysqli_stmt_error($stmt));
}

header('Location: home.php');
?>