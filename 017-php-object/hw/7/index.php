<?php

require __DIR__ .'/Krepsys.php';
require __DIR__ .'/Grybas.php';

$krepsys = new Krepsys;

//grybaujam kol krepsys buna pilnas | i krepsi dedam nauja gryba
while ($krepsys->deti(new Grybas)){}

echo '<pre>';
var_dump($krepsys);