
<?php include 'partials/_dbconnect.php'?>
<?php include 'partials/_header.php'?>
<?php
session_start();
session_unset();
session_destroy();
header("Location:/chat-app");
?>
<?php include 'partials/_footer.php'?>
