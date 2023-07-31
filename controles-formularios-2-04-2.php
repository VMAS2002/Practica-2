<?php
/**
 * Controles en formularios (2) 4-2 - archivo2.php
 *
 * @aSebastian Corrales Gutierrez
 *
 */
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Datos personales 4 (Resultado).
    Controles en formularios (2). Con formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css" title="Color">
</head>

<body>
  <h1>Datos personales 4 (Resultado)</h1>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $correo = isset($_GET["correo"]) ? $_GET["correo"] : "";
  $correo2 = isset($_GET["correo2"]) ? $_GET["correo2"] : "";
  $recibir = isset($_GET["recibir"]) ? $_GET["recibir"] : "";

  echo "<p><strong>Dirección de correo:</strong> $correo</p>";
  echo "<p><strong>Confirmación de correo:</strong> $correo2</p>";
  echo "<p><strong>Recibir correos nuestros:</strong> ";
  if ($recibir == "1") {
    echo "Sí</p>";
  } elseif ($recibir == "0") {
    echo "No</p>";
  } else {
    echo "No especificado</p>";
  }
}
?>

  <p><a href="archivo1.html">Volver al formulario.</a></p>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
