<?php

require_once 'traits/HasEngineTrait.php';
require_once 'classes/Kendaraan.php';
require_once 'classes/Mobil.php';
require_once 'classes/SepedaMotor.php';

use Classes\Mobil;
use Classes\SepedaMotor;

$mobil = new Mobil("Toyota", 2024, 4, 4);
echo $mobil->move(); 
echo "<br>";
echo $mobil->getNumDoors(); 
echo "<br>";
echo $mobil->startEngine(); 
echo "<br>";
echo $mobil->getWheels();
echo "<br>";
echo $mobil; 

echo "<br><br>";

$sepedaMotor = new SepedaMotor("Kawasaki", 2024, true, 2);
echo $sepedaMotor->move(); 
echo "<br>";
echo $sepedaMotor->getSideCars(); 
echo "<br>";
echo $sepedaMotor->startEngine(); 
echo "<br>";
echo $sepedaMotor->getWheels();
echo "<br>";
echo $sepedaMotor; 
