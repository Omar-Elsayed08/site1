<?php
session_start();
session_unset();
session_destroy();
header('Location: ../site1/index.php');

?>