<?php   
session_start(); //to recall you are using same session
session_destroy(); //destroy the session of service
header("location:login1.php"); //to redirect back to "index.php" after logging out from the portal
exit();
?>
