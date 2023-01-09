<?php

class Pregled extends Usluge {
    private $datum;
    private $vreme;
    private $pacijent;


    
    public function __construct(string $datum, string $vreme, Pacijent $pacijent) {
        $this->datum = $datum;
        $this->vreme = $vreme;
        $this->pacijent = $pacijent;
      
    }

    public function __toString()
    {
            return "".$this->pacijent . " zakazan za ". $this->vreme . " , " . $this->datum;
    }

	
	public function getVreme() {
		return $this->vreme;
	}
	
	
	public function setVreme($vreme): self {
		$this->vreme = $vreme;
		return $this;
	}

	
	public function getDatum() {
		return $this->datum;
	}
	
	public function setDatum($datum): self {
		$this->datum = $datum;
		return $this;
	}

	public function getPacijent() {
		return $this->pacijent;
	}

	public function setPacijent($pacijent): self {
		$this->pacijent = $pacijent;
		return $this;
	}
}

?>