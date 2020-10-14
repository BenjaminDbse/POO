<?php

require 'Car.php';

use Cars\Car;

$car = new car('darkblue', 5, 'gasol');


$car->setEnergyLevel(10);


var_dump($car);

$car->forward();

$car->brake();

$bicycle= new \Bicycles\Bicycle('black',1,'foot');

$bicycle->forward();

$bicycle->brake();