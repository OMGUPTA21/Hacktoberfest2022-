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
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!--Get your own code at fontawesome.com-->
    <link rel="stylesheet" type="text/css" href="service.css">
    <title>Document</title>
</head>
<style>
body{
  background-image: url("study.jpg");
  background-repeat: no-repeat, repeat;
  background-size: cover;
}
h1{
color:red;
text-align:center;
}
nav a{
  float: right;
 
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
  h3{
    color:red;
  }
</style>
<body>
<nav>
<a href="Logout.php">LOGOUT</a>
</nav>
<h3 class="welcome typing-demo"><b>WELCOME</b> <?php echo $_SESSION["user"]?></h3>
<center><img src="edu.jpg"style="height:100px;"></center>
    <h1>WELCOME TO ADMIN PORTAL OF TECHNO HUB WORKSPACE</h1>
<br>
<br>
<div class="container">
&nbsp&nbsp&nbsp

        
<main class="grid">

    <article>
        <img src="" alt="">
        <div class="text">
            <h3>TEACHER VIEW/EDIT</h3>
            <p></p>
            <button onclick="window.location.href='../teacher/teacherve.php'">Click</button>
        </div>
    </article>

    <article>
        <img src="" alt="">
        <div class="text">
            <h3>STUDENT VIEW/EDIT</h3>
            <p></p>
            <button onclick="window.location.href='../student/studentve.php'">Click</button>
        </div>
    </article>

    <article>
        <img src="" alt="">
        <div class="text">
            <h3>COMPLAIN FORM</h3>
            <p></p>
            <button onclick="window.location.href='complain.php'" target="_blank">Click</button>
        </div>
    </article>
</main>
</div>

</body>
</html>