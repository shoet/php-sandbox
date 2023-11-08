<?php

require_once 'class_car.php';

$car = new Car();

$car->speed = 60;

$car->drive();

$car->stop();

$car->drive();

echo "current: {$car->speed}\n";
