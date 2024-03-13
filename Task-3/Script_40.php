<!-- Task-3 -->

<!-- Script_40 Develop a PHP script to remove and replace elements from an array using the 
array_splice() function -->

<?php

$arr = array(1, 2, 3, 4, 5, 6, 7, 8);
$b=array_splice($arr,0,3);
print_r($b);
?>