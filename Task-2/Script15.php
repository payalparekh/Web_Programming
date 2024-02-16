<html>
<body>
<form action="Script15.php" method="get">
Enter number<input type="text" name="num1" /><br>
Enter number<input type="text" name="num2" /><br>
Enter number<input type="text" name="num3" /><br>
<input type="Submit">
</form>
</body>
</html>


<?php
//Task-2
//Script_15: Write a PHP script to find the largest of three numbers entered by the user.
$n1=$_REQUEST['num1'];
$n2=$_REQUEST['num2'];
$n3=$_REQUEST['num3'];
if ($n1>$n2)
	echo "$n1 is large";
elseif ($n2>$n3)
echo "$n2 is large";
else
	echo "$n3 is large";
?>