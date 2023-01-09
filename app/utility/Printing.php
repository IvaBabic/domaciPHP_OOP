<?php

trait Printing
{ 
    public function napraviNiz(){
            $niz = array();
            foreach($this as $kljuc=>$vrednost){
                $niz[$kljuc] = $vrednost;
            }
            return $niz;
        }
    }

    
?>