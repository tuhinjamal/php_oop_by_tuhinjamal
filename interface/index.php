<?php

interface CarInterface {
    public function startEngine();
    public function stopEngine();

}

class BMW implements CarInterface{
    public function startEngine(){
        echo "BMW Start <br>";
    }
    public function stopEngine(){
        echo "BMW stop <br>";
    }
    
}

class Nissan implements CarInterface{
    public function startEngine(){
        echo "Nissan Start <br>";
    }
    public function stopEngine(){
        echo "Nissan stop <br>";
    }
    
}

$bmw = new BMW();
$nissan  = new Nissan ();

function driveCar(CarInterface $car){
    $car-> startEngine();
    $car-> stopEngine();

}
driveCar($nissan);