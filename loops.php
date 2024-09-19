
</html><!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">    <title>Bootstrap demo</title>
  </head>
  <body>
    <?php
    include "includes/header.php";
    //While loop
    $x=2;
    while ($x<=5){
        echo "hi there <br>";
        $x++;
    }
    //Do wile loop
    $x=10;
    do {
        echo "hi there<br>";
        $x++;
    }
    while ($x <=5);
    //For loop
    for ($x=1; $x <=10; $x++) {
        echo "hi<br>";
    }
    //Foreach Loop
    $array=array("Coach B", "Mr. Carrol", "Mr.Gutherie", "Coach Clark", "Coach Maxwell");
     foreach ($array as $loopdata) {
        echo "My name is ".$loopdata."<Br>";
     }
    ?>
    

</body>
</html>