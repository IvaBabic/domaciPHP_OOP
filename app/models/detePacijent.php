<?php

class detePacijent extends Osoba implements Pacijent{
    
    private $izabraniDoktor;
    private $recepti = [];
    private $pregledi = [];

    public function __construct($id, $ime, $prezime, $datumRodjenja, $email, $sifra)
    {
        parent::__construct($id, $ime, $prezime, $datumRodjenja, $email, $sifra);
    }

   
    public function izaberiDoktora(Doktor $doktor)
    {
        $doktor->dodajPacijenta($this);
        $this->izabraniDoktor = $doktor;
    }

    public function zakaziPregled(Pregled $pregled, Doktor $doktor)
    {
        $this->pregledi[] = $pregled;
        $doktor->dodajPregled($pregled);
    }

    public function dodajRecept(Recept $recept)
    {
        $this->recepti[] = $recept;
    }

    public function __toString()
{
        return "".$this->ime . " ". $this->prezime;
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

    
	public function getAge() {
        $dateOfBirth = str_replace('/', '-', $this->datumRodjenja);
        $today = date("Y-m-d");
        $diff = date_diff(date_create($dateOfBirth), date_create($today));
        echo "starost: " . $diff->format('%y'). ", ";
	}


	public function getIzabraniDoktor() {
		return $this->izabraniDoktor;
	}
}


?>