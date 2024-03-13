<!-- Task-3 -->

<!-- Script_47 Write a PHP script that applies a user-defined function to all elements of an array using 
the array_map() function -->

<?php

function square($num){
    return $num * $num;
}

$numbers= array(1,2,3,4,5);

$squarednum= array_map("square",$numbers);
print_r($numbers);

print_r($squarednum);
?>