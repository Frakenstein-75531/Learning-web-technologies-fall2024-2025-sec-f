<?php
  
    if(isset($_POST['submit'])){
       if(isset($_POST['username'])
       
        $user_name  =  $_POST['username'];
       
        if($username == null){
            echo "Null data found!";
        }else if (strlen($username)>=2){
          echo" {$user_name}";
        }else{
            echo "Invalid user";
        }
       }
    }
   
?>