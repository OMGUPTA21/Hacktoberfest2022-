<style>
    h1{
  color:green;
  text-align:center;
  text-shadow: 2px 2px black;
}
body {
  background-image: url("study.jpg");
  background-repeat: no-repeat, repeat;
  background-size: cover;
}
</style>  
        
<?php
    session_start();
    
    

     // Connecting to the Database
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "login123";

        
  // Create a connection
  $conn = mysqli_connect($host, $user, $password, $database);

  $username = $_POST['user'];
  $password = $_POST['pass'];
  $cat=$_POST['category'];
          
          
  //to prevent from mysqli injection  
  $username = stripcslashes($username);  
  $password = stripcslashes($password);  
  $username = mysqli_real_escape_string($conn, $username);  
  $password = mysqli_real_escape_string($conn, $password);  
   if($conn){
     // echo "<h1>done!</h1>";
    } 
   /*else{
       echo "no";
        }*/
        
        if($cat==1){
          $sql = "select *from admin where user= '$username' and pass = '$password'";  
          $result = mysqli_query($conn, $sql);  
          $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
          $count = mysqli_num_rows($result);  
  
          $sql_e = "SELECT user FROM `admin` WHERE user='$username'";
          $res_e = mysqli_query($conn, $sql_e);
           
          
            if($count == 1){  
           
             
              session_start();
              $_SESSION["user"]=$username;
              $_SESSION["pass"]=$password;

              header("location:admin/dashboard.php"); 
              
          } 
          
          else{
          if(mysqli_num_rows($res_e) == 0){
                  echo "<h1> SOORY... ACCOUNT NOT EXIT PLEASE CREATE IT! .</h1>"; 	
                } 
          else{  
              echo "<h1> Login failed. Invalid username or password.</h1>";  
          
                 
          
          }   
      }  
      
    }
      
      if($cat==2){
        $sql = "select *from teacher where user= '$username' and pass = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  

        $sql_e = "SELECT user FROM `teacher` WHERE user='$username'";
        $res_e = mysqli_query($conn, $sql_e);
          
        if($count == 1){  
           
           
            session_start();
            $_SESSION["user"]=$username;
            $_SESSION["pass"]=$password;
           
            header("location:teacher/dashboard.php"); 
            
        } 
        
        else{
        if(mysqli_num_rows($res_e) == 0){
                echo "<h1> SOORY... ACCOUNT NOT EXIT PLEASE CREATE IT! .</h1>"; 	
              } 
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        
               
        
        }   
    }  
    }  
  
    if($cat==3){
        $sql = "select *from student where user= '$username' and pass = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  

        $sql_e = "SELECT user FROM `student` WHERE user='$username'";
        $res_e = mysqli_query($conn, $sql_e);
          
        if($count == 1){  
          
          
            session_start();
            $_SESSION["user"]=$username;
            $_SESSION["pass"]=$password;
         
            header("location:student/dashboard.php"); 
            
        } 
        
        else{
        if(mysqli_num_rows($res_e) == 0){
                echo "<h1> SOORY... ACCOUNT NOT EXIT PLEASE CREATE IT! .</h1>"; 	
              } 
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        
               
        
        }   
    }  
    } 

   /* else{
      header("location:login1.php");
    }
*/
    ?>