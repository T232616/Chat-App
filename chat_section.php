<?php
include 'partials/_dbconnect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $msg = $_POST['msg'];
    $username = $_SESSION['username'];
    $timestamp = date("d/m/Y");
    $sql = "INSERT INTO `messages` (`sno`, `username`, `message`, `timestamp`) VALUES (NULL, '$username', '$msg','$timestamp');";
    $result = mysqli_query($conn, $sql);
}

?>
<button id="down_button" style="margin:auto;border-radius:50%;position:fixed;bottom:40%;right:3.6%;"  type="submit" class="btn btn-outline-light"><i class="fas fa-arrow-down"></i></button>
<div  id="chat_content" style="height:70vh;overflow-y:auto;border-radius:10px;width:70vw;border:2px solid #fff;margin:1.3rem auto;position:relative;">
</div>
