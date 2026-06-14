# Ejemplo Consulta Facturas Emitidas - VERIFACTU AEAT
from verifactu import VeriFactuClient

client = VeriFactuClient(
    certificate='/path/to/certificado.pfx',
    password='cert_password',
    environment='production'
)

consulta = {
    'nif_emisor': 'A12345678',
    'fecha_desde': '2024-01-01',
    'fecha_hasta': '2024-01-31',
    'estado': 'validas'
}

resultados = client.consultar_facturas(consulta)

for factura in resultados:
    print(f"Factura: {factura.numero}")
    print(f"Estado: {factura.estado}")
    print(f"CSV: {factura.csv}")