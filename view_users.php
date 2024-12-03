<?php
   $host = "localhost";
   $db_username = "root";
   $db_password = "";
   $database = "user_systems";
   
   $conn = new mysqli($host, $db_username, $db_password, $database);
   
   $sql = "SELECT username, year, course, program FROM users";
   
   $result = mysqli_query($conn, $sql);

   mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>View Users</title>
   <style>
         html, body{
            padding: 0; margin: 0;
            background-image: url("background_image.jpg");
            background-size: cover;
            display: grid;
            place-items: center; 
            width: 100%;
            min-width: 518px;
            height: 100vh;
            color: #E2F1E7;
         }
         #container{
         padding: 20px;
         display: flex;
         align-items: center;
         justify-content: center;
         flex-direction: row;
         background: rgba(100, 100, 100, 0.3); 
         backdrop-filter: blur(10px); 
         border-radius: 40px;
         width: auto;
         height: 180px;
         margin: 0 auto;
      }
      table{
         width: 90%;
         border: 1px solid;
         text-align: center;
         tr, th, td {
            border: 1px solid;
         }
         td{
            padding: 5px;
         }
      }
      .titles {
            padding: 15px;
            font-size: 1.2em;
            background-color: #35553b;
         }
      form{
      color: #E5E1DA;
      padding: 5px;
      width: 95%;
      display: flex;
      flex-direction: column;
      align-items: center;
      border-radius: 5px;
      input{
         text-align: center;
         border: none;
         border-radius: 5px;
         color: black;
         font-size: 1em;
         background-color: none;
      }
   }
   </style>
</head>
<body>
   <div id="container">
      <table>
         <tr>
            <th class="titles">Username</th>
            <th class="titles">Year</th>
            <th class="titles">Course</th>
            <th class="titles">Program</th>
         </tr>
         <?php
            if ($result->num_rows > 0) {
               while ($row = $result->fetch_assoc()) {
                  echo "<tr>";
                  echo "<td>" . $row['username'] . "</td>";
                  echo "<td>" . $row['year'] . "</td>";
                  echo "<td>" . $row['course'] . "</td>";
                  echo "<td>" . $row['program'] . "</td>";
                  echo "</tr>";
               }
            } else {
               echo "<tr><td colspan='4'>No records found</td></tr>";
            }
         ?>
      </table>
      <form action="login.php" method="post">
         <input type="submit" name="logout" value="Log Out">
      </form>
   </div>

</body>
</html>