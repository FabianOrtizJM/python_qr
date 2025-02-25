import sys
import qrcode
import os

def generar_qr(nombre_archivo, *datos):
    contenido_qr = "|".join(datos)  # Unir los datos con "|"

    qr = qrcode.QRCode(
        version=1,
        error_correction=qrcode.constants.ERROR_CORRECT_L,
        box_size=10,
        border=4,
    )
    qr.add_data(contenido_qr)
    qr.make(fit=True)

    imagen = qr.make_image(fill="black", back_color="white")

    # Asegurar que la carpeta "qrs" existe
    ruta_carpeta = "qrs"
    os.makedirs(ruta_carpeta, exist_ok=True)

    ruta_qr = os.path.join(ruta_carpeta, f"{nombre_archivo}.png")
    imagen.save(ruta_qr)

    print(ruta_qr)  # Imprimir la ruta para que PHP pueda leerla

if __name__ == "__main__":
    if len(sys.argv) < 3:
        print("Error: Debes proporcionar al menos un nombre y un dato")
        sys.exit(1)

    nombre_qr = sys.argv[1]
    datos_qr = sys.argv[2:]  # Captura todos los datos restantes
    generar_qr(nombre_qr, *datos_qr)
