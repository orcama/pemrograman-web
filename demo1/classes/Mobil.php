<?php

namespace Classes;

use Traits\HasEngineTrait;

class Mobil extends Kendaraan {
    use HasEngineTrait;

    private $numDoors;
    private $numWheels;

    public function __construct($brand, $year, $numDoors, $numWheels) {
        parent::__construct($brand, $year);
        $this->numDoors = $numDoors;
        $this->numWheels = $numWheels;
    }

    public function move() {
        return "The car is driving!";
    }

    public function getNumDoors() {
        return "This car has {$this->numDoors} doors.";
    }

    public function getWheels() {
        return $this->numWheels;
    }
}
