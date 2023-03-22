<?php

require __DIR__ . '/Kibiras3.php';
require __DIR__ . '/KibirasNePo1.php';




$k1 = new KibirasNePo1(0, 1);
$k2 = new KibirasNePo1(0, 2);
$k3 = new KibirasNePo1(0, 3);

$k1->prideti1Akmeni();
$k1->prideti1Akmeni();

$k2->prideti1Akmeni();

$k3->prideti1Akmeni();
$k3->pridetiDaugAkmenu(5);

$k1->pridetiDaugAkmenu(10);

$k1->kiekPririnktaAkmenu();
$k2->kiekPririnktaAkmenu();
$k3->kiekPririnktaAkmenu();


