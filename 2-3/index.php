<?php

class Movie{
    // Elokuvan genre
    public string $genre;
    // Elokuvan kesto
    public float $kesto;
    // Elokuvan julkaisuvuosi
    public int $vuosi;
    //Elokuvan ikäraja
    public int $ikaraja;
    //Elokuvan näyttelijät
    public array $nayttelijat;
}
$uuno = new Movie();
$uuno->genre = 'Komedia';
$uuno->kesto = 1.5;
$uuno->vuosi = 1995;
$uuno->ikaraja =7;
$uuno->nayttelijat = ['Vesa-Matti Loiri','Spede Pasanen'];

var_dump();

?>
