<?php

class ProductoActualizado extends Producto {
    private int $PrecioActualizado;

    public function __construct($NombreProducto, $Precio, $PrecioActualizado) {
        parent::__construct($NombreProducto, $Precio);
        $this->PrecioActualizado = $PrecioActualizado;
    }

    // Se sobrescribe el método __toString para incluir el precio actualizado
    public function __toString():String {
        return parent::__toString() . ". Precio Actualizado 2023: {$this->PrecioActualizado} euros";
    }
}

?>