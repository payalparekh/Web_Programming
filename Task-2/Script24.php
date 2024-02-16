<html>
    <body>
        <form action="Script24.php" method="get" align="center">
    Enter value:<input type="text" placeholder="Enter a number" name="sq" /><br>
    <input type="Submit">
</form>
</body>
</html>

<?php
//Task-2
//Script_24 Script to calculate the square root of a given number and display the result.
$num=$_REQUEST['sq'];
echo "Square root of given number is:".sqrt($num);
?>