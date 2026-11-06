<?php
$resultado = mysqli_query($conexion, 'SELECT * FROM juegos');
while ($fila = mysqli_fetch_assoc($resultado)) {
?>
  <article>
    <h2><?php echo $fila['nombre']; ?></h2>
    <p><?php echo $fila['descripcion']; ?></p>
  </article>
<?php } ?>