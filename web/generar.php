<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_qr = escapeshellarg($_POST["nombre_qr"]);
    
    // Obtener los datos ingresados
    $datos_qr = [];
    for ($i = 1; $i <= 4; $i++) {
        if (!empty($_POST["dato$i"])) {
            $datos_qr[] = escapeshellarg($_POST["dato$i"]);
        }
    }

    if (empty($datos_qr)) {
        echo "<h3>Error: Debes ingresar al menos un dato.</h3>";
        exit;
    }

    // Construcción del comando para ejecutar Python
    $comando = "D:\\proyectos\\qr\\genera_qr.exe $nombre_qr " . implode(" ", $datos_qr);
    $ruta_qr = shell_exec($comando);

    if ($ruta_qr) {
        echo "<h3>QR generado con éxito:</h3>";
        echo "<img src='$ruta_qr' alt='Código QR'>";
        echo "<p><a href='$ruta_qr' download>Descargar QR</a></p>";
    } else {
        echo "<h3>Error al generar el QR</h3>";
    }
}
?>
