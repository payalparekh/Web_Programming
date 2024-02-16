<html>
<body>
<form action="Script12.php" method="get">
Enter value:<input type="text" name="str1" /><br>
Enter value:<input type="text" name="str2" /><br>
<input type="submit">
</form>
</body>
</html>


<?php
//Task-2
//Script_12: Write a PHP script to concatenate two strings and display the combined result.
$s1=$_REQUEST['str1'];
$s2=$_REQUEST['str2'];
echo "$s1 "."$s2";
?>