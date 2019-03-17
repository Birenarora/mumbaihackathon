<?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "Roadsafety";

    $name = $email = $contact = $password = "";
    $received = NULL;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = clean_input($_POST["name"]);
        $email = clean_input($_POST["email"]);
        $contact = clean_input($_POST["contact"]);
        $pass = clean_input($_POST["password"]);


        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $stmt = $conn->prepare("INSERT INTO  Register (name, email,contact,password) VALUES (?,?,?,?)");
        $stmt->bind_param("ssds", $name, $email, $contact , $pass);
        $stmt->execute();
        $stmt->close();
        $conn->close();
        echo "<script > window.alert('Record Inserted Successfully'); </script>";
          header("location: http://localhost/project/maac%20Express/adminlogin.html");
    }

    function clean_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Road Safety</title>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">


  <style>



  .main-center{
  margin-top: 30px;
  margin: 0 auto;
  max-width: 330px;
  padding: 40px 40px;

  }
  .floating-form {
  width:320px;
  }

  /****  floating-Lable style start ****/
  .floating-label {
  position:relative;
  margin-bottom:20px;
  }
  .floating-input , .floating-select {
  font-size:14px;
  padding:4px 4px;
  display:block;
  width:100%;
  height:30px;
  background-color: transparent;
  border:none;
  border-bottom:1px solid #757575;
  }

  .floating-input:focus , .floating-select:focus {
   outline:none;
   border-bottom:2px solid #5264AE;
  }

  label {
  color:#999;
  font-size:14px;
  font-weight:normal;
  position:absolute;
  pointer-events:none;
  left:5px;
  top:5px;
  transition:0.2s ease all;
  -moz-transition:0.2s ease all;
  -webkit-transition:0.2s ease all;
  }

  .floating-input:focus ~ label, .floating-input:not(:placeholder-shown) ~ label {
  top:-18px;
  font-size:14px;
  color:#5264AE;
  }

  .floating-select:focus ~ label , .floating-select:not([value=""]):valid ~ label {
  top:-18px;
  font-size:14px;
  color:#5264AE;
  }

  /* active state */
  .floating-input:focus ~ .bar:before, .floating-input:focus ~ .bar:after, .floating-select:focus ~ .bar:before, .floating-select:focus ~ .bar:after {
  width:50%;
  }

  *, *:before, *:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  }

  .floating-textarea {
  min-height: 30px;
  max-height: 260px;
  overflow:hidden;
  overflow-x: hidden;
  }

  /* highlighter */
  .highlight {
  position:absolute;
  height:50%;
  width:100%;
  top:15%;
  left:0;
  pointer-events:none;
  opacity:0.5;
  }

  /* active state */
  .floating-input:focus ~ .highlight , .floating-select:focus ~ .highlight {
  -webkit-animation:inputHighlighter 0.3s ease;
  -moz-animation:inputHighlighter 0.3s ease;
  animation:inputHighlighter 0.3s ease;
  }

  /* animation */
  @-webkit-keyframes inputHighlighter {
  from { background:#5264AE; }
  to 	{ width:0; background:transparent; }
  }
  @-moz-keyframes inputHighlighter {
  from { background:#5264AE; }
  to 	{ width:0; background:transparent; }
  }
  @keyframes inputHighlighter {
  from { background:#5264AE; }
  to 	{ width:0; background:transparent; }
  }



  </style>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/one-page-wonder.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Road Safety</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contactus.html">contact us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sign Up</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="login.html">Log In</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>



  <section>
    <div class="container">
      <form name='book' method="post" action="adminregister.php"  onsubmit="return validation()">
<br><br><br><br><br>
     	<center>
     	<h2> REGISTER HERE </h2>
       <br><br>
       <div class="floating-form">
          <div class="floating-label">
            <input class="floating-input" type="text" name="name"placeholder=" ">
            <span class="highlight"></span>
            <label>Name </label>
          </div>
          <div class="floating-form">
             <div class="floating-label">
               <input class="floating-input" type="text" name="email"placeholder=" ">
               <span class="highlight"></span>
               <label>Email </label>
             </div>
          <div class="floating-form">
                <div class="floating-label">
                  <input class="floating-input" type="text" name="contact"placeholder=" ">
                  <span class="highlight"></span>
                  <label>contact </label>
                </div>

     	<div class="floating-label">
           <input class="floating-input" type="password" name="password" placeholder=" ">
           <span class="highlight"></span>
           <label>Password</label>
         </div>


     	<button type="submit" value="Login" class="btn btn-primary btn-lg">Register</button>
     <br>or<br>
    Already have an account? <a href="login.html">login</a>
     	</center>
     	</form>

      </div>
    </div>
  </section>
<br><br><br><br>

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
