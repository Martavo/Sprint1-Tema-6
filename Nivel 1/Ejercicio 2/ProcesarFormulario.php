<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "GET") { // Verificamos que se use el método GET
    $_SESSION["nombre"] = isset($_GET['nombre']) ? $_GET['nombre'] : ""; //con el isset se verifica que la variable este definida, sino seria false y se añadiria "" a la variable
    $_SESSION["apellido"] = isset($_GET['apellido']) ? $_GET['apellido'] : "";
    $_SESSION["usuario"] = isset($_GET['usuario']) ? $_GET['usuario'] : "";

    echo "<h2>Valores añadidos al formulario:</h2>"; 
    echo "<p>Nombre: {$_SESSION['nombre']}</p>"; //a través del array asociativo accedemos a la variable de nombre
    echo "<p>Primer apellido: {$_SESSION['apellido']}</p>";
    echo "<p>Usuario: {$_SESSION['usuario']}</p>";
} else {
    // Añadimos la opción por si se le da a confirmar sin poner nada
    header("Location: formulario.html");
}
?>