<?php
/**
 * Controles en formularios (2) 3-2 - archivo2.php
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
    Datos personales 3 (Resultado).
    Controles en formularios (2). Con formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css" title="Color">
</head>

<body>
  <h1>Datos personales 3 (Resultado)</h1>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $genero = isset($_GET["genero"]) ? $_GET["genero"] : "";
  $aficiones = "";

  if (isset($_GET["cine"])) {
    $aficiones .= "Cine, ";
  }

  if (isset($_GET["literatura"])) {
    $aficiones .= "Literatura, ";
  }

  if (isset($_GET["musica"])) {
    $aficiones .= "Música";
  }

  echo "<p><strong>Sexo:</strong> $genero</p>";
  echo "<p><strong>Aficiones:</strong> $aficiones</p>";
}
?>

  <p><a href="archivo1.html">Volver al formulario.</a></p>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
