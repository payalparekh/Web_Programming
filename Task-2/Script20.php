<html>
<body>
<form action="Script20.php" placeholder="Enter a number" method="get">
Enter value:<input type="text" name="num" /><br>
<input type="Submit">
</form>
</body>
</html>

<?php
//Task-2
//Script_20 Script to find the factorial of a given number and display the result.
$no=$_REQUEST['num'];
$fact=1;
for($i=$no;$i>0;$i--)
{
	$fact=$fact*$i;
}
echo "Fcatorial of the number:".$fact;

?>