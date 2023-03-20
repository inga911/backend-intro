<?php


class Stikline {

    private $turis, $kiekis;

//stiklines turis/dydis nustatomas gamybos metu
    public function __construct(int $turis)
    {//turis (->turis) toks koks paduotas gamybos metu ($turis)
        $this->turis = $turis;
    //stiklines tuscia
        $this->kiekis = 0;
    }

    public function ipilti(int $kiekis) : self //sis metodas grazina save
    {//kiekis bus toks kokio dydzio yra stikline, jei stikline yra 150 tai 150  bus ir kiekis
        //paimama minimali reiksme
        $this->kiekis = min($this->turis, $this->kiekis + $kiekis);
        return $this;//grazina stiklines objekta
    }

    public function ispilti() : int
    {
        $kiekis = $this->kiekis;//tarpinis kintamasis
        $this->kiekis = 0;// kai ispilam tai viska ispilam ir lieka nulis
        return $kiekis;//grazina tuscia stikline
    }
}