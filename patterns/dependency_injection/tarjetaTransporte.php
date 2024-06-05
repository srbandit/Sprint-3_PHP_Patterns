<?php
include_once 'llavesCasa.php';

class TarjetaTransporte{
    public LlavesCasa $llaves_de_casa;

    public function __construct(LlavesCasa $llaves_de_casa) {
        $this->llaves_de_casa = $llaves_de_casa;
    }
}