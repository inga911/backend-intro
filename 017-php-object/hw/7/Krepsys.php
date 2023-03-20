<?php


class Krepsys {

    private $dydis = 500;
    private $pririnkta = 0;//pati pradzia todel tuscias

    private $look = [];//kad matytume kokius grybus prirenka

//todel kad dedam gryba reikia nurodyti grybo objekta
    public function deti(Grybas $grybas) :bool //grazins ar krepsys yra pilnas ar dat telpa kas
    {
        if ($grybas->valgomas && !$grybas->sukirmijes) {
            $this->pririnkta += $grybas->svoris;

            $this->look[] = $grybas->svoris;
        }
//500 > 400 grazina true ir galima deti dar, bet jei 500 > 501 grazins false ir nebetelpa
        return $this->dydis > $this->pririnkta;
    }

}
//pats krepsys turi tikrintis ar jis jau pilnas tarp sio class failo