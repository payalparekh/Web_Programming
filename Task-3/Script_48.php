<!-- Task-3 -->

<!-- Script_48 Create a PHP script that uses the array_reduce() function to apply a callback function to 
the elements of an array and return a single value. -->

<?php
$numbers = [1, 2, 3, 4, 5];

// A callback function to sum the elements of the array
$sumCallback = function ($carry, $item) {
    return $carry + $item;
};

$total = array_reduce($numbers, $sumCallback, 0);

echo "The sum of the numbers is: $total";
?>