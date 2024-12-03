<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
   $username = htmlspecialchars($_POST['username']);
   $password = htmlspecialchars($_POST['password']);
}

$host = "localhost";
$db_username = "root";
$db_password = "";
$database = "user_systems";

$conn = new mysqli($host, $db_username, $db_password, $database);

$sql = "SELECT * FROM users
      WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
   header('Location: view_users.php');
   exit();
} else{
   echo "<script>
   alert('Username or password is incorrect. Please try again');
   window.location.href = 'login.php'; 
   </script>";
}

mysqli_close($conn);
?>