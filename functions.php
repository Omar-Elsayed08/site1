
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
    function newCalc($x){
        $newnr=$x * 2;
        echo "Congratulations you've just doubled your life savings of: ".$newnr;
 }
        $x=100;
        newCalc($x);

   
    ?>
</body>
</html>