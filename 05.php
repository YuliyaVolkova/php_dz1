<?php
$bmv = ['model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => '2015'];
$toyota = ['model' => 'X7',
    'speed' => 130,
    'doors' => 4,
    'year' => '2017'];
$opel = ['model' => 'X3',
    'speed' => 120,
    'doors' => 3,
    'year' => '2007'];
$cars = ['bmv' => $bmv,
    'toyota' => $toyota,
    'opel' => $opel];
foreach ($cars as $key => $value) {
    echo "Car $key<br>";
    echo "$key {$value["model"]} {$value["speed"]} ",
    "{$value["doors"]} {$value["year"]}<br>";
}
