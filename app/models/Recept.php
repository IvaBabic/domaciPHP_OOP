<?php

class Recept extends Usluge {
    use Printing;
    
    private $id, $pacijent, $doktor, $lek, $kolicina;

    public function __construct($id, Doktor $doktor, Pacijent $pacijent, $lek, $kolicina)
    {
        $this->id= $id;
        $this->lek = $lek;
        $this->kolicina = $kolicina;
        $this->doktor = $doktor;
        $this->pacijent = $pacijent;
    }

    public function __toString()
{
      return $this->lek . " " . $this->kolicina . " za pacijenta: " . $this->pacijent;
       
        
        } 
    
	
	
	public function getPacijent() {
		return $this->pacijent;
	}
	
	
	public function getDoktor() {
		return $this->doktor;
	}
	
	
	public function getLek() {
		return $this->lek;
	}
	
	public function getKolicina() {
		return $this->kolicina;
	}
}



?>