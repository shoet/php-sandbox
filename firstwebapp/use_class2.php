<?php

require_once 'class_car2.php';

$car2 = new Car2("honda", 120);

$car2->drive();

$car2->gear();
$car2->gear();
$car2->gear();

$car2->drive();

$car2->gear();
$car2->gear();
$car2->gear();

$car2->drive();

$car2->display();
