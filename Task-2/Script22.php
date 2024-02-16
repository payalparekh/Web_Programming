<html>
    <body>
        <form action="Script22.php" method="get">
    Enter value:<input type="text" placeholder="Enter a number" name="r" /><br>
    <input type="Submit">
         </form>
    </body>
</html>

<?php
//Task-2
//Script_22 Script to calculate the area of a circle based on the given radius and display the result.
$no=$_REQUEST['r'];
$pi=3.14;
$aoc=$pi*$no*$no;
echo "Area of circle is:".$aoc;
?>


