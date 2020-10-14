<?php

require 'Car.php';

use Cars\Car;

$car = new car('darkblue', 5, 'gasol');


$car->setEnergyLevel(10);


var_dump($car);

$car->forward();

$car->brake();

$bicycle= new \Bicycles\Bicycle('black',1,'foot');


echo $car->forward();
echo '<br> Vitesse de la bagnole : ' . $car->getCurrentSpeed() . 'km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la bagnole : ' . $car->getCurrentSpeed() . 'km/h' . '<br>';
echo $car->brake();


echo $bicycle->forward();
echo '<br> Vitesse de la bagnole : ' . $bicycle->getCurrentSpeed() . 'km/h' . '<br>';
echo $bicycle->brake();
echo '<br> Vitesse de la bagnole : ' . $bicycle->getCurrentSpeed() . 'km/h' . '<br>';
echo $bicycle->brake();
