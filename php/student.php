<?php
$name = [ "rob", "tob","bob", "zyan","iyob"]; 
$t = $name; 
echo "Displaying using print_r <br>";
print_r($name); 
echo "<br><br>";

echo "Sorting using asort() <br>";
asort($name); 
print_r($name); 
echo "<br><br>";

echo "Sorting using arsort() <br>";
arsort($t); 
print_r($t);
?>

