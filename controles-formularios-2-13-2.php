<?php
/**
 * Controles en formularios (2) 13-2 - controles-formularios-2-13-2.php
 *
 * @Gabriel Cárdenas Cordero 
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Gradiente en cuadrado (Resultado).
    Controles en formularios (2). Con formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css" title="Color">
</head>

<body>
  <h1>Gradiente en cuadrado (Resultado)</h1>


<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $lado = isset($_GET["lado"]) ? $_GET["lado"] : "";
  $inicial = isset($_GET["inicial"]) ? $_GET["inicial"] : "";
  $final = isset($_GET["final"]) ? $_GET["final"] : "";

  echo "Tamaño del Cuadrado: .$lado";
  echo "Color Inicial del Cuadrado: .$inicial";
  echo ">Color Final del Cuadrado: .$final";
}
?>

<img src="imagenes/code.jpg" alt="código">
  <p><a href="controles-formularios-2-13-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
