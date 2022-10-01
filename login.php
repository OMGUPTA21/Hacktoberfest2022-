<?php
$category=$_POST['category'];
$user=$_POST['user'];
$password=$_POST['pass'];

if($category==1){
    header("location:admin/dashboard.php");
}
elseif($category==2){
    header("location:teacher/dashboard.php");
}
elseif($category==3){
   header("location:student/dashboard.php");
}
else{
    header("location:index.php");
}
?>

//If_else work great
