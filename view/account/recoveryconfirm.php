<?php
include "../../model/userHandler.php";

if(isset($_REQUEST['schoolnumber'])){
    $schoolnumber = $_REQUEST['schoolnumber'];
}

if(isset($_REQUEST['newpassword'])){
    $password = $_REQUEST['newpassword'];
    $password = trim($password);
}

if(isset($_REQUEST['passwordconfirm'])){
    $passwordcfrm = $_REQUEST['passwordconfirm'];
    $passwordcfrm = trim($passwordcfrm);     
}

if($password = $passwordcfrm){
    $checkedpw = $password;
    $pwhash = password_hash($checkedpw,PASSWORD_DEFAULT);
}else{
    exit("wachtwoorden komen niet overeen");
}

$user = new userHandler;

$sql = "UPDATE users SET password='$pwhash' WHERE schoolnumber='$schoolnumber'";

$user->editUser($sql, $pwhash, $schoolnumber);

header("Location: ./login.php");