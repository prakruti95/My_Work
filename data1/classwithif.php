<?php
class Student {
    public $name;
    public $marks;

    // Constructor
    public function __construct($name, $marks) {
        $this->name = $name;
        $this->marks = $marks;
    }

    // Method with conditional statement
    public function checkResult() {
        echo "👤 Student: " . $this->name . "<br>";
        echo "📊 Marks: " . $this->marks . "<br>";

        if ($this->marks >= 40) {
            echo "✅ Result: PASS<br><hr>";
        } else {
            echo "❌ Result: FAIL<br><hr>";
        }
    }
}

// Object 1
$student1 = new Student("Rahul", 75);
$student1->checkResult();

// Object 2
$student2 = new Student("Priya", 32);
$student2->checkResult();

// Object 3
$student3 = new Student("Amit", 40);
$student3->checkResult();
?>
