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
$email = $_POST["email"];
$password = $_POST["password"];

$user = mysqli_query($conn, "SELECT * FROM user_list WHERE email = '$email'");

if(mysqli_num_rows($user)>0){
  $row = mysqli_fetch_assoc($user);
  if($password == $row["password"]){
    echo "Login Successful";
  }
  else{
    echo "Wrong Password";
    exit;
  }
}

}
/*session_start();

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS, post, get');

if($_SERVER['REQUEST_METHOD']==='POST'){
$mongo = new MongoDB\Client('mongodb+srv://vighnesh:<24032023>@cluster0.ivmwmch.mongodb.net/?retryWrites=true&w=majority');
$phone = $_POST["phone"];
$dob = $_POST["dob"];
$age = $_POST["age"];

if(empty($phone) || empty($dob) || empty($age)){
  echo "Please fill the form completely!";
  exit;
}

$result = $profiles->insertOne([
    'phone' => $phone,
    'dob' => $dob,
    'age' => $age
]);
echo "Updated";
}*/
?>