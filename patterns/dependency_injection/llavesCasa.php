<?php

include_once 'cartera.php';
class LlavesCasa{
    public Cartera $cartera;

    public function __construct(Cartera $cartera) {
        $this->cartera = $cartera;
    }
    
}