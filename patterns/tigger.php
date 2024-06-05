<?php

/*
class Tigger {

private function __construct() {
        echo "Building character..." . PHP_EOL;
}

public function roar() {
        echo "Grrr!" . PHP_EOL;
}

}
*/


class Tigger{
    private static $instance;
    private int $counter = 0;

    private function __construct()
    {

    }

    public static function getInstance(){
        if(!self::$instance){
            self::$instance = new self();
        } return self::$instance;
    }  


    public function getCounter(){
        $this->counter++;
    }

    public function roar() {
        echo "Grrr!" . PHP_EOL;
        $this->getCounter();

}

    public function showCounter(){
        echo $this->counter;
    }




}


$tigger1 = Tigger::getInstance();
$tigger1->roar();
$tigger2 = Tigger::getInstance();
$tigger2->roar();
$tigger3 = Tigger::getInstance();
$tigger3->roar();
echo "<br>";
$tigger1->showCounter();
