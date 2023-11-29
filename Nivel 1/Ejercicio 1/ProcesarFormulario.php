<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") { //Verificamos que se use el metodo get
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $usuario = $_GET['usuario'];

    echo "<h2>Valores añadidos al formulario:</h2>"; //Se indica que se imprime
    echo "<p>Nombre: $nombre</p>"; //se imprime el nombre de usuario
    echo "<p>Primero apellido : $apellido</p>";
    echo "<p>Usuario: $usuario</p>";
} else {
    //Añadimos la opcion por si se le da a confirmar sin poner nada
    header("Location: formulario.html");

}
?>