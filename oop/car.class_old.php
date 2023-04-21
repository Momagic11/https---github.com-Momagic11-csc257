<?php

class Car {
    private $_year; // Year of the car
    private $_make; // Make of the car
    private $_model; // Model of the car
    private $_vin; // Vin number
    private $_color; // Color of the car
    

    // Set parameters constructor
    public function __construct($year, $make, $model, $vin, $color) {
        $this->_year = $year;
        $this->_make = $make;
        $this->_model = $model;
        $this->_vin = $vin;
        $this->_color = $color;
        
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



}

$myHonda = new Car(2021, "Honda", "Accord", "1z576xhn4", "Red");
$mySubaru = new Car(2022, "Subaru", "Forester", "3v8th8s347n7", "Blue");

echo "The initial details of my myHonda are: " . $myHonda->get_year() . " " . $myHonda->get_make() . " " . $myHonda->get_model() . " " . $myHonda->get_color() . "<br>";
echo "The details of my mySubaru are: " . $mySubaru->get_year() . " " . $mySubaru->get_make() . " " . $mySubaru->get_model() . " " . $mySubaru->get_color() . "<br>";

$myHonda->set_color("blue");
echo "The  current details of my myHonda are: " . $myHonda->get_color() . " ";


