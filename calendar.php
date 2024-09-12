<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
    <style>
        p{
            text-align: center;
            font-size: 200px;
            font-family: Arial;
            Margin-top: 38vh;
        }
    </style>
</head>
<body>
    <?php
    $dayofweek = date("w");
    //echo $dayofweek;
    switch ($dayofweek){
        case 1:
            echo "<p>Today is Monday</p>";
            break;
         case 2:
            echo "<p>Today is Tuesday</p>";
            break;
        case 3:
            echo "<p>Today is Wednesdy</p>";
            break; 
        case 4:
            echo "<p>Today is Thursday</p>";
            break;
        case 5:
            echo "<p>Today is Friday</p>";
            break;
        case 6:
            echo "<p>Today is Saturday</p>";
            break;  
        case 3:
            echo "<p>Today is Sunday</p>";
            break;             
    }

    ?>
</body>
</html>