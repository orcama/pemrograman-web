<?php

require_once 'traits/HasEngineTrait.php';
require_once 'classes/Kendaraan.php';
require_once 'classes/Mobil.php';
require_once 'classes/SepedaMotor.php';

use Classes\Mobil;
use Classes\SepedaMotor;

$mobil = new Mobil("Toyota", 2024, 4);
echo $mobil->move(); // Outputs: The car is driving!
echo "\n";
echo $mobil->getNumDoors(); // Outputs: This car has 4 doors.
echo "\n";
echo $mobil->startEngine(); // Outputs: Engine started!
echo "\n";
echo $mobil; // Outputs: Vehicle: Toyota, Year: 2024

echo "\n\n";

$sepedaMotor = new SepedaMotor("Kawasaki", 2024, true);
echo $sepedaMotor->move(); // Outputs: The motorcycle is riding!
echo "\n";
echo $sepedaMotor->getSideCars(); // Outputs: This motorcycle has a sidecar.
echo "\n";
echo $sepedaMotor->startEngine(); // Outputs: Engine started!
echo "\n";
echo $sepedaMotor; // Outputs: Vehicle: Kawasaki, Year: 2024
