<?php
include "../../loadData.php";

$osoba = $_SESSION["logovanaOsoba"];

?>

<h1>Dobrodosao, pacijentu <?php  echo $osoba->getPrezime(); ?> </h1>


<form action="" method="post">
    <input type="submit" value="Prikazi moje podatke" id="Prikazi moje podatke" name="PrikaziMojePodatke">
</form>

<form action="" method="post">
    <input type="submit" value="Prikazi preglede" id="Prikazi preglede" name="PrikaziPreglede">
</form>



<form action="" method="post">
    <input type="submit" value="Prikazi recepte" id="Prikazi recepte" name="PrikaziRecepte">
</form>

<form action="" method="post">
    <input type="submit" value="Prikazi izabranog lekara" id="Prikazi izabranog lekara" name="PrikaziIzabranogLekara">
</form>

<form action="" method="post">
    <input type="submit" value="Odjavi se" id="Odjavise" name="Odjavise">
</form>

<p style="background-color: aqua; width: 10%;"><?php echo Kontroler::$builtBy; ?></p>



<?php

if (isset($_POST["PrikaziMojePodatke"])) {
    Kontroler::prikaziPodatke($osoba);
    }

if(isset($_POST["PrikaziPreglede"])){
   $osoba->getPregledi();
   
}

if(isset($_POST["PrikaziRecepte"])){
    $osoba->getRecepti();
     
 }

if(isset($_POST["PrikaziIzabranogLekara"])){
    echo $osoba->getIzabraniDoktor();
}


if (isset($_POST["Odjavise"])) {
    header("Location: ../../index.php"); 
    }

?>