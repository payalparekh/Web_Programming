<html>
    <body>
        <form action="Script25.php"  method="get">
Enter value:<input type="text" placeholder="Enter a number" name="num1" /><br>
Enter value:<input type="text" placeholder="Enter a number" name="num2" /><br>
<input type="Submit">
</form>
</body>
</html>
<?php
$a=$_REQUEST['num1'];
$b=$_REQUEST['num2'];
//using arithmetic operation.
$a=$a+$b; //234=234+345
$b=$a-$b; //345=234-345
$a=$a-$b; //234=234-345
echo "Value of a: $a</br>";
echo "Value of b: $b</br>";
?>




 