<?php
class Calculator {
    public $num1;
    public $num2;
    public $operation;

    // Constructor
    public function __construct($num1, $num2, $operation) {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->operation = $operation;
    }

    // Method with switch-case
    public function calculate() {
        switch ($this->operation) {
            case "add":
                echo "➕ Addition: " . ($this->num1 + $this->num2);
                break;

            case "sub":
                echo "➖ Subtraction: " . ($this->num1 - $this->num2);
                break;

            case "mul":
                echo "✖️ Multiplication: " . ($this->num1 * $this->num2);
                break;

            case "div":
                if ($this->num2 != 0) {
                    echo "➗ Division: " . ($this->num1 / $this->num2);
                } else {
                    echo "⚠️ Cannot divide by zero!";
                }
                break;

            default:
                echo "❌ Invalid Operation!";
        }
    }
}

// Object Create
$calc1 = new Calculator(10, 5, "add");
$calc1->calculate();

echo "<br>";

$calc2 = new Calculator(15, 3, "div");
$calc2->calculate();

echo "<br>";

$calc3 = new Calculator(8, 0, "div");
$calc3->calculate();

echo "<br>";

$calc4 = new Calculator(12, 6, "xyz");
$calc4->calculate();
?>
