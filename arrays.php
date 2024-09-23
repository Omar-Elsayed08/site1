
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">    <title>Bootstrap demo</title>
  </head>
  <body>
     <?php
     session_start();
     include "includes/header.php";
    $array= array("Omar","Lebron","Kobe","Joe","Jimothy");
    echo $array[1];
    ?>
  </body>
</html>