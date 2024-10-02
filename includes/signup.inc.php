<?php 
include_once 'includes/dbh.inc.php';

$sql= "INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`) VALUES (NULL, 'Omar', 'Elsayed', 'OmarElsayed@gmail.com', 'user', 'test123'), (NULL, 'john', 'doe', 'johndoingitdo@idts.com', 'user', 'johnjohn');";

mysqli_query($conn, $sql);

header ("Location: ../index.php?signup=success");

?>

