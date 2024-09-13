<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
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