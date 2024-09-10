<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
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