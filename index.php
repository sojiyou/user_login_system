<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>User Input System</title>
   <style>
      html, body{
         padding: 0; margin: 0;
         background-image: url("background_image.jpg");
         background-size: cover;
         background-repeat: no-repeat;
         display: grid;
         place-items: center; 
         min-width: 518px;
         height: 100vh;
         color: #E2F1E7;
         width: 100%;
      }
      h1{
         padding-top: 2px;
         display: flex;
         justify-content: center;
         width: 100%;
         min-width: 518px;
         height: 30px;;
         margin: 0;
         position: absolute;
         top: 0;
         left: 50%;
         transform: translateX(-50%);
         background: rgba(70, 70, 70, 0.5); 
         backdrop-filter: blur(10px); 
      }
      #container{
         display: flex;
         align-items: center;
         justify-content: center;
         flex-direction: row;
         background: rgba(100, 100, 100, 0.3); 
         backdrop-filter: blur(10px); 
         border-radius: 40px;
         width: 200px;
         height: 180px;
         margin: 0 auto;
      }
      .submitBtns{
         cursor: pointer;
         background-color: transparent;
         display: flex;
         align-items: center;
         justify-content: center;
         flex-direction: column;
         font-size: 1.1em;
         padding: 10px;
         color: #E2F1E7;
         border: none;
         margin: 0 auto;
      }
      .submitBtns:hover{
         cursor: pointer;
         background: rgba(90, 90, 90, 0.3);
      }

   </style>
</head>
<body>
   <header>
      <h1>International State College of the Philippines</h1>
   </header>
   <div id="container">
      <form action="index.php" method="post">
         <input name="login" class="submitBtns" type="submit" value="Log in">
         <hr>
         <input name="register" class="submitBtns" type="submit" value="Register">
      </form>
   </div>
</body>
</html>

<?php
   if($_SERVER['REQUEST_METHOD'] == 'POST'){
      if(isset($_POST['login'])){
         header('Location: login.php');
         exit();
      }else if(isset($_POST['register'])){
         header('Location: register.php');
         exit();
      }
   }
?>