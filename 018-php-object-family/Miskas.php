<?php


class Miskas {

    public $vardas;

    public function __construct($vardas)
    {
        $this->vardas = $vardas;
    }

//vaikines klases perims sia funkcija ISSKYRUS JEI BUS PRIVITE
    protected function bu()
    {
        echo '<h1>Buuuuuuuuuuuuuuu....</h1>';
    }

}