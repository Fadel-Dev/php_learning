<?php


class Voiture {
    #CREATION D ATTRIBUT 
 
  public  $_vitesse;
  
  #CREATIONDE CONSTRUCTOR
    public function __construct( int $vitesse) {
        
        $this->_vitesse = $vitesse;
        echo" Notre voiture a une vitesse de : ".$vitesse. "km/h";
    }
    
     # CREATION DE METHODE ;
    #UNE METHODE EST UNE PROPRIETE EN TANT FONCTION
    public function Avancer () {

        echo "hello je suis entrain d avancer"; 

    }
}

$voiture1 = new Voiture(100);
echo" '<pre>' <br> '</pre>'; ";
$voiture1 ->Avancer();




?>