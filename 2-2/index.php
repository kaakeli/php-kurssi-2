<?php

require __DIR__ . '/computer.php';

// Create new object for Asus computer and pass basic details to constructor.
$asus = new Computer('Asus', 'Zenbook Duo', 8);

// Create new object for Apple computer.
$apple = new Computer();

// Set basic details through setters.
$apple->setManufacturer('Apple')
      ->setModel('MacBook Pro')
      ->setMemory(16);

// Copy memory amount from Apple to Asus.
$asus->copyMemory($apple);

// Use class to print out details of both computers.
Computer::printList($asus, $apple);