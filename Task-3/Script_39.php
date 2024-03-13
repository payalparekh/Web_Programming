<!-- Task-3 -->

<!-- Script_39 Create a PHP script that extracts a portion of an array using the array_slice() function 
and displays the result. -->

<?php
$a= array(10,3,2,5,8,8,6,5,7);
$b =array_slice($a,0,3);
print_r($b);
?>