<?php
session_start(); 

if (isset($_POST['submit'])) {
  
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $confirm_pass = trim($_POST['confirm_pass']);
    $userid = trim($_POST['userid']);
    
    $user_type = isset($_POST['USER']) ? 'USER' : (isset($_POST['ADMIN']) ? 'ADMIN' : null);

    
    if (empty($username) || empty($password) || empty($confirm_pass) || empty($userid) || empty($user_type)) {
        echo "INVALID!";
    } else {
        
        if ($password !== $confirm_pass) {
            echo "Passwords do not match.";
        } else {
            $user = [
                'userid' => $userid,
                'password' => $password, 
                'username' => $username,
                'user_type' => $user_type
            ];
            
            $_SESSION['user'] = $user;

            header('Location: login.html'); 
            exit();
        }
    }
}
?>


<html>
    <head>
        <title>Registration</title>
        
    </head>
    <form method="post" action="registation.php" >
                <fieldset>
                    <legend><b>REGISTRATION</b></legend>
                    <table>
                        <tr>
                            <td>Id</td>
                            
                        </tr>
                           
                        <tr>   
                            <td><input type="text" name="userid" value="" />  </td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            
                        </tr>
                        <tr> 
                            <td> <input type="password" name="password" value="" /></td>    
                        </tr>
                        <tr>
                            <td>Confirm Password</td>
                            
                        </tr>
                             <td><input type="password" name="confirm_pass" value="" /></td>
                        <tr>     
                        </tr>
                        <tr>
                            <td>Name</td>
                            
                        </tr>
                        <tr>   
                            <td><input type="text" name="username" value="" /> </td> 
                        </tr>
                        <tr>
                            <td>User Type</td>
                            
                        </tr>

                        <tr>    
                            </hr> 
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" name="USER" value="" /> User
                                <input type="radio" name="ADMIN" value="" /> Admin
                               
                            </td>
                        </tr>
                        <tr>
                            
                            <td><hr></td>
                        </tr>
                        </tr>
                                
                    
                        <td>  <input type="submit" name="submit" value="Submit" /></td>
                        </tr>
                    </table>
                   
                   
                    
                </fieldset>
            </form>
</html>    