<?php
        include_once('connect.php');

        session_start();
		
            $username =  $_POST['tel'];
            $password = $conn->real_escape_string( $_POST['pass']);
		
            $sql = "SELECT * FROM `user` WHERE `user_id` = '".$username."' AND `password` = '".$password."'";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
                 echo print_r($result);
                $row = $result->fetch_assoc();
                
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['Money'] = $row['Money'];
                $_SESSION['reward'] = $row['reward'];
                $_SESSION["a1"] = "1" ;
                
               
                if ( is_numeric($row['user_id']) ) {
                header('location:index.php');}
	else{  header('location:examples/dashboard.php');}
            }
            else{
                echo "<script>";
                echo "alert(\" Username and Password is invalid\");"; 
                echo "window.history.back()";
            echo "</script>";
              
            }            
            
    ?>
