<html>
<body>
<form action="Script11.php" method="get">
Enter a number:<input type="text" name="num" /><br>
<input type="submit">
</form>
</body>
</html>


<?php
//Task-2
//Script_11: Create a PHP script that checks whether a given number is even or odd and displays the result.
$n1=$_REQUEST['num'];
if ($n1%2==0)
	echo "Number is even";
else
	echo "Number is odd";
?>