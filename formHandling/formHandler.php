<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];
        $email = $_POST['email'];
        $favouriteFood = $_POST['favouritefood'];


        echo "Name: " . $firstName . " " . $lastName . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Favourite Food: " . $favouriteFood . "<br>";
    }