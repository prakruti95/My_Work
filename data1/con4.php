<?php
class BankAccount {
    public $owner;
    public $balance;

    // Constructor
    public function __construct($owner, $balance = 0) {
        $this->owner = $owner;
        $this->balance = $balance;
    }

    // Deposit Method
    public function deposit($amount) {
        $this->balance += $amount;
        echo "💰 $amount deposited. Current Balance: ₹" . $this->balance . "<br>";
    }

    // Withdraw Method
    public function withdraw($amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            echo "💸 $amount withdrawn. Remaining Balance: ₹" . $this->balance . "<br>";
        } else {
            echo "⚠️ Insufficient Balance!<br>";
        }
    }

    // Display Info
    public function accountInfo() {
        echo "👤 Account Holder: " . $this->owner . "<br>";
        echo "🏦 Current Balance: ₹" . $this->balance . "<br><hr>";
    }
}

// Object 1
$acc1 = new BankAccount("Rahul", 5000);
$acc1->accountInfo();
$acc1->deposit(2000);
$acc1->withdraw(3000);
$acc1->withdraw(5000);

// Object 2
$acc2 = new BankAccount("Priya");
$acc2->accountInfo();
$acc2->deposit(1000);
?>
