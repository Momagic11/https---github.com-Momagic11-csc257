<?php

require_once "car.class.php";
require_once "motorcycle.class.php";

$myNewCar = new Car(2021, "Honda", "Accord", "1z576xhn4", "Red");
$myNewMotorcycle = new Motorcycle(2021, "Kawasaki", "Ninja", "1z576bvzu5n4", "Purple");

echo "My new vehicle is a: " . " " . $myNewCar->get_vehiclType() . "<br>";
echo "My new car color: " . " " . $myNewCar->get_color() . "<br>";
echo "My new summer vehicle is a: " . " " . $myNewMotorcycle->get_vehiclType() . "<br>";
echo "My new motorcycle color is: " . " " . $myNewMotorcycle->get_color();
