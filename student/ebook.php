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
  color:red;
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

</style>
<body>
<nav>
<a href="dashboard.php">BACK</a>
</nav>

 <br>
    <div class="container">
    <br>
    <br>
    <center><a href="#"><i class='fas fa-chalkboard-teacher' style='font-size:100px;color:blue'></i></a></center>
    <h2>EBOOK AND PDF OF BRANDED BOOK</h2>
   
<?php
include("ebookdis.php");
?>
</div>
</body>
</html>