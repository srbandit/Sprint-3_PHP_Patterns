<?php

include_once 'smartphone.php';


$cartera = new Cartera;
$llaves_de_casa = new LlavesCasa($cartera);
$tarjetaMetro = new TarjetaTransporte($llaves_de_casa);
$smartphone = new Smartphone($tarjetaMetro);
$smartphone->salirDeCasa();
