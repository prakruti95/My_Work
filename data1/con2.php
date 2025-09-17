<?php
class Database {
    private $connection;

    // Constructor → Database connect
    public function __construct() {
        echo "✅ Connecting to Database...<br>";
        $this->connection = "Database Connected"; 
    }

    // Method
    public function getData() {
        echo "📦 Fetching Data from Database...<br>";
    }

    // Destructor → Database disconnect
    public function __destruct() {
        echo "❌ Closing Database Connection...<br>";
    }
}

// Object create
$db = new Database();
$db->getData();
?>
