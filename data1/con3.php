<?php
class User {
    public $name;
    public $role;

    public function __construct($name = "Guest", $role = "Viewer") {
        $this->name = $name;
        $this->role = $role;
    }

    public function showInfo() {
        echo "Name: $this->name, Role: $this->role<br>";
    }
}

$user1 = new User(); // default values set
$user1->showInfo();

$user2 = new User("Prakruti", "Admin"); // custom values
$user2->showInfo();
?>
