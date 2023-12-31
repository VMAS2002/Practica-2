<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Círculo o cuadrado (Formulario).
    Controles en formularios (2). Con formularios.
    Angélica Marín Artavia
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css" title="Color">
</head>

<body>
  <h1>Círculo o cuadrado (Formulario)</h1>

  <form action="controles-formularios-2-12-2.php" method="get">
    <p><label>Tamaño de la figura: <input type="number" name="lado" min="20" max="500" value="50"></label></p>

    <p>
      Forma de la figura:
      <label><input type="radio" name="forma" value="cuadrado">Cuadrado</label>
      <label><input type="radio" name="forma" value="circulo">Círculo </label>
    </p>

    <p>
      <input type="submit" value="Enviar">
      <input type="reset" value="Borrar">
    </p>
  </form>

  <footer>
    <p>Angélica Marín Artavia</p>
  </footer>
</body>
</html>
