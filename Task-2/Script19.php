<html>
<body>
<form action="Script19.php" method="get">
Enter value:<input type="text" name="no" /><br>
<input type="Submit">
</form>
</body>
</html>

<?php
//Task-2
//Script_19: Develop a PHP script that takes a positive integer as input and checks whether it is a prime number.
$a=$_REQUEST['no'];
$sum=0;
for($i=1;$i<=$a;$i++)
{
	$b=$a%$i;
	if($b==0)
	{$sum=$sum+1;}
}
if($sum>2)
{ echo "The number is prime";}
else
{echo "The number is not prime";}
?>