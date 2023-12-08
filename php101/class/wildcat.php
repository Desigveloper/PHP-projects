<?php
    $animal = new Tiger();

    echo "Tigers have ....\n";
    echo "Fur: " . $animal->fur . "\n";
    echo "Stripes: " . $animal->stripes . "\n";

    class Wildcat {
        public $fur; // Wildcat have fur

        function __construct()
        {
            $this->fur = "TRUE";   
        }
    }

    class Tiger extends Wildcat {
        public $stripes; // Tigers have stripes

        function __construct()
        {
            parent::__construct(); // Call parent constructor first 
            $this->stripes = "TRUE";
        }
    }