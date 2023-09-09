<?php

abstract class Car {
  const NO_OF_WHEELS = 4;
    public $name = "Name";
    protected $color ="Color";
    private $model ="Model";
  public function __construct($name,$color,$model){
    $this-> name = $name;
    $this-> color = $color;
    $this-> model = $model;

  }
   public function detail(){
    echo $this-> name."<br>";
    echo $this-> color."<br>";
    echo $this-> model."<br>";
    echo $this-> ownerName."<br>";


  }
  final function noOfWheels(){
    echo self::NO_OF_WHEELS , "<br>";
  }
   abstract public function type($type);
}


class Tesla extends Car{
   public $ownerName;
  public function __construct($name,$color,$model,$ownerName){
    $this-> name = $name."<br>" ;
    $this-> color = $color."<br>" ;
    $this-> model = $model."<br>" ;
    $this-> ownerName = $ownerName ;
  } 

  public function type($type){
    echo "type : ".$type."<br>";
  }
 

}
$tesla = new Tesla("Tesla","RED","Model-X","Mr.X");
$tesla -> detail();
$tesla ->noOfWheels()."<br>";
$tesla ->type("electric")."<br>";


echo Car::NO_OF_WHEELS."<br>";
echo $tesla::NO_OF_WHEELS;
