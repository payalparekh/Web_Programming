<html>
<body>
<form action="Script18.php" method="get">
Enter value:<input type="text" name="no" /><br>
<input type="Submit">
</form>
</body>
</html>


<?php
//Task-2
//Script_18: Write a PHP script that generates a random number between 1 and 10 and lets the userguess it.
$b=$_REQUEST['no'];
$a=rand(1,10);
if ($a!=$b)
{
	echo "You are wrong";
}
else
{
	echo "You are righ						t";
}
	