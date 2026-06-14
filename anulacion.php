<?php
// Ejemplo Anulacion de Factura - VERIFACTU AEAT
require_once 'VeriFactuClient.php';

$client = new VeriFactuClient([
    'certificate' => '/path/to/certificado.pfx',
    'password' => 'cert_password',
    'environment' => 'production'
]);

$anulacion = [
    'numero_factura' => 'FACT-2024-0001',
    'fecha_factura' => '2024-01-15',
    'motivo' => 'Factura erronea - error en importe'
];

$resultado = $client->anularFactura($anulacion);

if ($resultado->exito()) {
    echo "Factura anulada correctamente";
    echo "CSV Anulacion: " . $resultado->getCSV();
}