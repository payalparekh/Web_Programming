<!-- Task 3 -->

<!-- Script_43 Develop a PHP script to extract the keys from an associative array using the array_keys() 
function -->


<?php
$a= array(
    "name"=>"abc",
    "age"=>23,
    "city"=>"xyz"
);

$b=array_keys($a);
print_r($b);    
?>