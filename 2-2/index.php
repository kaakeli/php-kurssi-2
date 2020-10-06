<?php
class HelloWorld {
    public string $name;

    protected int $amount = 100;

    private static float $price = 40.50;
}

$hello = new HelloWorld;

var_dump($hello);

?>
