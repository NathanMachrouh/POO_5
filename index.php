<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'LightableInterface.php';

$newBeetle = new Car('red', 2, 'electric');
var_dump($newBeetle);
$newBeetle->switchOn();
var_dump($newBeetle);

$myBike = new Bicycle('black', 1);
$myBike->setCurrentSpeed(19);
var_dump($myBike);
$myBike->switchOn();
var_dump($myBike);


