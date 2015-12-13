<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Hare Krishna</title>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="sweetalert.css">
    <script src="jquery.min.js"></script>
    <script src="sweetalert-dev.js"></script>
  </head>

  <body>
  <?php 
    session_start();
    if(isset($_SESSION['username'])){
      header("Location:home.php?username=".$_SESSION['username']);
    }
    if(isset($_GET['status'])){
      echo "<script>sweetAlert('Hari Bol!','Created successfully', 'success');</script>";
    } 
  ?>
     <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container"> 
          <a class="navbar-brand" >New Users?</a>
          <form class="navbar-form navbar-left" action="signup.php">
            <button type="submit" class="btn btn-primary">Sign up</button>
          </form>
          <form class="navbar-form navbar-right" onsubmit="return validateForm(this)" action="home.php" method="POST">
            <input type="text" id="username"  name="username" placeholder="Username" class="form-control">
            <input type="password" id="password" name="password" placeholder="Password" class="form-control">
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
      </div>
    </nav>
    <div class="jumbotron">
      <div class="container text-center">
        <h1>Hare Krishna!</h1>
      </div>
    </div> 
     <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-6">
          <img class="text-center img-responsive" title="What is ISKCON?" src="chaitanyamahaprabhu.jpg" alt="Lord Sri Chaitanya Mahaprabhu">
        </div>
        <div class="col-md-6">
          <p>The International Society for Krishna Consciousness (ISKCON), otherwise known as the Hare Krishna movement, includes five hundred major centers, temples and rural communities, nearly one hundred affilated vegetarian restaurants, thousands of <em>namahattas </em>or local meeting groups, a wide variety of community projects, and millions of congregational members worldwide. Although less than fifty years on the global stage, ISKCON has expanded widely since its founding by His Divine Grace A. C. Bhaktivedanta Swami Prabhupāda in New York City in 1966.</p>
          </p>
        </div>
      </div> 
    </div>
    <hr>
    <footer>
        <p class="text-center">&copy; 2015 Transenigma.</p>
    </footer>
     <script type="text/javascript">
    function validateForm (form) {
      var a = $("#username").val();
      var b = $("#password").val();
      $.ajax({
        method: "POST",
        url: "check.php",
        data: { username:a,password:b }
      }).done(function( msg ) {         
         if(msg.trim().length==0){
             form.submit();
         }         
         else{
          sweetAlert("Oops...",msg, "error");            
         }
      });
      return false;
    }</script>
  </body>
</html>
