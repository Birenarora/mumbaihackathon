<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home-Road Safety</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">


  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/one-page-wonder.min.css" rel="stylesheet">
<style>
.a{
height:30%;
}
</style>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Road Safety</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
		  
          <li class="nav-item">
            <a class="nav-link" href="cards1.php">Recents</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="complaint.php">Complaints</a>
          </li>
		  
          <?php 
			session_start();
			if(!isset($_SESSION['user'])){
			echo '
			<li class="nav-item">
              <a class="nav-link" href="signup.php">Sign up</a>
            </li>
			
			<li class="nav-item">
              <a class="nav-link" href="login.php">Log in</a>
            </li>';
			
			
			}
			else{
				echo '<li class="nav-item">
              <a class="nav-link" href="#">'.$_SESSION['user'].'<span class="glyphicon glyphicon-user" style="color:black;"></span></a>
            </li>'
			
			;
			
			
			echo '<li class="nav-item dropdown dropleft">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown">
      your account
    </a>
    <div class="nav-item dropdown-menu">
	<a class="dropdown-item nav-link" href="#" style="color:black;">'.$_SESSION['user'].'</a>
            <hr>
      <a class="dropdown-item nav-link" href="#" style="color:black;">Edit My Profile</a>
      <a class="dropdown-item nav-link" href="Mysub.php" style="color:black;">My Submissions</a>
      <a class="dropdown-item-text nav-link" href="Logout.php" style="color:black;">Logout</a>
    </div>
  </li>';
			}
				?>
          
        </ul>
      </div>
    </div>
  </nav>


<header align='center'>

  <style>
  /* Make the image fully responsive */
  .carousel-inner{
    width: 100%;
    height:100%
  }
  .carousel-item {
  height: 65vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

  </style>
</head>

<br><br>
<br><br>
<div class="container" align='center'>

<div class="col-md-12">

<h3>The problem</h3>
<p>
Potholes can be more than a nuisance. They can be danger to vehicles. In India, there is an average of ten road defect for every hundred metres road
</p>
<h3>
What can I do?</h3>
<p>
Government officials have a duty to maintain the roads, but they can only fill a pothole if they know about it. If you want it repaired, you have to report it.
Road safety app fill that hole so all road users can have an easy way to report potholes and road defects wherever you find them. Road safety app contacts the right people to get the roads repaired. Officials are generally quick to responds – we know because you’ve told us. Report your pothole now.
</p>

</div>
</div>

<div class="container" align='center'>

<div class="col-md-12">

<h2>Potholes And Other Pavement Conditions</h2>
<p>
<ul>
  <li>Repair – to restore to safe condition after damage has occurred.  Used for localized problems such as potholes, areas of pavement deterioration, concrete faulting.  Typical repair methods include pothole filling, skin patching, partial depth patching/repair, full depth repair, or a single concrete panel repair.</li>
  <li>Rehabilitation – to restore to near original condition.  Used for distressed streets where the overall ride has degraded.  Typical methods used are asphalt overlay or multiple concrete panel replacement.</li>
  <li>Reconstruction – to comprehensively rebuild to a new condition with current criteria. Used to rebuild subgrade, roadway base, new roadway surface, roadway appurtenances, signalization, signage, marking, lighting, trees and plantings, and may also include replacement of utility lines located within the road right of way.</li>
</ul>
</p>
</div>
</div>



<div class="container" >
<div class="row">
 <div class="col-md-4">
   <div class="thumbnail">
     <a href="img/13.png">POTHOLE</a>
     
     <a href="img/13.png"><img src="img/13.png" alt="Lights" style="width:100%;height:250px"></a>
       <div class="caption">
       </div>

   </div>
 </div>


 <div class="col-md-4">
   <div class="thumbnail">
     <a href="img/13.png">FAULTING</a>
     <a href="img/16.png"><img src="img/16.png" alt="Lights" style="width:100%;height:250px"></a>
       <div class="caption">
       </div>
     </a>
   </div>
 </div>
 <div class="col-md-4">
   <div class="thumbnail">
     <a href="img/13.png">LOCALIZED PAVEMENT FAILURE</a>
     <a href="img/18.jpg"><img src="img/18.jpg" alt="Lights" style="width:100%;height:250px"></a>
       <div class="caption">
       </div>
     </a>
   </div>
 </div>
</div>
</div>


  <!-- Footer -->
  <footer class="py-5 bg-black">
    <div class="container">
      <p class="m-0 text-center text-white small">Copyright &copy;Road Safety app  2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
