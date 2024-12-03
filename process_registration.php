<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
   $username = htmlspecialchars($_POST['username']);
   $password = htmlspecialchars($_POST['password']);
   $year = htmlspecialchars($_POST['year']);
   $course = htmlspecialchars($_POST['course']);
   $program = htmlspecialchars($_POST['program']);

   echo "";
}

$host = "localhost";
$db_username = "root";
$db_password = "";
$database = "user_systems";

$conn = new mysqli($host, $db_username, $db_password, $database);

$sql = "SELECT * FROM users
      WHERE username = '$username'";

$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){
   echo "<script>
            alert('Username is already taken. Please choose a different username.');
            window.location.href = 'register.php'; 
            </script>";
   exit();
} else{

   $sql = "INSERT INTO users (username, password, year, course, program)
         VALUES ('$username', '$password', '$year', '$course', '$program')";

   if ($conn->query($sql) === TRUE) {
      echo "<script>
               alert('Registration successful');
               window.location.href='index.php';
            </script>";
   } else {
      echo "<script>
               alert('Registration failed');
               window.location.href='register.php';
               </script";
   }
}
mysqli_close($conn);

?>

