<?php
class Car{
    public $name = "Car name";
    protected $model = "Car-X";
    private $color = "Color";
    public function detail($color="", $model=""){
        echo $this -> model =$model."<br>";
        echo $this -> color =$color."<br>";

    }
}

$bmw = new Car();
echo $bmw -> name."<br>";
echo $bmw -> detail("RED","XYZ")."<br>";
// echo $bmw -> model()."<br>";// error
// echo $bmw -> color."<br>";//error
