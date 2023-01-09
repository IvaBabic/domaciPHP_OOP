<?php

class Doktor extends Osoba
{
 
    private $specijalizacija;
    private $pacijenti = [];
    private $pregledi = [];
    private $recepti = [];

    public function __construct($id, $ime, $prezime, $datumRodjenja, $specijalizacija, $email, $sifra)
    {
        parent::__construct($id, $ime, $prezime, $datumRodjenja, $email, $sifra);
        $this->specijalizacija = $specijalizacija;
    }



    public function dodajPacijenta(Pacijent $pacijent)
    {
        $this->pacijenti[] = $pacijent;
    }


    public function dodajPregled(Pregled $pregled)
    {
        $this->pregledi[] = $pregled;

    }

    public function prepisiRecept($pacijent, $lek, $kolicina)
    {
        $noviRecept = new Recept(1, $this, $pacijent, $lek, $kolicina);
        $this->recepti[] = $noviRecept;
        $pacijent->dodajRecept($noviRecept);
    }

    public function __toString()
    {
        return "" . $this->ime . " " . $this->prezime;
    }



    public function getPacijenti()
    {
        $pacijenti = $this->pacijenti;
        foreach ($pacijenti as $pacijent) {
            //Kontroler::prikaziPodatke($pacijent); radi i ovo, ali sam ipak htela drugacije da prikaze podatke zbog __to string metode
            echo $pacijent . $pacijent->getAge();
            echo "<br>";
        }
    }

    public function getPregledi()
    {
      $preg = $this->pregledi;
      foreach($preg as $p){
            echo $p;
            echo "<br>";
      }
  
    }

    public function getRecepti()
    {
        $recepti = $this->recepti;
        foreach ($recepti as $r) {
            echo $r;
            echo "<br>";
        }
    }

}

?>