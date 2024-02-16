<html>
<body>
<form action="Script10.php" method="get">
length:<input type="text" name="length" /> <br>
width:<input type="text" name="width" /> <br>
<input type="submit" />
</form>
</body>
</html>

<?php
//Task-2
//Script_10: Write a PHP script to calculate the area of a rectangle given its length and width.
$l=$_REQUEST['length'];
$w=$_REQUEST['width'];
$area=$l*$w;
echo "The Area of Rectangle ".$area;

?>