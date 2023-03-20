<?php

require __DIR__ .'/Stikline.php';

$s100 = new Stikline(100);
$s150 = new Stikline(150);
$s200 = new Stikline(200);

//i s100 ipilame tai kas buvo ipilta i s150 ir i s150 -> ipilta is s200
$s100->ipilti(  $s150->ipilti(  $s200->ipilti(1500)->ispilti()    )->ispilti()  );

echo '<pre>';
var_dump($s100);
var_dump($s150);
var_dump($s200);