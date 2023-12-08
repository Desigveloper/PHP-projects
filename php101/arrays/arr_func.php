<?php

  $data[] = "data";
  $data[] = "mobile";
  $data[] = "charger";
  $data[] = "Camera";

//is_array
  echo (is_array($data)) ? "$data is defined. Is an array\n" : "$data Not defined. Is not an array\n";

 //count
 echo count($data) . "\n";

 //sort
 echo "Not Sorted:\t" . $data[0] . " " . $data[1] . " " . $data[2] . " " . $data[3] . "\n";
 sort($data, SORT_NUMERIC); //Second param is an optional flag
 echo "Sorted:\t\t" . $data[0] . " " . $data[1] . " " . $data[2] . " " . $data[3] . "\n";
 rsort($data, SORT_STRING); //Second param is an optional flag
 echo "Sorted reverse:\t" . $data[0] . " " . $data[1] . " " . $data[2] . " " . $data[3] . "\n";


 //shuffle
 shuffle($data);
 echo "Shuffled:\t" . $data[0] . " " . $data[1] . " " . $data[2] . " " . $data[3] . "\n";

 //Explode
 echo "\n";
 echo $data = "This string will be broken into array of strings after explosion\n";
 $data = explode(' ', "This string will be broken into array of strings after explosion");
 //First param is a delimter and can be any character joining strings into sentence
 print_r($data);

 //Extract
 
 