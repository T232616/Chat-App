<?php ob_start();?>
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/1b349638e0.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="images/logo.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>iChat App</title>
    <style>
    body {
      display:flex;
      flex-direction:column;
      width:100vw;
      height:100vh;

    }
    body:before {
      position:absolute;
      z-index:-1;
      content:"";
      background-color: #0a76be;
      width:100%;
      height:100vh;
    }
    footer{

      color:white;
      text-align:center;
      margin-top:auto;
    }

::-webkit-scrollbar {
  width: 20px;
}
.nav_buttons{
  text-align: center;
}

::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px rgba(0,0,0,0.6);
  border-radius: 10px;
}

::-webkit-scrollbar-thumb {
  background: rgba(0,0,0,0.4);
  border-radius: 10px;
}
@media (max-width:1003px){
  h1{
    font-size:2rem;
  }
}
@media (max-width:769px){
  h1{
    font-size:1.5rem;
  }
}
@media (max-width:475px){
  h1{
    font-size:1.2rem;
  }
}
@media (max-width:350px){
  h1{
    font-size:1rem;
  }
}

    </style>
  </head>
  <body>
  <div class="modal fade" id="exampleModal10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <h4 class="text-center my-2">Are You sure that you want to Logout ?</h4>
       <form method="post" action="logout.php">
       <input type="hidden" name="logInfo" value="logout" >
       <button type="submit"  class="btn btn-primary my-4" style="display:block;width:20%;margin:auto;">Logout</button>
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">SignIn</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
        <form method="post" action="SignIn.php">
        <input type="hidden" name="logInfo" value="SignIn">
  <div class="form-group">
    <label for="exampleInputEmail1">Enter  username</label>
    <input name="username" placeholder="Enter username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>

  </div>
  <div class="form-group">
    <label for="exampleInputPassword">Enter Password</label>
    <input name="password" placeholder="Enter Password" type="password" class="form-control" id="exampleInputPassword" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPasswordc">Retype Password</label>
    <input name="cpassword" placeholder="Retype Password" type="password" class="form-control" id="exampleInputPasswordc" required>
  </div>

  <button style="display:block;width:30%;margin:auto;" type="submit" class="btn btn-primary text-center">Submit</button>
</form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
        <form method="post" action="logIn.php">
        <input type="hidden" name="logInfo" value="Login">
  <div class="form-group">
    <label for="exampleInputEmail3">Enter your  username</label>
    <input name="username" placeholder="Enter your username" type="text" class="form-control" id="exampleInputEmail3" aria-describedby="emailHelp" required>

  </div>
  <div class="form-group">
    <label for="exampleInputPassword3">Enter your Password</label>
    <input name="password" placeholder="Enter your password" type="password" class="form-control" id="exampleInputPassword3" required>
  </div>


  <button style="display:block;width:30%;margin:auto;" type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<img style="width:5%;" src="images/logo.png" >
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" >

      <li class="nav-item active" style="display:flex;justify-content:center;align-items:center;">
        <a class="nav-link ml-3" href="#"><h4>Start Chatting<h4> <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <h1 style='color:white;' class='text-center mx-auto'>
    <?php
if (isset($_SESSION['username'])) {
    echo "Welcome " . $_SESSION['username'];
}
?>
</h1>

<div class="nav_buttons">
    <button type="button" class="btn btn-outline-light mx-2" data-toggle="modal" data-target="#exampleModal1">
 SignIn
</button>

<?php
if (!isset($_SESSION['username'])) {

    echo '<button type="button" class="btn btn-outline-light mx-2" data-toggle="modal" data-target="#exampleModal2">
    Login
    </button>';
} else {
    echo '<button type="button" class="btn btn-outline-light mx-2" data-toggle="modal" data-target="#exampleModal10">
  Logout
  </button>';
}
?>
</div>
  </div>
</nav>




