<html>
<body>
<form action="Script17.php" method="get">
Enter Value:<input type="text" name="no" /><br>
<input type="Submit"> 
</form>
</body>
</html>
<?php
//Task-2
//Script_17: Create a PHP script to check if a given year is a leap year and display the result.
error_reporting(0);
$a=$_REQUEST['no'];
if ($a%4==0)
{
	echo "$a is an leap year";
}
else 
{
	echo "$a is not an leap year";
}
?>