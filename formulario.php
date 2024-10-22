<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario GET</title>
</head>
<body>
    <form action="resultado.php" method="get">
        <label for="">Seleccionar tipo de trabajador:</label><br>
        <select name="opcionSelect" id="opcionSelect">
            <option value="completo">Trabajador Completo</option>
            <option value="parcial">Trabajador Parcial</option>
            <option value="nombrado">Nombrado</option>
        </select>
        <br><br>
        <label for="">Seleccione un método de pago:</label><br>
        <input type="radio" name="metodoPago" value="tarjeta" id="tarjeta">
        <label for="">Tarjeta</label><br>
        <input type="radio" name="metodoPago" value="efectivo" id="efectivo">
        <label for="">Efectivo</label><br>
        <input type="radio" name="metodoPago" value="aplicativo" id="aplicativo">
        <label for="">Aplicativo</label><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>