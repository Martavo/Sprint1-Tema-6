<?php

require_once 'Producto.php';
require_once 'ProductoActualizado.php';

$productoAceite = new ProductoActualizado("Aceite actualizado", 10, 12);
echo $productoAceite;

?>