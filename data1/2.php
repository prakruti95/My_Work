<?php
class Car 
{
    // Static Properties
    public static $brand;
    public static $model;
    public static $year;

    // Static Method
    public static function displayInfo() 
    {
        echo "Brand: " . self::$brand . "<br>";
        echo "Model: " . self::$model . "<br>";
        echo "Year: " . self::$year . "<br><hr>";
    }
}

// Set Static Values
Car::$brand = "Honda";
Car::$model = "City";
Car::$year  = 2024;
Car::displayInfo();

// Update Static Values
Car::$brand = "Kia";
Car::$model = "Seltos";
Car::$year  = 2025;
Car::displayInfo();
?>
