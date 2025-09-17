<?php
class Student 
{
    public $name;
    public $course;

    // Constructor 
    public function __construct($studentName, $studentCourse) {
        $this->name = $studentName;
        $this->course = $studentCourse;
        echo "Student Registered: $this->name (Course: $this->course)<br>";
    }

    // Destructor 
    // public function __destruct() {
    //     echo "Student data for {$this->name} is removed from memory.<br>";
    // }
}

// Object 1
$student1 = new Student("Rahul", "PHP");

// Object 2
$student2 = new Student("Priya", "Laravel");
?>
