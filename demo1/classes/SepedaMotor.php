<?php

namespace Classes;

use Traits\HasEngineTrait;

class SepedaMotor extends Kendaraan {
    use HasEngineTrait;

    private $hasSidecar;
    private $numWheels;

    public function __construct($brand, $year, $hasSidecar, $numWheels) {
        parent::__construct($brand, $year);
        $this->hasSidecar = $hasSidecar;
        $this->numWheels = $numWheels;
    }

    public function move() {
        return "The motorcycle is riding!";
    }

    public function getSideCars() {
        return $this->hasSidecar ? "This motorcycle has a sidecar." : "This motorcycle doesn't have a sidecar.";
    }

    public function getWheels() {
        return $this->numWheels;
    }
}
