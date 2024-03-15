<?php

require_once "data/Person.php";
require_once "data/Car.php";
require_once "class/Company.php";
require_once "class/Apocalypse.php";

echo "<hr>";
echo "<h1 >>>Class, Object, Properties<<</h1>";
$person = new Person();
$person -> name="Agus";
$person -> address="Zimbabwe";
$person -> country="South Africa";

$person -> sayHello();


$avanza = new Car();
$avanza -> name="Avanza";
$avanza -> brand="Toyota";

$almaz = new Car();
$almaz -> name="Almaz";
$almaz -> brand="Wuling";

$mobilio = new Car();
$mobilio -> name="Mobilio";
$mobilio -> brand="Honda";

$avanza -> startEngine();
$avanza -> stopEngine();

$almaz -> startEngine();
$almaz -> stopEngine();

$mobilio -> startEngine();
$mobilio -> stopEngine();
echo "<hr>";
echo "<h1 >>>Inheritance<<</h1>";

$manager = new Manager();
$manager -> name="Agus";
$manager -> sayHello("Joni");


$vp = new VicePresident();
$vp -> name="Aceng";
$vp -> sayHello("Budi");



$zombie = new Zombie();
$zombie -> name="Zombie";
$zombie -> hp=100;
$zombie -> attackPoin=90;
$zombie -> attack();
$zombie -> walk();
