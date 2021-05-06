<?php 
include_once('connect.php');
$user_id =  $_POST['tel'];
$password =  $_POST['pass'];
$sql = "INSERT INTO `user` (`user_id`, `password`, `reward`, `Money`) VALUES ('".$user_id."','".$password."', '0' ,'0' )";
$result = $conn->query($sql);
     echo "<script>";
     echo "alert(\" Register Success\");"; 
     echo "location.replace('login1.php');";
     echo "</script>";     
?>