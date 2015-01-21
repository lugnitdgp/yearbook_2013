<?php

require_once("database.php");

for ($i = 100; $i < 200; $i++)
{
    $roll = "09/ME/$i";
    $q = "INSERT INTO profiles (`uname`, `password`) VALUES ('$roll', '$roll')";
//    $q = "DELETE FROM profiles where `uname` = '$roll'";
    mysql_query($q);
} 

?>
