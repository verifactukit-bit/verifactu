<?php
// Ejemplo Consulta Facturas Emitidas - VERIFACTU AEAT
require_once 'VeriFactuClient.php';

$client = new VeriFactuClient([
    'certificate' => '/path/to/certificado.pfx',
    'password' => 'cert_password',
    'environment' => 'production'
]);

$consulta = [
    'nif_emisor' => 'A12345678',
    'fecha_desde' => '2024-01-01',
    'fecha_hasta' => '2024-01-31',
    'estado' => 'validas'
];

$resultados = $client->consultarFacturas($consulta);

foreach ($resultados as $factura) {
    echo "Factura: " . $factura->numero . "\n";
    echo "Estado: " . $factura->estado . "\n";
    echo "CSV: " . $factura->csv . "\n";
}