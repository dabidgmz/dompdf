# Generador de Tickets de Compra en PDF

Este proyecto es una aplicación web sencilla que permite a los usuarios ingresar detalles de una compra y generar un ticket de compra en formato PDF utilizando DOMPDF. Se utiliza Bootstrap para darle un diseño atractivo al formulario y al ticket generado.

## Requisitos
- PHP 7.4 o superior
- Composer

## Instalación
composer require dompdf/dompdf


3. Completa el formulario con los detalles de la compra y haz clic en "Generar PDF". El ticket de compra se generará y se mostrará en el navegador.

## Archivos

- `index.php`: Contiene el formulario HTML para que el usuario ingrese los detalles de la compra.
- `generate_pdf.php`: Maneja los datos enviados desde el formulario y genera el PDF utilizando DOMPDF.
- `composer.json`: Archivo de configuración de Composer para instalar DOMPDF.
- `vendor/`: Directorio creado por Composer que contiene las dependencias instaladas, incluyendo DOMPDF.

## Tecnologías Utilizadas

- PHP
- DOMPDF
- Bootstrap 5

## Personalización

Puedes personalizar el diseño del ticket de compra modificando el HTML y los estilos CSS en el archivo `generate_pdf.php`.

