<?php

class Osoba {
	use Printing;
	
   
    protected $id;
    protected $ime;
    protected $prezime;
    protected $datumRodjenja;
    protected $email;
    protected $sifra;

    public function __construct($id, $ime, $prezime, $datumRodjenja, $email, $sifra)
    {
    $this->id = $id;
    $this->ime = $ime;
    $this->prezime = $prezime;
    $this->datumRodjenja = $datumRodjenja;
    $this->email = $email;
    $this->sifra = $sifra;

    }

    public function getNameOfClass()
    {
       return static::class;
    }

    

	
	public function getIme() {
		return $this->ime;
	}
	
	
	public function setIme($ime): self {
		$this->ime = $ime;
		return $this;
	}

	
	public function getPrezime() {
		return $this->prezime;
	}
	
	
	public function setPrezime($prezime): self {
		$this->prezime = $prezime;
		return $this;
	}

	
	public function getDatumRodjenja() {
		return $this->datumRodjenja;
	}
	
	
	public function setDatumRodjenja($datumRodjenja): self {
		$this->datumRodjenja = $datumRodjenja;
		return $this;
	}

	
	public function getEmail() {
		return $this->email;
	}
	
	public function setEmail($email): self {
		$this->email = $email;
		return $this;
	}

	
	public function getSifra() {
		return $this->sifra;
	}
	
	
	public function setSifra($sifra): self {
		$this->sifra = $sifra;
		return $this;
	}
}

?>