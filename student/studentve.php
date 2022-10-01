<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style20.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

</style>
<body>
<nav>
    <a href="../admin/dashboard.php">BACK</a>
</nav>

<center><img src="edu.jpg"style="height:100px;"></center>
    <h1>WELCOME TO ADMIN PORTAL OF TECHNO HUB WORKSPACE</h1>
    <div class="main-div">
        
        <center><h2 style="color:rgb(102, 178, 255);">VIEW TEACHER</h2></center>
     
        </form>
        
        <div class="center-div">
            <div class="table-responsive">
                <center>
                <table border="2"class="table table-light table-striped" style="width: 50%;">
                    <thead>
                        <tr>
                            <th style="color:green;">USER</th>
                            <th style="color:green;">PASSWORD</th>
                            <th style="color:green;">CONFIRM PASSWORD</th>
                            <th style="color:green;">DELETE</th>
                      
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                     
                            $connection = mysqli_connect("localhost","root","","login123");

                            
                             $selectquery = "SELECT * FROM student ";
                             $query = mysqli_query($connection,$selectquery);
                         
                             $number = mysqli_num_rows($query);

                            
                         
                             while($res = mysqli_fetch_array($query)){
                                
                         
                        ?>

                                 <tr>
                                    <td style="color:green;"><b><?php  echo $res['user'];?></b></td>
                                    <td style="color:green;"><?php  echo $res['pass'];?></td>
                                    <td style="color:green;"><?php  echo $res['cpass'];?></td>
                                    <td style="color:green;"><i class="fa fa-trash-o" style="font-size:24px;color:red"></i></td>
                          
                               </tr>  

                        <?php
                             }
                            

                        
                        ?>

                        
                    </tbody>
                </table>
                    </center>
            </div>

        </div>
    </div>

    
</body>
</html>