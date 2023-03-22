<?php

require __DIR__ . '/Kibiras2.php';


$k1 = new Kibiras2;
$k2 = new Kibiras2;
$k3 = new Kibiras2;

$k1->prideti1Akmeni();
$k2->pridetiDaugAkmenu(8);
$k3->prideti1Akmeni();
$k1->prideti1Akmeni();
$k1->prideti1Akmeni();
$k2->pridetiDaugAkmenu(8);
$k3->prideti1Akmeni();

echo '<h1>'. Kibiras2::bendrasAkmenuKiekisS() .'</h1>';
echo '<h1>'. $k3->bendrasAkmenuKiekisN() .'</h1>';


