<?php
    session_start();
    if(isset($_POST['login'])){
        $userid  =  trim($_REQUEST['userid']);
        $password  =  trim($_REQUEST['password']);
        $user_type  =  trim($_REQUEST['user_type']);

        if($userid == null || empty($password) ){
            echo "Null data found!";
        }else if ($_SESSION['user']['userid'] == $userid && $_SESSION['user']['password']==$password){

            setcookie('flag', 'true', time()+3600, '/');
            $_SESSION['userid'] = $userid;
            if ($_SESSION['user_type'] == 'ADMIN') {
             
                header('Location: home_admin.php');
               
            }else{
                
                header('Location: home_user.php');
               
            }
        }
        else{
            
            echo "Invalid user";
        }
    }else{
       
        header('location: login.html');
    }
?>