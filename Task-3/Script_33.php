<!-- Task-3 -->


<!-- Script_33 Create a PHP script to check if a specific key exists in an associative array using the 
array_key_exists() function -->

<?php
$a= array(
     'name' =>'ABC',
     'age' => 23,
     'city' => 'Delhi'
);
$b='age';

if (array_key_exists($b,$a)){
    echo "Given value exists in associative array";
}
else{
    echo "Given value does not exist in associative array";
}
?>