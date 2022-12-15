<?php 
include "connection.php";
if (isset($_POST['register'])) {
	global $conn;
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$query = mysqli_query($conn, "SELECT * FROM `users` WHERE `email` = '$email' LIMIT 1");
	$profile = mysqli_fetch_array($query);
    if (!empty($profile)) {
        echo "<h1>Email already excists!</h1><a href='index.php'>Go to main page</a>";
    } else {
        $registration = mysqli_query($conn, "INSERT INTO `users` VALUES (NULL, '$name', '$email', '$pass')");
        setcookie("email", "$email");  
        header("Location: main.php");  
    }
}


if (isset($_POST['sign'])) {
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$query = mysqli_query($conn, "SELECT * FROM users WHERE email='".$email."' AND password='".$pass."'");
    $check_email=mysqli_fetch_array($query);
    if (empty($check_email)) {
        echo "Incorrect pass or email!";
    } else {
        setcookie("email", "$email");  
        header("Location: main.php");      
    }
}

function check() {
    if (isset($_COOKIE["email"]))
       return true;
    else
        return false;
}
 ?>