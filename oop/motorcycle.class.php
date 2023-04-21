<?php

require_once "vehicle.class.php";

class Motorcycle extends Vehicle {
    public function __construct($year, $make, $model, $vin, $color) {
        parent::__construct($year, $make, $model, $vin, $color, "Motorcycle");
    }
}