<?php

class Administrator
{

    private $email = "admin@gmail.com";
    private $sifra = "admin";

    function prikaziDoktore()
    {
        echo "Ime i prezime osobe je: " . $this->email;
    }


   

}

?>