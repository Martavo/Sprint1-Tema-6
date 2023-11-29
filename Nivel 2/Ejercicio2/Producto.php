<?php

class Producto {
    private string $NombreProducto = "Aceite";
    private int $Precio = 7;

    public function __construct($NombreProducto, $Precio) {
        $this->NombreProducto = $NombreProducto;
        $this->Precio = $Precio;
    }

    public function __toString():String {
        return "Producto: {$this->NombreProducto}. Precio 2021: {$this->Precio} euros";
    }
}

?>