<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<body>
    <div id="formulario">
    <form action="login.php" method="post" >
        <div class="form-control">
            <label>email</label>
            <input type="email" name="email" placeholder="ingrese un email" required>
        </div>
        <div class="form-control">
            <label>clave</label>
            <input type="password" name="clave" placeholder="ingrese contraseña" required> 
        </div>
        <input type="submit" value="ingresar">
    </form>
    </div>
    <?php
    if (isset($_GET['error']) && $_GET['error'] == 'incorrecto') {
        echo '<p style="color: red">Credenciales incorrectas.</p>';
    }
    ?>
</body>
</html>