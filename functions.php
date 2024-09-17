<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function newCalc($x){
        $newnr=$x * 2;
        echo "Congratulations you've just doubled your life savings of:".$newnr;

        $x=100;
        newCalc($x);

    }
    ?>
</body>
</html>