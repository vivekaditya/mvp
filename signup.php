<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="sweetalert.css">
    <script src="jquery.min.js"></script>
    <script src="sweetalert-dev.js"></script>

    <title>Hare Krishna - SignUp</title>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <form class="form-signin" action="insert.php" onSubmit="return validateForm(this)" method="POST">
        <h2 class="form-signin-heading text-center">Please sign up</h2>
        <label for="Username" class="sr-only">Username</label>
        <input type="Username" name="username" id="Username" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="Password" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
      </form>
    </div> 
    <script type="text/javascript">
    function validateForm (form) {
      var result=false;
      var a = $("#Username").val();
      $.ajax({
        method: "GET",
        url: "search.php",
        data: { username:a }
      }).success(function( msg ) {   
          if (msg.trim()==="yes") {
            form.submit();     
          }
          else{
            sweetAlert("Oops...","Username already exist", "error");            
            console.log(msg);
          }
      });
      return result;
    }</script>
  </body>
</html>
