<?php
// SETTING DATABASE CONNECTION
$host = 'localhost';
$name = 'test';
$user = 'root';
$passwrd = '';

$con = new mysqli($host, $user, $passwrd, $name);

// CHECKING IF THERE IS A CONNECTION
if($con){
    echo 'Connected successfully!';
} else {
    echo 'Connection failed';
}


// GETTING USER DATA FROM FORM
$username = $_POST['userName'];
$password = $_POST['password'];

//HASHING PASSWORD
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// PREPARING STATEMENT TO CHECK IF USER EXISTS
$stmt = $con->prepare("SELECT * FROM $name.users WHERE userName = ?");
$stmt->bind_param('s', $username);
$stmt->execute();
$results = $stmt->get_result();

if($results->num_rows > 0){
    $user = $results->fetch_assoc();

    if(password_verify($password, $user['userPass'])){
        session_start();
        $_SESSION['user'] =$user;
        header('Location: dashboard.php');
    } else {
        echo 'Invalid password';
    }
} else {
    echo 'User not found!';
}
