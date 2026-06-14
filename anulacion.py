# Ejemplo Anulacion de Factura - VERIFACTU AEAT
from verifactu import VeriFactuClient

client = VeriFactuClient(
    certificate='/path/to/certificado.pfx',
    password='cert_password',
    environment='production'
)

anulacion = {
    'numero_factura': 'FACT-2024-0001',
    'fecha_factura': '2024-01-15',
    'motivo': 'Factura erronea - error en importe'
}

resultado = client.anular_factura(anulacion)

if resultado.exito:
    print("Factura anulada correctamente")
    print(f"CSV Anulacion: {resultado.csv}")