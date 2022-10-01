<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNUP/LOGINPAGE</title>
</head>

<style>
body {
  background-image: url("study.jpg");
  background-repeat: no-repeat, repeat;
  background-size: cover;
}
h1{
  color:green;
  text-align:center;
  text-shadow: 2px 2px black;
}
#user{
  width: 100%;
  padding: 10px 15px;
  margin: 8px 0;
  display: block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  border-radius: 50px;
  font-size: 14px;
  font-weight: 400;
  -moz-font-smoothing:grayscale;
  -webkit-font-smoothing:antialiased;
}
.container{
  position: absolute;
     top: 50%;
     left: 50%;
     background: #fff;
     width: 400px;
     border-radius: 20px;
     margin: -140px 0 0 -182px;
     padding: 40px;
     box-shadow: 0 0 3px rgba(0,0,0,0.6);
}
input[type=password], select {
  outline: none;
     display: block;
     width: 100%;
     margin: 0 0 20px;
     padding: 10px 15px;
     border: 1px solid #ccc;
     color: #ccc;
     box-sizing: border-box;
     border-radius: 50px;
     font-size: 14px;
     font-weight: 400;
    -moz-font-smoothing:grayscale;
    -webkit-font-smoothing:antialiased;
}
.form{
    position: absolute;
     top: 50%;
     left: 50%;
     background: #fff;
     width: 400px;
     border-radius: 20px;
     margin: -140px 0 0 -182px;
     padding: 40px;
     box-shadow: 0 0 3px rgba(0,0,0,0.6);
}

input[type=submit] {
  color:1px solid #ccc;
    outline: none;
    display: block;
    width: 100%;
    margin: 0 0 20px;
    padding: 10px 15px;
    background-color: #45a049;
}

input[type=submit]:hover {
  color:1px solid #ccc;
    outline: none;
    display: block;
    width: 100%;
    margin: 0 0 20px;
    padding: 10px 15px;
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
.lbtn{
  float: right;
}
h2{
  color:red;
}
</style>

<body>
  <h1>TECHNO HUB WORKSPACE</h1>
    <div class="container form" >
     <form id="register" method="POST"  >
     <center><img src="edu.jpg"style="height:100px;"></center>
     <br>
         
            <select name="category" id="category">
                <option value="chose">option</option>
                <option value="1">ADMIN</option>
                <option value="2">Teacher</option>
                <option value="3">Student</option>
            </select>
            <input type="email"  name="user" id="user" placeholder="Enter your  Username :">
            <input type="password" name="pass" id="pass" placeholder="Enter your  Password :">
            <input type="password" name="cpass" id="cpass" placeholder="Enter your confirm Password :"> 
            <button type="submit" value="signup">SIGNUP</button>
            <button type='button' class="lbtn"><a href="login1.php" target="_blank">LOGIN</a></button>
        </form>
      </div>
   
                
    <?php
    //For admin page
             if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                $user = $_POST['user'];
                $apassword = $_POST['pass'];
                $cpassword = $_POST['cpass'];
                $cat=$_POST['category'];
               
               
                
           
              
              // Connecting to the Database
              $servername = "localhost";
              $username = "root";
              $password = "";
              $database = "login123";

        
              // Create a connection
           $conn = mysqli_connect($servername, $username, $password, $database);
         if($conn){
           echo "done!";
         } 
         /*else{
           echo "no";
         }*/
           
               
       if($cat == 1){
            if($apassword == $cpassword){
               
              
                   // Submit these to a database
              // Sql query to be executed 
              
              $sql_e = "SELECT `user` FROM `admin`  WHERE user='$user'";
              $res_e = mysqli_query($conn, $sql_e);
              if(mysqli_num_rows($res_e) > 0){
                echo "<h1> Sorry... email already taken .</h1>"; 	
              }
              else{
              
              $sql = "INSERT INTO `admin` ( `user`, `pass`, `cpass`) VALUES ('$user', '$apassword', '$cpassword');";
              $result = mysqli_query($conn, $sql);
              if($result){
                echo "<center><h2>...Profile Created!...</h2></center>";
}  
              else{
                 echo "<h2> PASSWORD NOT MATCH SORRY! </h2>";
              }
              
             
            }
          }
          
 
       }//for teacher login
      elseif($cat == 2){
        if($apassword == $cpassword){
           
          
               // Submit these to a database
          // Sql query to be executed 
          
          $sql_e = "SELECT `user` FROM `teacher`  WHERE user='$user'";
          $res_e = mysqli_query($conn, $sql_e);
          if(mysqli_num_rows($res_e) > 0){
            echo "<h1> Sorry... email already taken .</h1>"; 	
          }
          else{
          
          $sql = "INSERT INTO `teacher` ( `user`, `pass`, `cpass`) VALUES ('$user', '$apassword', '$cpassword');";
          $result = mysqli_query($conn, $sql);
          if($result){
            echo "<center><h2>...Profile Created!</h2>...</center>";
            
          }  
          else{
             echo "<h2> PASSWORD NOT MATCH SORRY! </h2>";
          }
          
         
        }
      }
      

   }
   elseif($cat == 3){//for student
    if($apassword == $cpassword){
       
      
           // Submit these to a database
      // Sql query to be executed 
      
      $sql_e = "SELECT `user` FROM `student`  WHERE user='$user'";
      $res_e = mysqli_query($conn, $sql_e);
      if(mysqli_num_rows($res_e) > 0){
        echo "<h1> Sorry... email already taken .</h1>"; 	
      }
      else{
      
      $sql = "INSERT INTO `student` ( `user`, `pass`, `cpass`) VALUES ('$user', '$apassword', '$cpassword');";
      $result = mysqli_query($conn, $sql);
      if($result){
        echo "<center><h2>...Profile Created!...</h2></center>";
        
      }  
      else{
         echo "<h2> PASSWORD NOT MATCH SORRY! </h2>";
      }
      
     
    }
  }
  

}

  }
    ?>
</body>
</html>
