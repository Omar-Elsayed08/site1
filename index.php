<!doctype html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Bootstrap Demo</title>
  </head>

  <body><?php 
require "signup-includes/account-header.php";
include_once 'includes/dbh.inc.php';
include_once 'includes/header.php';

$sql="SELECT * FROM users;";
$result=mysqli_query($conn, $sql);
$resultCheck=mysqli_num_rows($result);

if ($resultCheck > 0) {
  while ($row=mysqli_fetch_assoc($result)) {
    echo htmlspecialchars($row['user_uid'])."<br>";
  }
}

if (isset($_GET['person'])) {
  $name=htmlspecialchars($_GET['person']);
  echo $name." loves America!";
}

?>
<main>
      <div>
<?php

if (isset($_SESSION['userId'])){
  echo "You are logged in";
}
else{
  echo "You are not logged in";
}

?>
      </div>
    </main>
  </body>

  </html>