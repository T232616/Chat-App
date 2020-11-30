<div style=";position:absolute;left:50%;top:50%;transform:translate(-50%, -50%);margin-top:3rem;" class="container">
<?php

if (!isset($_SESSION['username'])) {
    echo '<div class="row">
    <h1 data-aos="fade-down"
    data-aos-easing="ease-out-cubic"
    data-aos-duration="2000" style="color:#fff;text-align: center;" class="mx-auto col-8">Please Login To Continue and use our iChat App</h1>
    </div><div class="row">
    <button data-aos="flip-left"
    data-aos-easing="ease-out-cubic"
    data-aos-duration="2000"  style="text-align: center;" type="button" class="btn btn-outline-light mx-auto col-2 my-4" data-toggle="modal" data-target="#exampleModal2">
    Login
    </button>
    </div>';
} else {
    echo '<h1><div class="row">
    <h1 data-aos="fade-down"
    data-aos-easing="ease-out-cubic"
    data-aos-duration="2000" style="color:#fff;" class="text-center   col-8 mx-auto">Chat with your loved ones using   iChat App</h1>
    </div>
    <div class="row">
    <a href="chat.php" data-aos="flip-left"
    data-aos-easing="ease-out-cubic"
    data-aos-duration="2000"  style="text-align: center;" type="button" class="btn btn-outline-light mx-auto col-2 my-3">
    Start Chatting
    </a>
    </div>';
}
?>

</div>
