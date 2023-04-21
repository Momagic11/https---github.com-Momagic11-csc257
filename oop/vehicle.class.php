<?php

abstract class Vehicle {
    private $_year; // Year of the vehicle
    private $_make; // Make of the vehicle
    private $_model; // Model of the vehicle
    private $_vin; // Vin number
    private $_color; // Color of the vehicle
    
    private $_vehicleType; // This identifies the vehicle type

    // Set parameters constructor
    public function __construct($year, $make, $model, $vin, $color, $vehicleType) {
        $this->_year = $year;
        $this->_make = $make;
        $this->_model = $model;
        $this->_vin = $vin;
        $this->_color = $color;
        $this->_vehicleType = $vehicleType;
        
    }

    public function get_year() {
        return $this->_year;
    }
    public function get_make() {
        return $this->_make ;
    }
    public function get_model() {
        return $this->_model;
    }
    public function get_vin() {
        return $this->_vin;
    }
    public function get_color() {
        return $this->_color;
    }
    public function set_color($newColor) {
        $this->_color = $newColor;
    }
    public function get_vehiclType() {
        return $this->_vehicleType;
    }



}


