<?php

class MarsoPalydovas {

    private static $palydovai = [];//pradzioje  nera nieko sukurta tai tuscias
    private $vardas;

    public static function naujasPalydovas()
    {//1.kiek jau yra palydovu
        $kiek = count(self::$palydovai);
        // === kad neapimtu false ar tuscios tringo ir pan..
        if ($kiek === 0) {
            self::$palydovai[] = new self('Deimas');
            return self::$palydovai[0];
        }

        if ($kiek == 1) {
            self::$palydovai[] = new self('Fobas');
            return self::$palydovai[1];
        }
        
        return self::$palydovai[rand(0, 1)];
    }

    private function __construct($vardas)
    {//sukurs varda
        $this->vardas = $vardas;
    }

}