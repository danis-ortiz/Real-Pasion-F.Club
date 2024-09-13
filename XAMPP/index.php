<!DOCTYPE html>
<html>
<head>
  <title>Formulario</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
  <form method="post">
    <h1>Registrarse</h1>
    <input type="text" name="name" placeholder="Nombre Completo">
    <input type="email" name="email" placeholder="Correo Electronico">
    <input type="submit" name="REGISTRAR">
  </form>
  <?php
  include("registrar.php")
  ?>
</body>
</html>