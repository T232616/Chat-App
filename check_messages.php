<?php
include 'partials/_dbconnect.php';
session_start();
$sql = "SELECT * FROM `messages`;";
$result = mysqli_query($conn, $sql);
if (isset($_SESSION['username'])) {
    while ($row = mysqli_fetch_assoc($result)) {
        if ($row['username'] == $_SESSION['username']) {
            echo '<div  class="shadow m-3" style="width:fit-content;height:auto;max-width:18rem;word-break: break-all;color:#fff;background-color: #5e12e4!important;border-radius:10px;float:right;clear:both;">
        <h5  class="text-center" style="border-bottom:1px solid rgba(0,0,0,0.3);">You</h5><p style="margin:0 0.5rem 0.5rem 0.5rem"   class="text-center">' . $row['message'] . '<br><p style="border-top: 1px solid rgba(0,0,0,0.3);text-align: center;"><em style="margin:0 1rem;">' . $row['timestamp'] . '</em></p></p></div>';
        } else {
            echo '<div  class="shadow m-3" style="width:fit-content;height:auto;max-width:18rem;background-color: #4CAF50!important;;border-radius:10px;color:#fff;float:left;clear:both;">
        <h5  class="text-center" style="border-bottom:1px solid rgba(0,0,0,0.3);"> ' . $row['username'] . '</h5>' . ' <p style="margin:0 0.5rem 0.5rem 0.5rem"   class="text-center">' . $row['message'] . '<br><p style="border-top: 1px solid rgba(0,0,0,0.3);text-align: center;"><em style="margin:0 1rem;">' . $row['timestamp'] . '</em></p></p></div>';
        }
    }

}
