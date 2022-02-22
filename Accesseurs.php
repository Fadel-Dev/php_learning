
<?php
 

class Car {
     public  $_speed;
    private $_name;
     public $_start;

    public function __construct(int $speed, $name ,int $start){
        $this->_speed = $speed;
        $this->_name = $name;
        $this->_start = $start;
            echo "my ".$name. " run at " .$speed."km/h";
    }
    public function get_name() {
        return $this->_name;
    }
    public function set_name($name) {
        if (strlen($name) > 10) {
           echo 'ERROR: le nom ne doit pas etre etre long ';
        } else {
            $this->_name = $name;
        }
        
    }

#CREATION DE METHODE;
    public function Demmarer () {
        echo  "my ".$this->_name." start to run at ".$this->_start;
    }
}

$fatherCar = new Car(200 , 'ferrari',2);
echo '<br>';

$fatherCar->Demmarer();
echo '<br>';
echo $fatherCar->get_name();
echo '<br>';
echo $fatherCar->set_name('renauld');
echo '<br>';
echo $fatherCar->get_name();





?>
 
