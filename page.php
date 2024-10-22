<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page PHP</title>
    <!--css-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Formulario de Registros:</h2>
    <form action="" method="get" id="miFormulario">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" require>
        <span id="errorNombre" class="error"></span>
        <br><br>
        <label for="">Email:</label>
        <input type="email" id="email" name="email">
        <span id="errorEmail" class="error"></span>
        <br>
        <input type="submit" value="Enviar">
    </form>

    <script src="js/main.js"></script>
</body>
</html>