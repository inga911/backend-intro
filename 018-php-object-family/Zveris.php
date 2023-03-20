<?php
//extends naudojamas norint sujungti dvi klases| zveris yra miesko vaikas
class Zveris extends Miskas {

    public $rusis, $spalva;


    public function __construct(string $rusis, string $spalva, string $vardas)
    {
        parent::__construct($vardas);
        
        $this->rusis = $rusis;
        $this->spalva = $spalva;
    }

    public function bu()
    {
        echo '<h1>BEEEEEEEBRAS....</h1>';
    }

    public function sayTevoBu()
    {
        $this->bu();
        parent::bu();//sitaip sy :: galime matyti tevo savybe (tik vienos i virsu)
       
    }
//jei savybe buvo overwritinta tai jau jo nebepamatysim, matysim tik tai i ka buvo overwritinta

}