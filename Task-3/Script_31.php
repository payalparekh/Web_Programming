<!-- Task-3 -->

<!-- Script_31 Develop a PHP script that searches for a specific element in an array using the 
array_search() function and displays the index if found. -->

<?php
$a= array("a","b","c","d","e","f","g");
$b=array_search("c",$a);
print_r($b);
?>