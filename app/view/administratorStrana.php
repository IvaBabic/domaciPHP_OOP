<?php

include "../../loadData.php";

$nizOsoba = $_SESSION["users"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Administrator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container-fluid p-5 bg-dark text-white text-center">
  <h1><?php echo Kontroler::$ordinacija; ?></h1>
  <h2>Administratore, dobrodosao u korisnicki servis!</h2>
  <form action="" method="post">
    <input type="submit" class="btn btn-light" value="Odjavi se" id="Odjavise" name="Odjavise">
</form>  
</div>
  
<div class="container mt-5">
  <div class="row">

    <div class="col">
    <form action="" method="post">
    <input type="submit" class="btn btn-info" value="Prikazi sve doktore" id="Prikazi sve doktore" name="PrikaziSveDoktore">
    </form>
    </div>

    <div class="col">
    <form action="" method="post">
    <input type="submit" class="btn btn-info" value="Prikazi sve pacijente" id="Prikazi sve pacijente" name="PrikaziSvePacijente">
    </form>
    </div>

    <div class="col">
    <form action="" method="post">
    <input type="submit" class="btn btn-info" value="Dodaj doktora" id="Dodajdoktora" name="Dodajdoktora">
    </form>   
    </div>

    <div class="col">
    <form action="" method="post">
    <input type="submit" class="btn btn-info" value="Dodaj pacijenta" id="Dodajpacijenta" name="Dodajpacijenta">
    </form>   
    </div>

    <div class="col">
    <form action="" method="post">
    <input type="submit" class="btn btn-info" value="Obrisi doktora" id="Obrisidoktora" name="Obrisidoktora">
    </form>   
    </div>

    <div class="col">
    <form action="" method="post">
    <input type="submit" class="btn btn-info" value="Obrisi pacijenta" id="Obrisipacijenta" name="Obrisipacijenta">
    </form>   
    </div>

  </div>
</div>

</body>
</html>



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