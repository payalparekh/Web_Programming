<!-- Task-3 -->

<!-- Script_38 Write a PHP script to use the array_shift() function to remove an element from the 
beginning of an array and the array_unshift() function to add elements at the beginning -->


<?php
// Array Shift
$a= array(10,3,5,5,7,8,7,8,);
$b= array_shift($a);
print_r ($a);

// Array Unshift
$c= array(10,3,5,5,7,8,7);
$d= array_unshift($c,5);
print_r($c);

?>
