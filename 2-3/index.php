<?php

// Load autoloader.
require_once __DIR__ . '/autoloader.php';

// Create a object for Leo the lion.
$lion = new \PhpCourse\Lion('Leo');

// Echo via \PhpCourse\AbstractAnimal::__toString method.
echo $lion;