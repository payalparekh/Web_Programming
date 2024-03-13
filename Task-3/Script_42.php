<!-- Task-3 -->

<!-- Script_42 Create a PHP script that finds the difference between two arrays using the array_diff() 
function. -->

<?php
$a= array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$b= array("e"=>"red","f"=>"green","g"=>"blue","h"=>"purple");
$c =array_diff($a,$b);
print_r($c);
?>