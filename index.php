<?php
class Car {
    // properties
    public $name;
     public $color;
     public static $email ="user@gmail.com";
    public function __construct($car_name, $color=""){
        $this->name = $car_name;
        $this->color = $color;
        echo "<br>";
        echo "inside the constructor";
        echo "<br>";


    }
    // methods (function)
    public function getCarName(){
        return "Car Brand Name is  ".$this->name . "<br> and " ."color is ".$this->color;
    }
    public static function getAge(){
        return 100 . "<br>";
    }
     public static function getName(){
        return "User Name".self::getAge(). "<br>";
    }

    public function __destruct(){
        echo "inside the destructor <br>";
        
    }
    
}

// since we have not passed any color in parameter we made it optional by default set empty
$bmw = new Car("BMW");
echo "object is created";
echo "<br>"; 

echo $bmw->name;
echo "<br>"; 
echo $bmw->color;
echo "<br>";
echo $bmw->getCarName();
echo "<br>";



$mercedes = new Car("Mercedes","Black");
echo "object is created";
echo "<br>"; 
$mercedes->name = "Mercedes";
echo "<h1> $mercedes->color</h1> <br>";
echo $mercedes->getCarName();
echo "<br>";
echo Car::getName()."<br>";
echo Car::$email;
class userInfo{
    public function getInfo(){
        return "user information :". Car::getName();
    }
}

$info = new userInfo();
echo $info->getInfo();