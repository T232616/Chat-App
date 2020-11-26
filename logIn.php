<?php session_start();?>
<?php include 'partials/_dbconnect.php'?>
<?php include 'partials/_header.php'?>
<?php include 'curvy_header.php'?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $logInfo = $_POST['logInfo'];
    if ($logInfo == 'Login') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM accounts WHERE `username`='$username'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            echo '<div class="alert text-center alert-success alert-dismissible fade show" role="alert">
          <strong><h3>Successfully Logged in!!</h3></strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
            $_SESSION['username'] = $username;
            header("Location:/chat-app");
        } else {
            echo '<div class="alert text-center alert-success alert-dismissible fade show" role="alert">
          <strong><h3>Invalid Credentials!!</h3></strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
        }
    }
}
?>
<?php include 'main_section_home.php'?>
<?php include 'curvy_footer.php'?>
<?php include 'partials/_footer.php'?>
