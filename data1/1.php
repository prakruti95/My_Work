<?php
class Car {
    // Method with parameters (no properties)
    public function displayInfo($brand, $model, $year) {
        echo "Brand: " . $brand . "<br>";
        echo "Model: " . $model . "<br>";
        echo "Year: " . $year . "<br><hr>";
    }
}

// Object 1
$car1 = new Car();
$car1->displayInfo("Toyota", "Fortuner", 2022);

// Object 2
$car2 = new Car();
$car2->displayInfo("Hyundai", "Creta", 2023);
?>
