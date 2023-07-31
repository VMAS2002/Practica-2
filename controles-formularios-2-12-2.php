<?php
/**
 * Controles en formularios (2) 12-2 - controles-formularios-2-12-2.php
 *
 * @Angelica
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Círculo o cuadrado Cuadrado (Resultado).
    Controles en formularios (2). Con formularios.
    Angélica Marín Artavia
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css" title="Color">
</head>

<body>
  <h1>Círculo o cuadrado (Resultado)</h1>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $lado = isset($_GET["lado"]) ? $_GET["lado"] : "";
  $forma = isset($_GET["forma"]) ? $_GET["forma"] : "";

  if ($lado !== "" && is_numeric($lado) && $forma !== "") {
    echo "<svg width=\"$lado\" height=\"$lado\">";
    if ($forma === "cuadrado") {
      echo "<rect width=\"$lado\" height=\"$lado\" fill=\"blue\"/>";
    } elseif ($forma === "circulo") {
      $radio = $lado / 2;
      $cx = $cy = $lado / 2;
      echo "<circle cx=\"$cx\" cy=\"$cy\" r=\"$radio\" fill=\"red\"/>";
    }
    echo "</svg>";
  } else {
    echo "<p class=\"aviso\">Ejercicio incompleto.</p>";
  }
}
?>

  <p><a href="controles-formularios-2-12-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Angélica Marín Artavia</p>
  </footer>
</body>
</html>
