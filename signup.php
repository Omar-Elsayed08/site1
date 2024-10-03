<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if (isset($_GET['error'])) {
        if ($_GET['error']=="emptyfields") {
            echo '<p style="color: red;">Please fill in all fields!</p>';

        }

        else if ($_GET['error']=="invaliduidmail") {
            echo '<p style="color: red;">Invalid username and email!</p>';

        }

        else if ($_GET['error']=="invaliduid") {
            echo '<p style="color: red;">Invalid username!</p>';
        }

        else if ($_GET['error']=="invalidmail") {
            echo '<p style="color: red;">Invalid email!</p>';
        }

        else if ($_GET['error']=="passwordcheck") {
            echo '<p style="color: red;">Passwords do not match!</p>';
        }

        else if ($_GET['error']=="usertaken") {
            echo '<p style="color: red;">Username already taken!</p>';
        }
    }
    else if (($_GET['signup']=="success")){
        echo '<p style="color: green;">You have signed up successfully!</p>';
    }
    ?>
    <form action="signup-includes/signup.inc.php" method="POST">
    <input type="text" name="uid" placeholder="Username">
    <input type="text" name="mail" placeholder="E-mail">
    <input type="password" name="pwd" placeholder="Password">
    <input type="password" name="pwd-repeat" placeholder="Repeat Password">
    <button type="submit" name="signup-submit">Sign Up</button>
</form>

    
</body>
</html>