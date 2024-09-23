
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