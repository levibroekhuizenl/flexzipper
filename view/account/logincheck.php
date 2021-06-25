<?php 
require "../../model/userHandler.php";

if(filter_var($_REQUEST['schoolnumber'])){
    if(isset($_REQUEST['schoolnumber'])){
        $schoolnumber = $_REQUEST['schoolnumber'];
        $user = new userHandler;
        if(isset($_REQUEST['password'])){
            $password = $_REQUEST['password'];   
            $sql = "SELECT * FROM `users` WHERE `schoolnumber`= ? ";
            $userData = $user->readUser($sql, $schoolnumber);
            if (!empty($userData)) {
                
                if (password_verify($password, $userData['password'])) {
                    session_start();
                    session_regenerate_id();
                   
                    $_SESSION['loggedin'] = TRUE;
                    // $_SESSION['firstname'] = $userData['firstname'];
                    $_SESSION['schoolnumber'] = $schoolnumber;
                    $_SESSION['user_id'] = $userData['user_id'];
                    echo 'Welcome ' . $_SESSION['firstname'] . '!';
                    if($userData['admin'] == 1){
                        $_SESSION['admin'] = TRUE;
                        header("location: ../../index.php");
                    }else{
                        header("location: ./portoform1.php");
                    }
                    
                } else {
                    // Incorrect password
                    echo 'Incorrect password!';
                }
            } else {
                // Incorrect email
                echo 'Incorrect leerlingnummer';
            }
        }
        
        
    }
}else{
    exit($_REQUEST['schoolnumber']." is geen geldig schoolnummer");
}




//password check
//email check
