<?php

namespace Classes;

abstract class Kendaraan {
    protected $brand;
    protected $year;

    public function __construct($brand, $year) {
        $this->brand = $brand;
        $this->year = $year;
    }

    abstract public function move();

    public function __toString() {
        return "Vehicle: {$this->brand}, Year: {$this->year}";
    }
}
