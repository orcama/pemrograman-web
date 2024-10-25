<?php

namespace Classes;

use Traits\HasEngineTrait;

class Mobil extends Kendaraan {
    use HasEngineTrait;

    private $numDoors;

    public function __construct($brand, $year, $numDoors) {
        parent::__construct($brand, $year);
        $this->numDoors = $numDoors;
    }

    public function move() {
        return "The car is driving!";
    }

    public function getNumDoors() {
        return "This car has {$this->numDoors} doors.";
    }
}
