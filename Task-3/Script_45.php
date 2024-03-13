<!-- Task-3 -->

<!-- Script_45 Create a PHP script that flips the keys and values of an associative array using the 
array_flip() function. -->

<?php
$a= array(
    'name' => 'abc',
    'age' => 23,
    'city' => 'xyz'
);
$b= array_flip($a);
print_r($a);
print_r($b);
?>