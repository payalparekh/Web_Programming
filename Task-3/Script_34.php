<!-- Task-3 -->

<!-- Script_34 Develop a PHP script to check if a specific value exists in an array 
using the in_array() 
function. -->

<?php
$a= array(10,2,1,3,4,10,5,4,85,2,5,5);
if(in_array(10,$a))
{
    echo "present in array";
}
else{
    echo "not present in array";
}


?>