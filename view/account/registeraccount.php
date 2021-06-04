<?php
include "../../model/userHandler.php";

if(isset($_REQUEST['schoolnumber'])){
    $schoolnumber = $_REQUEST['schoolnumber'];
}

if(isset($_REQUEST['firstname'])){
    $firstname = $_REQUEST['firstname'];
}

if(isset($_REQUEST['lastname'])){
    $lastname = $_REQUEST['lastname'];
}

if(isset($_REQUEST['email'])){
    $email = $_REQUEST['email'];
}

if(isset($_REQUEST['password'])){
    $password = $_REQUEST['password'];
    $password = trim($password);
}

if(isset($_REQUEST['passwordconfirm'])){
    $passwordcfrm = $_REQUEST['passwordconfirm'];
    $passwordcfrm = trim($passwordcfrm);     
}

if($password = $passwordcfrm){
    $checkedpw= $password;
    $pwhash= password_hash($checkedpw,PASSWORD_DEFAULT);
}else{
    exit("wachtwoorden komen niet overeen");
}

$user = new userHandler;

$sql = "INSERT INTO users (schoolNumber, firstName, lastName, email, password) values(?,?,?,?,?)";

$user->addUser($sql, $schoolnumber, $firstname, $lastname, $email, $pwhash);

header("Location: ./login.php");