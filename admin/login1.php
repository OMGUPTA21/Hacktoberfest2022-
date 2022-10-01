<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
body {
  background-image: url("study.jpg");
  background-repeat: no-repeat, repeat;//css done will be done
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
</style>

<body>
  <h1>TECHNO HUB WORKSPACE</h1>//title of workspace
    <div class="container form">
     <form  action="view.php" method="POST" >
     <center><img src="edu.jpg"style="height:100px;"></center>
     <br>
            <select name="category" id="category">
                <option value="chose">option</option>
                <option value="1">ADMIN</option>//login by all authority
                <option value="2">Teacher</option>
                <option value="3">Student</option>
            </select>
            <input type="email"  name="user" id="user" placeholder="Enter your  Username :">
            <input type="password" name="pass" id="pass" placeholder="Enter your  Password :">
            <button type="submit" value="signup">LOGIN</button>
            
        </form>
      </div>
   

</body>
</html>
