<?php

namespace Classes;

use Traits\HasEngineTrait;

class SepedaMotor extends Kendaraan {
    use HasEngineTrait;

    private $hasSidecar;

    public function __construct($brand, $year, $hasSidecar) {
        parent::__construct($brand, $year);
        $this->hasSidecar = $hasSidecar;
    }

    public function move() {
        return "The motorcycle is riding!";
    }

    public function getSideCars() {
        return $this->hasSidecar ? "This motorcycle has a sidecar." : "This motorcycle doesn't have a sidecar.";
    }
}
