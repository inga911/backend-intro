<?php

require __DIR__ . '/Kibiras1.php';
require __DIR__ . '/Pinigine.php';

$k1 = new Kibiras1(200, 5);
$k2 = new Kibiras1(100, 7);
$k3 = clone $k2;

$k1->prideti1Akmeni();
$k1->prideti1Akmeni();

$k2->prideti1Akmeni();

$k3->prideti1Akmeni();
$k3->pridetiDaugAkmenu(5);

$k1->pridetiDaugAkmenu(10);

$k1->kiekPririnktaAkmenu();
$k2->kiekPririnktaAkmenu();
$k3->kiekPririnktaAkmenu();


$p = new Pinigine;

$p->ideti(1);
$p->ideti(87.31);
$p->ideti(0.7);
$p->ideti(22.1);
$p->skaiciuoti();


$k1->pinigine = $p; // dinamine savybe + priskyrimas pagal ref, matomumas turi buti vienodas

$k1->pinigine = clone($p);

// unset($k1->pinigine);

// echo '<pre>';

// var_dump($k1);
//galima pinigus kibire rinkti
$k1->pinigine->ideti(0.7);
$k1->pinigine->ideti(22.1);
$k1->pinigine->ideti(1000);

$p->skaiciuoti();

echo '<br>';
echo '<br>';
echo spl_object_hash($k1->pinigine);
echo '<br>';
var_dump($p);
echo spl_object_hash($p);
