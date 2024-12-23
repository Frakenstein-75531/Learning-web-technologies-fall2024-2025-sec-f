<?php

    function getConnection(){
        $con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
        return $con;
    }

    function login($username, $password){
        $con = getConnection();
        $sql = "select * from user where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count =  mysqli_num_rows($result);

        if($count ==1){
            return true;
        }else{
            return false;
        }
    }

    function addUser($username, $password, $email){
        $con = getConnection();
        $sql = "insert into user VALUES('', '{$username}', '{$password}', '{$email}')";        
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }

    function getUser($id){
        $con = getConnection();
        $sql = "select * from user where username='{$id}'" ;   
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
       

    }

    function getAllUser(){
        $con = getConnection();
        $sql = "select * from user " ;       
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }


    }

    function updateUser($username,$password,$email){
        $con = getConnection();
        $sql = "update user SET('', '{$username}', '{$password}', '{$email}') where ('{$username}') ";        
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }

    }

    function deleteUser($username){
        $con = getConnection();
        $sql = "delete from user where ('{username}') ";        
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }

    }
    addUser('asdad','asdfgh','rifat@gmail.com');
    
?>