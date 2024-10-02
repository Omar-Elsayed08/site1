
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Bootstrap demo</title>
  </head>
  <body>
    <form method="GET">
        <input type="text" name="person">
        <button>SUBMIT</button>
    </form>

<?php
include_once 'includes/dbh.inc.php';
    include "includes/header.php";
    $sql="SELECT * FROM users;";
    $result= mysqli_query($conn, $sql);
    $resultCheck=mysqli_num_rows($result);

    if ($resultCheck > 0){
      while ($row=mysqli_fetch_assoc($result)){
        echo $row['user_email']."<br>";
      }
    }
    

    //This variable is the users input into the submit box
    $name = $_GET['person'];
    //This line echos the users input followed by a generic statement
    echo $name." loves America!"
?>
   
</body>
</html>
