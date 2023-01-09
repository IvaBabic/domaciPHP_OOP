<?php
class Kontroler
{
    public static $builtBy = "built by Ivana Babic";
    public static function prikaziPodatke($objekat)
    {
        $noviObjekat = $objekat->napraviNiz();
        foreach ($noviObjekat as $kljuc => $vrednost) {
            if (is_array($vrednost)) {
                foreach ($vrednost as $kljuc => $novaVrednost){
                 echo "<table border=1 cellspacing=1 cellpadding=1>
                <tr> 
                 <td><font color=green>$kljuc</font></td>
                <td>$novaVrednost</td>
                </tr>
        
                </table>";
            }
            } else {
                echo "<table border=1 cellspacing=1 cellpadding=1>
                <tr> 
                 <td><font color=green>$kljuc</font></td>
                <td>$vrednost</td>
                </tr>
        
                </table>";
            }
            
            }
         
            }
    }

    ?>