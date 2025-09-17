<?php
class Car {
    public $brand;
    public $model;
    public $year;

    // Method to display car info
    public function displayInfo() {
        echo "<h3>Car Details:</h3>";
        echo "Brand: " . $this->brand . "<br>";
        echo "Model: " . $this->model . "<br>";
        echo "Year: " . $this->year . "<br>";
    }
}

// Check form submit thayu chhe ke nai
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $car = new Car();
    $car->brand = $_POST['brand'];
    $car->model = $_POST['model'];
    $car->year  = $_POST['year'];

    $car->displayInfo();
}
?>

<!-- HTML Form for User Input -->
<form method="post">
    <label>Enter Car Brand:</label>
    <input type="text" name="brand" required><br><br>

    <label>Enter Car Model:</label>
    <input type="text" name="model" required><br><br>

    <label>Enter Car Year:</label>
    <input type="number" name="year" required><br><br>

    <button type="submit">Submit</button>
</form>
