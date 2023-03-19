<?php
// Petras

class Bebras {

    private $spalva;
    private $metai = 25;
    private $slaptas = 123;

//stebuklingas metodas, pasileidzia su kiekvienu 'new' zodziu (objekto)
    public function __construct()
    {
        //tas $this sios funkcijos viduje pasikeicia i ta objekta kuri kreipiames 
        $this->spalva = ['rudas', 'pilkas', 'geltonas', 'juodas'][rand(0, 3)];
        // echo '<h2>' . $this->kokiaTavoSpalva() . '</h2>';
    }

//sis metodas pasileidzia tada kai scriptas baigia darba
//ir tada kai istrinam(unset) kintamaji, kai visos nuorodos pasalinamos is atminties
    // public function __destruct()
    // {
    //     echo '<h1>Bebras Dingo</h1>';
    // }
//banke sitas prisitaikytu: darant kokias operacijas (irasom ir istrinam), bet tai darome kintamajame
//ir to kintamojo neirasinejame specialiai i faila, bet iskvietus destruktoriaus metoda, kuris sako:
//paiimi ta kintamaji ir ji irasai i faila, ir nesvarbu kada pasibaigia scriptas, bet po jo darbo pabaigos 
//kintamasis kuriame dirbome jis bus paimtas ir irasytas i faila, todel nebereikia rupintis,
// kad po kiekvienos opracijos jis  butu  irasytas i faila, su siuo destruct metodu jis yra irasomas, kai scriptas baigia savo darba
//scripto pabaiga skaitosi: globaliskai, ten kur pasibaigia paskutinis faila,arba po die; po visu incudintu failu kurie jau perziureti ir jau ivyktydti

//invoke iskvieciamas kai bandome iskviesti objekta kaip funkcija. pvz: $bebras(); isspausdins Alio [bebras yra objektas]
    public function __invoke()
    {
        echo '<h1>Alio</h1>';
    }


// bandome paimti neegzistuojancia ar uz matomumo ribu esanciu savybe
    public function __get($what) 
    {
        // if ($what == 'spalva') {
        //     return $this->spalva;
        // }
        // if ($what == 'metai') {
        //     return $this->metai;
        // }

//pasiema is zemiau pateiktus funkcijos
        if ($what == 'kokiaNorsSpalva') {
            return $this->fancySpalva();
        }
//apribojame savybemis, kai tam tikru nenorime leisti matyti, tai i masyva irasome tai ka norime atiduoti
        if (in_array($what, ['metai', 'spalva'])) {
            return $this->$what;//$what yra kintamojo kintamasis todel reikia $
        }
        return null;
    }

    private function fancySpalva()
    {
        return ['raudona', 'rudas', 'pilka', 'geltona', 'juoda'][rand(0, 4)];
    }



//__set() leidzia irasyti
    public function __set($where, $what) 
    {
    //i kazkas kad nustatytu su $where irasome kazka kas nustatytu su $what
        // $this->$where = $what;
//jei vartotjas nori rasyti spalva, jei tai ka jis iraso kas yra musu array tada grazina  $this->$where = $what; jei ne tada klaida turetu buti
        if ($where == 'spalva') {
            if (in_array($what, ['raudonas', 'rudas', 'pilkas', 'geltonas', 'juodas'])) {
                $this->$where = $what;
            }
        }
    }

//reaguoja i privacius metodus, siuo atveju i derSumator
    public function __call($name, $arg)
    {
        return $this->$name(...$arg);
    }


//reikia nurodyti kad int
    private function derSumator(int $a, int $b, int $c)
    {
        return $a + $b + $c;
    }




    public function kokiaTavoSpalva()
    {
        return $this->spalva;
    }

    public function iMiska(Miskas $miskas)
    {
         echo "\n" . $miskas->dydis . "\n\n";
    }

}