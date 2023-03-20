<?php
// pirmiausia require reikia atlikti tevui it tik tada vaikui 
//tokia eiles tvarka pereinama per failus, nes kad veiktu zveris reikia pirmiausiai imesti miska
require __DIR__ . '/Miskas.php';
require __DIR__ . '/Zveris.php';


//jei vaikas turetu irgi savybe $vardas, tai jis perrasytu tevo savybes
//vardo savybe ateina is tevo klases
$bebras = new Zveris('Bebras', 'Raudona', 'Grazus miskas');

// $bebras->bu();

echo '<pre>';
var_dump($bebras);
$bebras->sayTevoBu();




