<!-- Task-3 -->

<!-- Script_44 Write a PHP script to extract the values from an associative array using the array_values() 
function -->

<?php
$a= array(
    'name' => 'abc',
    'age' => 23,
    'city' => 'xyz'
);
$b= array_values($a);
print_r($b);

?>