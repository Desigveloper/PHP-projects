<?php
include_once "user.php";

class Subscriber extends User {
    public $email = "user_email@email.com";
    public $phone = "+12 345 6789";

    function display() {
        echo "Name: " . $this->username . "\n";
        echo "Password: " . $this->password . "\n";
        echo "Email: " . $this->email . "\n";
        echo "Phone: " . $this->phone . "\n";
    }
}