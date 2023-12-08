<?php
include_once "user.php";
require_once "inheritance.php";

$object = new User();
print_r($object);
echo "\n";

$object->username = "Naa";
$object->password = "mypass";
echo "Her name is " . $object->username;
echo "\n";
$object->saveUser();
echo "\n";

$object1 = clone $object;
$object1->username = "adjo";
print_r($object1) . "\n";

$object2 = clone $object1;
$object2::pwdString(); //(::) scope resolution operator for calling static methods
echo "\n";
$object2->password = 'secret';
print_r($object2) . "\n";
User::lookupLanguage();
echo "\n";

$object4 = new Subscriber();
$object4->username = "Ailey";
$object4->display();
$object4::lookupLanguage();
$object4->copyright();