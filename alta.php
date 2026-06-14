<?php
// Ejemplo Alta de Factura - VERIFACTU AEAT
require_once 'VeriFactuClient.php';

$client = new VeriFactuClient([
    'certificate' => '/path/to/certificado.pfx',
    'password' => 'cert_password',
    'environment' => 'production'
]);

$factura = [
    'tipo_factura' => 'F1',
    'numero' => 'FACT-2024-0001',
    'fecha' => '2024-01-15',
    'importe_total' => 1210.00,
    'nif_emisor' => 'A12345678',
    'nif_receptor' => 'B87654321',
    'descripcion' => 'Servicios de consultoria'
];

$resultado = $client->altaFactura($factura);

if ($resultado->exito()) {
    echo "Factura registrada: " . $resultado->getCSV();
}

// Respuesta SOAP procesada automaticamente