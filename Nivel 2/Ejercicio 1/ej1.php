<?php
include_once 'Archivo.php';

$archivo1 = new Archivo();

//Vamos a obtener y mostrar el path entero del archivo
echo "Path del archivo: " . $archivo1->getFile(). '<br>';


//Ahora obtenermos y mostramos el directorio del archivo
echo "Directorio del archivo: " . $archivo1->getFile(). '<br>';

?>