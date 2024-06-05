<?php
include_once 'tarjetaTransporte.php';

class Smartphone{
    private TarjetaTransporte $tarjetaMetro;

    public function __construct(TarjetaTransporte $tarjetaMetro) {
        $this->tarjetaMetro = $tarjetaMetro;
    }

    public function salirDeCasa(){
        echo "Ya puedo salir de casa";
    }
}