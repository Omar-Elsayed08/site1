
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">    <title>Bootstrap demo</title>
  </head>
  <body>
    
<?php
include "includes/header.php";
session_start();
    //String
    $name= "Coding is fun";

    //Integer
    $name= 10;

    //Float
    $name= 10.5434;

    //Boolean
    

    //Array
    $names= array("Coach Clark","Coach Maxwell","Coach B");
    echo $names['2'];
?>


</body>
</html>