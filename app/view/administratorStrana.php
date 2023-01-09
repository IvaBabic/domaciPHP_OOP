<?php

include "../../loadData.php";

$nizOsoba = $_SESSION["users"];
?>

<h1>Dobrodosao, administratore</h1>

<form action="" method="post">
    <input type="submit" value="Prikazi sve doktore" id="Prikazi sve doktore" name="PrikaziSveDoktore">
</form>


<form action="" method="post">
    <input type="submit" value="Prikazi sve pacijente" id="Prikazi sve pacijente" name="PrikaziSvePacijente">
</form>


<form action="" method="post">
    <input type="submit" value="Odjavi se" id="Odjavise" name="Odjavise">
</form>

<p style="background-color: aqua; width: 10%;"><?php echo Kontroler::$builtBy; ?></p>


<?php


if (isset($_POST["PrikaziSveDoktore"])) {
    foreach ($nizOsoba as $dr) {
        if ($dr->getNameOfClass() == "Doktor") {
       Kontroler::prikaziPodatke($dr);
            echo "<br>";
        }
    }
}


if (isset($_POST["PrikaziSvePacijente"])) {
    foreach ($nizOsoba as $p) {
        if ($p->getNameOfClass() == "odrasliPacijent" || $p->getNameOfClass() == "detePacijent" ) {
       Kontroler::prikaziPodatke($p);
            echo "<br>";
        }
    }
}

if (isset($_POST["Odjavise"])) {
    header("Location: ../../index.php"); 
    }


  

?>