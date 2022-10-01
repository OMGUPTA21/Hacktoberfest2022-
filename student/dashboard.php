<?php
    session_start();
    
    

     // Connecting to the Database
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "login123";

        
  // Create a connection
  $conn = mysqli_connect($host, $user, $password, $database);
  
 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    
<!--Get your own code at fontawesome.com-->
    <title>Document</title>
</head>
<style>
body{
  background-image: url("study.jpg");
  background-repeat: no-repeat, repeat;
  background-size: cover;
}
h1{
color: green;
text-align:center;
}
p,h2{
  color:blue;
  text-shadow:1px 1px black;
  text-align:center;
}
nav a{
  float: right;
 
}
.welcome{
  float: left;
  color: red;
  text-shadow:2px 2px black;
}
.typing-demo {
    width: 22ch;
    animation: typing 4s steps(30), blink .5s step-end infinite alternate;
    animation-iteration-count: infinite;
    white-space: nowrap;
    overflow: hidden;
    border-right: 3px solid;
    font-family: monospace;
    font-size: 2em;
  }
  
  @keyframes typing {
    from {
      width: 0
    }
  }
      
  @keyframes blink {
    50% {
      border-color: transparent
    }
  }
</style>
<body>
<nav>
<a href="Logout.php">LOGOUT</a>
</nav>
    <h3 class="welcome typing-demo"><b>WELCOME </b> <?php echo $_SESSION["user"]?><b>portal</b></h3>
 <br>
    <div class="container">
    <br>
    <br>
    <center><a href="#"><i class='fas fa-chalkboard-teacher' style='font-size:100px;color:blue'></i></a></center>
    <h2>ENROLMENT FORM FOR UPCOMMING BACHE 2022-23 ...SOON RELEASED....</h2>
   
<?php
include("service.php");//service page
?>
</div>
</body>
</html>
