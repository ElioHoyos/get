<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page GET</title>
</head>
<body>
    <form action="procesar.php" method="get">
        <label for="opcion">Selecciona una opción:</label><br>
        <select name="opcion" id="opcion">
            <option value="peru">Perú</option>
            <option value="brasil">Brasil</option>
            <option value="colombia">Colombia</option>
            <option value="ecuador">Ecuador</option>
            <option value="chile">Chile</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>