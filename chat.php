<?php
session_start();
if (isset($_SESSION['username'])) {
    include 'partials/_dbconnect.php';
    include 'partials/_header.php';
    include 'chat_section.php';
    include 'send_message.php';
    include 'partials/_footer.php';

} else {
    header('Location:/chat-app');
}
