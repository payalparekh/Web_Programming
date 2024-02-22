<?php
date_default_timezone_set("Asia/Kolkata");

$b=date("H");
$c=date("i");
$d=date("s");


echo '<br>';

echo "<html>
<style>
#d{
    background-color:maroon;
    font-family:digital-7;
    font-size:60px;
    color:red;
 }
 @font-face
 {
     font-family:digital-7;
     src:url('digital-7.ttf');
 }
 table{
        font-family:arial;
        align:center;
         font-size:10px;
         color:white;
 }
 a{
    color:white;
 }

 body{
    color:red;
       }
    #g{
        font-size:2px;
    }
    </style>

    <body>
    <table bgcolor='black' align='center'>
    <tr>

    <td><div id='d' align='center' color:marron>$b</div></td><td>:</td>
    <td><div id='d' align='center' color:marron>$c</div></td><td>:</td>
    <td><div id='d' align='center' color:marron>$d</div></td>

    </tr>

    <td colspan='2'> HOURS</td>
    <td colspan='2'>MINUTES</td>
    

    <td colspan='2'> SECONDS</td>
    </tr>
    </table>
    </body>
    </html>";

?>