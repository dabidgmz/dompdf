<?php
require 'vendor/autoload.php';

use Dompdf\Dompdf;

// Recibir los datos del formulario
$product = $_POST['product'];
$cantidad = $_POST['quantity'];
$price = $_POST['price'];
$total = $cantidad * $price;

// Contenido HTML para el PDF
$html = "
<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Ticket de Compra</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .container {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .total {
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h1>Ticket de Compra</h1>
            <p>Gracias por su compra</p>
        </div>
        <p><strong>Producto:</strong> $product</p>
        <p><strong>Cantidad:</strong> $quantity</p>
        <p><strong>Precio Unitario:</strong> $$price</p>
        <p class='total'><strong>Total:</strong> $$total</p>
    </div>
</body>
</html>
";

// Inicializar Dompdf
$dompdf = new Dompdf();
$dompdf->loadHtml($html);

// Configurar tamaño y orientación del papel
$dompdf->setPaper('A4', 'portrait');

// Renderizar el PDF
$dompdf->render();

// Enviar el PDF al navegador
$dompdf->stream("ticket_de_compra.pdf", ["Attachment" => 0]);
?>
//esto es un cambio