<?php

if (function_exists('mysqli_connect')) {
} else {
  echo 'mysqli extension is not loaded';
}

session_start();

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS, post, get');
header("Access-Control-Max-Age","3600");

$db_host        = 'db4free.net';
$db_user        = 'vighnesh';
$db_pass        = '24032023';
$db_database    = 'samplevr_db';

global $conn;

$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_database);

if($_SERVER['REQUEST_METHOD']==='POST'){
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];

if(empty($name) || empty($email) || empty($password)){
  echo "Please fill the form completely!";
  exit;
}

$user = mysqli_query($conn, "SELECT * FROM user_list WHERE email = '$email'");
if(mysqli_num_rows($user)>0){
  echo "Username Already Exists..!";
  exit;
}

$query = "INSERT INTO user_list(name, email, password) VALUES('$name','$email','$password');";
mysqli_query($conn, $query);
echo "Registration Successful";
}

?>