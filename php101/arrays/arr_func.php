<?php
    include_once "array.php";

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

 //Extract - for breaking a key/value pair of an associative array into individual variables and values
extract($newPaper, EXTR_PREFIX_ALL, 'fromNewPaper');
echo $fromNewPaper_copier . "\n";
?>

<?php
//Compact - the inverse of extract
$fname = "Doctor";
$sname = "Who";
$planet = "Gallifrey";
$system = "Gridlock";
$constellation = "Kasterborous";

$contact = compact('fname', 'sname', 'planet', 'system', 'constellation');
print_r($contact);

$id = 23;
$message = "Hello";
$address = "1 Old Street";
$age = 61;

$details = compact(explode(' ', 'id message address age'));
print_r($details);
?>

 