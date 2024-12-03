<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>
   <style>
      body{         
         margin: 0; padding: 0;
         display: flex;
         flex-direction: column;
         justify-content: center;
         background-image: url("background_image.jpg");
         background-size: cover;
      }
      #container{
         display: flex;
         flex-direction: column;
         justify-content: center;
         align-items: center;
         margin: 3px; padding: 0;
         width: 50%;
         height: 100vh;
         background-color: rgb(100, 100, 100, 0.3);
         backdrop-filter: blur(10px); 
         border-radius: 0 15px 15px 0;
      }
      form{
         color: #E5E1DA;
         padding: 5px;
         width: 95%;
         display: flex;
         flex-direction: column;
         align-items: center;
         background-color: rgb(40, 40, 40, 0.5);
         border-radius: 5px;

         input{
            text-align: center;
            border: none;
            border-radius: 5px;
            background-color: #F1F0E8;
            color: black;
            font-size: 1em;
         }
         input:focus {
            outline: none;
         }
      }
      .buttons {
         background-color: #35553b;
         color: #E5E1DA;
         width: 70px;
         padding: 5px;
      }
   </style>
</head>
<body>
   <div id="container">
      <form action="process_registration.php" method="post">
         <h2>Register</h2>
         <label for="">Username: </label>
         <input type="text" name="username" required> <br>
         <label for="">Password: </label>
         <input type="password" name="password" required> <br>
         <label for="">Year: </label>
         <input type="text" name="year" placeholder="1st, 2nd, 3rd, 4th year"> <br>
         <label for="">Course: </label>
         <input type="text" name="course" required> <br>
         <label for="">Program: </label>
         <input type="text" name="program" required> <br>
         <input class="buttons" type="submit" name="register" value="Register">
      </form>
      <hr>
      <form action="login.php" method="post">
         <input class="buttons" type="submit" name="login" value="Log in">
      </form>
   </div>
</body>
</html>