<?php
/**
 * Controles en formularios (2) 11-2 - controles-formularios-2-11-2.php
 *
 * @author Viviana Álvarez Solano
 *
 */
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>
    Cuadrado con bordes redondeados (Resultado).
    Controles en formularios (2). Con formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css" title="Color">
</head>

<body>
  <h1>Cuadrado con bordes redondeados (Resultado)</h1>


  <?php
  if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $lado = isset($_GET["lado"]) ? $_GET["lado"] : "";
    $esquina = isset($_GET["esquina"]) ? $_GET["esquina"] : "";
    $recibir = isset($_GET["recibir"]) ? $_GET["recibir"] : "";

    echo "<p><strong>Tamaño del Cuadrado:</strong> $lado</p>";
    echo "<p><strong>Tamaño de la esquina redondeada:</strong> $esquina</p>";
  }
  ?>
  <p></p>

  <h1>Su cuadrado es: </h1>

  <svg name="cuadrado" width="100" height="100" viewBox="0 0 120 100">

    <rect width="100" height="100" x="20" y="20" fill="RoyalBlue" />

  </svg>


  <p><a href="controles-formularios-2-11-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Viviana Alvarez Solano</p>
  </footer>
</body>

</html>