<?php require 'conexion.php'; ?>

<form method="POST" action="procesar_formulario.php">
  <label>Nombre: <input type="text" name="nombre" required></label><br>
  <label>Portada: <input type="text" name="portada"></label><br>
  <label>Ruta: <input type="text" name="ruta" required></label><br>
  <label>Descripcion: <input type="text" name="descripcion"></label><br>
  <label>Genero 1:
    <select name="genero1_id">
      <?php
      $resultado = mysqli_query($conexion,
          'SELECT id, nombre FROM generos ORDER BY nombre');
      while ($d = mysqli_fetch_assoc($resultado)) {
      ?>
        <option value="<?php echo $d['id']; ?>">
          <?php echo $d['nombre']; ?>
        </option>
      <?php } ?>
    </select>
  </label><br>
  <label>Genero 2:
    <select name="genero2_id">
      <?php
      $resultado = mysqli_query($conexion,
          'SELECT id, nombre FROM generos ORDER BY nombre');
      while ($d = mysqli_fetch_assoc($resultado)) {
      ?>
        <option value="<?php echo $d['id']; ?>">
          <?php echo $d['nombre']; ?>
        </option>
      <?php } ?>
    </select>
  </label><br>
  <label>Creador:
    <select name="creador_id">
      <?php
      $resultado = mysqli_query($conexion,
          'SELECT id, nombre FROM creadores ORDER BY nombre');
      while ($d = mysqli_fetch_assoc($resultado)) {
      ?>
        <option value="<?php echo $d['id']; ?>">
          <?php echo $d['nombre']; ?>
        </option>
      <?php } ?>
    </select>
  </label><br>
  <button>Guardar</button>
</form>