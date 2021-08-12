<?php
 include_once '../lib/helpers.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Inicio sesi&oacute;n</title>
</head>
<body>
    <form action="<?php echo getUrl("acceso","acceso","login",false,"ajax");?>" method="POST">
        <div class="form-group">
            <h2>Inicio de Sesi&oacute;n</h2>
        </div>

        <div class="form-group">
         <label>Usuario</label>
         <input name="usuario" type="text" placeholder="Nickname o Correo">
        </div>

        <div class="form-group">
            <label>Contrase&ntilde;a</label>
            <input type="password" name="clave" placeholder="Contraseña">
        </div>
        <?php
            if (isset($_SESSION['mensaje'])) {
        ?>
            <p class="text-danger"><?=$_SESSION['mensaje']?></p>
        <?php
           unset($_SESSION['mensaje']);
           }
        ?>
        <input type="submit" value="Enviar" name="botoncito">
    </form>
   
</body>
</html>