
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
    $x=10;
    if ($x==1 ){
        echo "yellow";
    } 
    elseif ($x==2) {
        echo "blue";
    }
    elseif ($x==3) {
        echo "red";
    }
    elseif ($x==10) {
        echo "green";
    }
    else {
        echo "purple";
    }
    ?>
    <div>
</div>
    <?php 
    $x=10;
    switch ($x) {
        case 10:
            echo "The answer is 10";
        break;
        case "number":
            echo "The answer is number";
        break;

    }

    ?>
</body>
</html>