<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Arithmetic Operator
    echo 100-40;
    echo '<div>';
    echo '</div>';
    //Assignment Operator
    $x=100;
    $x= $x+100;
    echo $x;
    echo '<div>';
    echo '</div>';
    //Comparison Operator
    $x=50;
    $y=100;
    if ($x == $y ){
        echo "True!";
    }
    else {
        echo "False";
    }
    echo '<div>';
    echo '</div>';

    //Increment/Decrement Operator
    $x=100;
    echo $x++;
    echo $x;
    echo '<div>';
    echo '</div>';
    //Logical Operator
    $x=50;
    $y=50;
    if ($x==$y and 2==2 ){
        echo "True";
    }

    ?>
</body>
</html>