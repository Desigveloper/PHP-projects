<?php
 class User {
        public $username;
        public $password; //Properties(data) of User

        const ENGLISH = "0-English";
        const SPANISH = "1-Spanish";
        const FRENCH = "2-French";
        const GERMAN = "3-Greman";
        const ARABIC = "4-Arabic";

        function __construct()
        {
            // Statements go here
            $this->username = "Guest";
            $this->password = "1234";
        }

        function __destruct()
        {
            // Destruct statement go here
        }

    public function saveUser() // Method
    {
        echo "Save User code goes here";
    }

    static function lookupLanguage()
    {
        echo self::ARABIC . "\n";
    }
    static function pwdString() //Static methods are called on classes not objects
    {
        echo "Please enter your password";
    }

    function getPassword()
    {
        return $this->password; //The $this varibale is use to access the properties of the current object
    }

    final function copyright() // with final keyword this method can't be overwridden by a subclass
    {
        echo "This class was written by Desigveloper\n";
    }
}

