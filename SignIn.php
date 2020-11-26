<?php include 'partials/_dbconnect.php'?>
<?php include 'partials/_header.php'?>
<?php include 'curvy_header.php';?>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['logInfo'] == 'SignIn') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        if ($password == $cpassword) {
            $sql = "SELECT * FROM accounts WHERE `username` = '$username';";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) == 0) {
                $hashp = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO `accounts` (`sno`, `username`, `password`) VALUES (NULL, '$username', '$hashp');";
                $result = mysqli_query($conn, $sql);
                echo '<div class="alert text-center alert-info alert-dismissible fade show" role="alert">
                  <strong><h3>Your Account is created successfully!!</h3></strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>';

            } else {
                echo '<div class="alert text-center alert-info alert-dismissible fade show" role="alert">
              <strong><h3>Your Account alerady exists!</h3></strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
            }
        } else {
            echo '<div class="alert text-center alert-info alert-dismissible fade show" role="alert">
          <strong><h3>Password Dont Match . Please try again!!</h3></strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
        }
    }

}
?>
<?php include 'main_section_home.php';?>
<?php include 'curvy_footer.php';?>
<?php include 'partials/_footer.php'?>
