<?php

include "app/utility/Printing.php";
include "app/templates/Osoba.php";
include "app/templates/Usluge.php";
include "app/models/Doktor.php";
include "app/models/Pacijent.php";
include "app/models/odrasliPacijent.php";
include "app/models/detePacijent.php";
include "app/models/Recept.php";
include "app/models/Pregled.php";
include "app/models/administrator.php";
include "app/controler/controler.php";

//include "app/view/login.php";


session_start();


$doktorM = new Doktor(1, 'Marko', 'Markovic', '21/1/1972', 'kardiolog', 'mmarkovic@yahoo.com', '123');
$doktorB = new Doktor(1, 'Ben', 'Benic', '21/1/1972', 'zubar', 'bbenic@yahoo.com', 128);

$pacijentM = new odrasliPacijent(1, 'Mirko', 'Stanic', '21/2/1985', 'mstanic@yahoo.com', '167');
$pacijentB = new odrasliPacijent(1, 'Borko', "Borkovic", "14/02/1995", "bborkovic@gmail.com", "65");
$pacijentD = new detePacijent(1, "Dino", "Detic", "04/06/2020", "dete@gmail.com", "111");

$nizOsoba = [$doktorB, $doktorM, $pacijentB, $pacijentM, $pacijentD];

$pacijentB->izaberiDoktora($doktorB);
$pacijentM->izaberiDoktora($doktorM);
$pacijentD->izaberiDoktora($doktorB);

$pregled1 = new Pregled("12/12/2022", "14.30", $pacijentB);
$pregled2 = new Pregled("03/11/2022", "1.30", $pacijentM);
$pregled3 = new Pregled("04/12/2022", "17.00", $pacijentD);

$pacijentB->zakaziPregled($pregled1, $doktorB);
$pacijentM->zakaziPregled($pregled2, $doktorM);
$pacijentD->zakaziPregled($pregled3, $doktorB);

$doktorB->prepisiRecept($pacijentB, "paracetamol", "150ml");
$doktorM->prepisiRecept($pacijentM, "brufen", "100ml");
$doktorB->prepisiRecept($pacijentD, "brufen", "25ml ");




$_SESSION["users"] = $nizOsoba;




?>