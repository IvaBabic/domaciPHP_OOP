
<?php
include "../../loadData.php";

$osoba = $_SESSION['logovanaOsoba'];


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Doktor</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container-fluid p-5 bg-dark text-white text-center">
  <h1><?php echo Kontroler::$ordinacija; ?></h1>
  <h2>Doktore <?php  echo $osoba->getPrezime(); ?> , dobrodosao u korisnicki servis!</h2>
  <form action="" method="post">
    <input type="submit" class="btn btn-light" value="Odjavi se" id="Odjavise" name="Odjavise">
</form>  
</div>
  
<div class="container mt-5">
  <div class="row">

    <div class="col">
    <form action="" method="post">
    <input type="submit" class="btn btn-info" value="Prikazi sve pacijente" id="Prikazi sve pacijente" name="PrikaziSvePacijente">
    </form>
    </div>

    <div class="col">
    <form action="" method="post">
    <input type="submit" class="btn btn-info" value="Prikazi preglede" id="Prikazi preglede" name="PrikaziPreglede">
    </form>
    </div>

    <div class="col">
    <form action="" method="post">
    <input type="submit" class="btn btn-info" value="Prikazi recepte" id="Prikazi recepte" name="PrikaziRecepte">
    </form>  
    </div>

    <div class="col">
    <form action="" method="post">
    <input type="submit" class="btn btn-info" value="Dodaj recept" id="Dodajrecept" name="Dodajrecept">
    </form>   
    </div>

  </div>
</div>

</body>
</html>


<?php




if(isset($_POST["PrikaziSvePacijente"])){
    $osoba->getPacijenti();
    
}

if(isset($_POST["PrikaziPreglede"])){
    $osoba->getPregledi();
}

if (isset($_POST["PrikaziRecepte"])) {
    $osoba->getRecepti();
    }

if (isset($_POST["Odjavise"])) {
        header("Location: ../../index.php"); 
        } 

?>