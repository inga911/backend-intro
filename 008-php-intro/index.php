<?php

// $labas = 5;

// // echo $labas++;

// echo '<br>';

// echo $labas++ + ++$labas;


// $pirmas = 'bla bla';
// $antras = 'ku kū';
// $trecias = $pirmas . $antras;

// echo '<br>';

// echo $trecias;

// echo '<br>';

// $trecias2 = null;

// var_dump(isset($trecias2));

// echo '<br>';

// var_dump($trecias2 === null);


// $vienas = 'a';

// $a = 'b';

// $b = 'c';



// echo '<br>';
// echo $$$vienas;

// echo '<br>';

// echo '<pre>';

// // print_r([1,5,8,7,9,32,8,7,[45,2,3,7],4,55,7]);


// $pirmas = 'bla bla';
// $antras = "ku kū";

// echo '<br>';echo '<br>';
// echo $antras;



function someOtherFunction() {
    function getRandomName($namesArray) {
        $randomIndex = array_rand($namesArray);
        return $namesArray[$randomIndex];
    }
    $names = array('Alice', 'Bob', 'Charlie', 'David', 'Emma', 'Frank', 'Grace', 'Henry');
    $randomName = getRandomName($names);
    return $randomName;
}

echo someOtherFunction();


function getName() {
    function getRandName($namesArray) {
        $randomIndex = array_rand($namesArray);
        return $namesArray[$randomIndex];
    }
    $names = array('Alice', 'Bob', 'Charlie', 'David', 'Emma', 'Frank', 'Grace', 'Henry');
    $randomName = getRandName($names);
    return $randomName;
}
function getLastName() {
    function getRandLastName($lastNamesArray) {
        $randomIndex = array_rand($lastNamesArray);
        return $lastNamesArray[$randomIndex];
    }
    $lastNames = array("Smith", "Johnson", "Williams", "Jones", "Brown", "Davis", "Miller", "Wilson", "Moore", "Taylor");
    $randomName = getRandLastName($lastNames);
    return $randomName;
}
echo getName();
echo getLastName();