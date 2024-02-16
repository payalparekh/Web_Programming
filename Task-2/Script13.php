<html>
<body>
<form action="Script13.php" method="get">
Enter value for celcius:<input type="text" name="cel">
</form>
</body>
</html>

<?php
//Task-2
//Script_13: Develop a PHP script that converts temperature from Celsius to Fahrenheit using the formula (C × 9/5) + 32.
$c=$_REQUEST['cel'];
$farenheit=($c * 9/5) +32;
echo "$farenheit";
?>