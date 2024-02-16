<html>
<body>
    <form action="Script21.php" method="get" >
    Enter value:<input type="text" placeholder="Enter a number" name="no" /><br>
    <input type="Submit">
</form>
</body>
</html>


<?php
//Task-2
//Script_21 Script to check if a given number is a palindrome or not and display the result.
$no=$_REQUEST['no'];
$check=strrev($no);
if  ($check==$no)
{echo "Given number is palindrome";}
else
{echo "Given number is not an palindrome";}

?>