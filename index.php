<?php
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Camion.php';


$bike = new Bicycle('yellow',1);
var_dump($bike);

$bike->color = 'blue';
$bike->currentSpeed = 0;
var_dump($bike);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);
var_dump(Car::ALLOWED_ENERGIES);

$truck1 = new Truck('black',3,'fuel',0);
echo $truck1->forward();
var_dump($truck1);