<?php
/**
 * Controles en formularios (2) 2-2 - controles-formularios-2-02-2.php
 *
 * @author Escriba aquí su nombre
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Datos personales 2 (Resultado).
    Controles en formularios (2). Con formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css" title="Color">
</head>

<body>
  <h1>Datos personales 2 (Resultado)</h1>

<?php


$edad = $_GET['edad'];
$peso = $_GET['peso'];

echo "La edad es:" .$edad;
echo "El apellido registrado es" .$peso;

print "  <p class=\"aviso\">Ejercicio incompleto</p>\n";

?>

  <p><a href="controles-formularios-2-02-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
