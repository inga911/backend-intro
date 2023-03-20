<?php


class Grybas {

    private $valgomas, $sukirmijes, $svoris;


    public function __construct()
    {
//tikimybiu teorija arba true arba false | kastinimas - privesrstinis tipo vertimas
        $this->valgomas = (bool) rand(0, 1);
        $this->sukirmijes = (bool) rand(0, 1);
        $this->svoris = rand(5, 45);
    }

//__get gauna i prop savybes varda kurio nuri kodas (SAVYBES YRA PRIVACIOS!)
    public function __get($prop)//gali buti bet koks vardas
    {
        return $this->$prop;
    }

}