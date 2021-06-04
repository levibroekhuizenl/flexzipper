<?php 
require "../../model/userHandler.php";

if(filter_var($_REQUEST['schoolnumber'], FILTER_VALIDATE_EMAIL)){
    if(isset($_REQUEST['schoolnumber'])){
        $schoolnumber = $_REQUEST['schoolnumber'];
        $user = new userHandler;
        if(isset($_REQUEST['password'])){
            $password = $_REQUEST['password'];   
            $sql = "SELECT * FROM `users` WHERE `schoolNumber`= ? ";
            $userData = $user->readUser($sql, $schoolnumber);
            if (!empty($userData)) {
                
                if (password_verify($password, $userData['password'])) {
                    session_start();
                    session_regenerate_id();
                   
                    $_SESSION['loggedin'] = TRUE;
                    $_SESSION['firstname'] = $userData['firstname'];
                    $_SESSION['schoolNumber'] = $schoolnumber;
                    $_SESSION['id'] = $userData['id'];
                    echo 'Welcome ' . $_SESSION['firstname'] . '!';
                    if($userData['admin'] == 1){
                        $_SESSION['admin'] = TRUE;
                        header("location: ../../index.php");
                    }else{
                        header("location: ../../index.php");
                    }
                    
                } else {
                    // Incorrect password
                    echo 'Incorrect password!';
                }
            } else {
                // Incorrect email
                echo 'Incorrect email';
            }
        }
        
        
    }
}else{
    // exit($_REQUEST['schoolnumber']." is geen geldig adress");
    $_SESSION['loggedin'] = TRUE;
    header("location: ../../index.php");
}




//password check
//email check
