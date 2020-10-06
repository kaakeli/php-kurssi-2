<?php

class HelloWorld
{
    public string $hello = "Hello world";
    public function hello(): string {return $this->hello;}

}

$object = new HelloWorld();

echo $object->hello();