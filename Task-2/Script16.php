<html>
<body>
<form action="Script16.php" method="get">
Enter String:<input type="text" name="str">
<input type="Submit">
</form>
</body>
</html>

<?php
//Task-2
//Script_16: Develop a PHP script that takes a sentence as input and counts the number of vowels in it.
error_reporting(0);
$a=$_REQUEST['str'];
$b=strlen($a);
for($i=0; $i<=$b; $i++)
{
	if($a[$i]=='a' || $a[$i]=='e' || $a[$i]=='i' || $a[$i]=='o' || $a[$i]=='u' || $a[$i]=='A' || $a[$i]=='E' || $a[$i]=='I' || $a[$i]=='O' || $a[$i]=='U')
    {
		$c=$c+1;
	}		
}
echo "You have entered this much vowels= ".$c

 
 //echo strlen("$s");
?>