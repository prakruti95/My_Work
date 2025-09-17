<?php
class DigitSum {
    public $number;

    // Constructor
    public function __construct($number) {
        $this->number = $number;
    }

    // Method to calculate sum of digits
    public function getSum() {
        $num = $this->number;
        $sum = 0;

        while ($num > 0) {
            $digit = $num % 10;   // last digit
            $sum += $digit;       // add digit into sum
            $num = (int)($num / 10); // remove last digit
        }

        echo "👉 Number: {$this->number}<br>";
        echo "➕ Sum of Digits: $sum<br><hr>";
    }
}

// Object 1
$digit1 = new DigitSum(1234);
$digit1->getSum();

// Object 2
$digit2 = new DigitSum(98765);
$digit2->getSum();

// Object 3
$digit3 = new DigitSum(2025);
$digit3->getSum();
?>
