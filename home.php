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
  </head>

  <body>
  <?php 
  session_start();
  if(!isset($_POST['username'])){
   header("Location:index.php");    
  }
  $_SESSION['username'] = $_POST['username'];

  ?>
  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">  
          <form class="navbar-form navbar-right" action="signout.php">
            <button type="submit" class="btn btn-danger">Sign Out</button>
          </form> 
      </div>
    </nav>
    <div class="jumbotron">
      <div class="container text-center">
        <h1>Hare Krishna! <?php echo $_POST['username'];?></h1>
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
  </body>
</html>
