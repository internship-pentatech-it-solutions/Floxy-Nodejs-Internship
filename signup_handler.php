<?php
$dbHost = 'localhost';
$dbName = 'test';
$dbUser = 'root';
$dbPassword = '';

$dbCon = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);
if(!$dbCon){
    echo 'Connection failed';
} else{
    echo 'Connected successfully';
}


// GETTING USER DATA FROM THE FORM
$fullName = $_POST['fullName'];
$usrName = $_POST['userName'];
$usrEmail = $_POST['email'];
$usrPassword = $_POST['password'];
$phone = $_POST['phoneNumber'];

//HASHING USER PASSWORD
$usrPassword = password_hash($usrPassword, PASSWORD_DEFAULT);

// PASSWORD VALIDATION
if(!empty($_POST['password'])){
    if(strlen($_POST['password']) < 8){
        $passwordErr = 'Your password must contain at least 8 characters!';
        echo $passwordErr;
        exit;
    } elseif (!preg_match('#[0-9]+#', $usrPassword)){
        $passwordErr = 'Your password must contain at least one number!';
        echo $passwordErr;
        exit;
    } elseif (!preg_match('#[A-Z]+#', $usrPassword)){
        $passwordErr = 'Your password must contain at least one capital letter!';
        echo $passwordErr;
        exit;
    } elseif (!preg_match('#[a-z]+#', $usrPassword)){
        $passwordErr = 'Your password must contain at least one lowercase letter!';
        echo $passwordErr;
        exit;
    } elseif (!preg_match('#[\W]+#', $usrPassword)){
        $passwordErr = 'Your password must contain at least one special character!';
        echo $passwordErr;
        exit;
    }
} else $passwordErr = 'Please enter a password';

global $passwordErr;
if($passwordErr){
    exit;
}

// PREPARING QUERY
$stmt = $dbCon->prepare("INSERT INTO $dbName.users(fullName, userName, email,phoneNumber, userPass) VALUES(?, ?, ?, ?, ?)");
$stmt->bind_param('sssis', $fullName, $usrName, $usrEmail, $phone, $usrPassword);
$stmt->execute();
$stmt->close();
$dbCon->close();

// REDIRECT USER
header('Location: login.php');
