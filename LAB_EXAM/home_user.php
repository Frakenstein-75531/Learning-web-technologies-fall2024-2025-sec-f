<?php
    session_start();
    if(isset($_COOKIE['flag'])){
?>
<html>
    <head>
        <body>
            <form method="post" action="logincheck.php" enctype="">
                <fieldset>
                  
                    <table align="center">
                     <tr>
                            <td> <h1>Welcome Home! <?php echo $_SESSION['username']?></h1></td>
                        </tr>
                        <tr>
                            <td><a href="profile.php" >Profile </a></td>
                             
                        </tr>
                        <tr>
                            <td><a href="ChangePass.php" >Change Password </a></td>
                        
                        </tr>
                        
                        <tr>
                            <td><a href="logout.php" >Logout </a><td>
                   
                        </tr>
                           
                        
                    </table>
                   
                   
                    
                </fieldset>
            </form>
        </body>
    </head>

</html>
<?php
    }else{
        header('location: login.html'); 
    }
?>