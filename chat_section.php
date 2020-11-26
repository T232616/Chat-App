<?php
include 'partials/_dbconnect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    $msg = $_POST['msg'];
    $username = $_SESSION['username'];
    $timestamp = date("h:i:sa");
    $sql = "INSERT INTO `messages` (`sno`, `username`, `message`, `timestamp`) VALUES (NULL, '$username', '$msg','$timestamp');";
    $result = mysqli_query($conn, $sql);

    header("Location:/chat-app/chat.php");

}

?>
<div  id="chat_content" style="height:70vh;overflow-y:auto;border-radius:30px;width:70vw;border:2px solid #fff;margin:1.3rem auto;">

<?php
$sql = "SELECT * FROM `messages`;";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    if ($row['username'] == $_SESSION['username']) {
        echo '<div  class="shadow m-3 original_user" style="width:fit-content;height:auto;max-width:18rem;word-break: break-all;color:#fff;background-color: #5e12e4!important;border-radius:10px;float:right;clear:both;">
    <h5  class="text-center" style="border-bottom:1px solid rgba(0,0,0,0.3);">You</h5>' . ' <p style="margin:0 0.5rem 0.5rem 0.5rem"   class="text-center">' . $row['message'] . '<br><p style="border-top: 1px solid rgba(0,0,0,0.3);text-align: center;"><em style="margin:0 1rem;">' . $row['timestamp'] . '</em></p></p></div>';
    } else {
        echo '<div  class="shadow m-3 other_users" style="width:fit-content;height:auto;max-width:18rem;background-color: #4CAF50!important;;border-radius:10px;color:#fff;float:left;clear:both;">
    <h5  class="text-center" style="border-bottom:1px solid rgba(0,0,0,0.3);"> ' . $row['username'] . '</h5>' . ' <p style="margin:0 0.5rem 0.5rem 0.5rem"   class="text-center">' . $row['message'] . '<br><p style="border-top: 1px solid rgba(0,0,0,0.3);text-align: center;"><em style="margin:0 1rem;">' . $row['timestamp'] . '</em></p></p></div>';
    }
}
?>

</div>
