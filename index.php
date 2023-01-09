<?php

include "loadData.php";


    if (!isset($_POST["login"])){
        include_once "app/view/login.php";
    }else{
        $email = $_POST['email'];
        $sifra = $_POST['sifra'];
        if ($email == "admin@gmail.com" && $sifra == "admin") {
            header("Location: app/view/administratorStrana.php ");
        }
    
            if ($_POST["email"] == "" || $_POST["sifra"] == "") {
                echo "Morate uneti email i sifru";
                 include_once "app/view/login.php";
    
            } else {
                 $pronasaoOsobu = 0;
                foreach ($nizOsoba as $osoba) {
                    
                    if ($osoba->getEmail() == $email && $osoba->getSifra() == $sifra ) {
                    $_SESSION["logovanaOsoba"] = $osoba;
                       if($_SESSION["logovanaOsoba"]->getNameOfClass() == "Doktor"){
                        $pronasaoOsobu = 1;
                        header("Location: app/view/doktorStrana.php");
                       }
                       elseif($_SESSION["logovanaOsoba"]->getNameOfClass() == "odrasliPacijent" || $_SESSION["logovanaOsoba"]->getNameOfClass() == "detePacijent" ){
                        $pronasaoOsobu = 1;
                        header("Location: app/view/pacijentStrana.php");
                        
                       }  
                    } 
                   
                }
                if($pronasaoOsobu==0){
                    echo "Korisnik ne postoji.";
                    include "app/view/login.php";
                   }
            }
        }
    

      

?>