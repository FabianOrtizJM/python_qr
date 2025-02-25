<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de QR</title>
</head>
<body>
    <h2>Generador de Código QR</h2>
    <form action="generar.php" method="POST">
        <label for="nombre_qr">Nombre del archivo QR:</label>
        <input type="text" name="nombre_qr" required><br><br>

        <label for="dato1">Dato 1:</label>
        <input type="text" name="dato1"><br><br>

        <label for="dato2">Dato 2:</label>
        <input type="text" name="dato2"><br><br>

        <label for="dato3">Dato 3:</label>
        <input type="text" name="dato3"><br><br>

        <label for="dato4">Dato 4:</label>
        <input type="text" name="dato4"><br><br>

        <button type="submit">Generar QR</button>
    </form>
</body>
</html>
