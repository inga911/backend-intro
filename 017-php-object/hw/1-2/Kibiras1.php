<?php

class Kibiras1 {

    protected $akmenuKiekis, $numeris;

//__construct nieko negrazina bet jam NEREIKIA RASYTI :void
    public function __construct(int $jauYra, int $numeris)//neribotas skaicius, galima daug priskirti
    {
//objekto savybe/kintamasis      //kintamasis   JIE ABU VISISKAI SKIRTINGI
        $this->akmenuKiekis = $jauYra;
//objekto savybe/kintamasis      //kintamasis   JIE ABU VISISKAI SKIRTINGI
        $this->numeris = $numeris;
    }

    public function __clone()
    {
        $this->numeris = 5;
    }

    public function prideti1Akmeni() :void //funkcija nieko negrazina rasom :void, jei return skaiciu :int
    {
        $this->akmenuKiekis++;
    }
                         //(deklaracija kas ieina)     :deklaracija kas iseina
    public function pridetiDaugAkmenu(int $kiekis) :void
    {
        $this->akmenuKiekis += $kiekis;
    }

    public function kiekPririnktaAkmenu() :void
    {
        echo '<h2>Nr.:'. $this->numeris .' pririnkta: ' .$this->akmenuKiekis .'</h2>'; 
    }

}