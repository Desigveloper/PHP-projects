<?php

function printInputInterface()
{
    print "<html><head><title>PHP Example</title></head>";
    print "<form method='post' action='callmyself.php'>";
    print "<label for='name'>Name 
            <input = type='text' id='name' name='name'></label><br>";
    print "<label for='email'>Email
            <input type='email' name='email' id='email'></label><br>";
    print "<label for='term'>Term
            <input type='text' name='term' id='term'></label><br>";
    print "<input type='submit' id='submitbutton' name='submitbutton' value='Print Details'>";
    print "</form>";
    print "</body></html>";

}

if (isset($_POST['submitbutton']))
{
   $name = $_POST['name'];
   $email = $_POST['email'];
   $term = $_POST['term'];

   print "Name: $name" . "<br>";
   print "Email: $email" . "<br>";
   print "Term: $term" . "<br>";

}
else
{
   printInputInterface();
}

?>