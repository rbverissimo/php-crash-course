<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>
     
     <form action="site.php" method="POST">
      Name: <input type="text" name="username">
      Password: <input type="password" name="password">
      <input type="submit">
      
     </form>
     <br>
     <?php echo $_POST["username"]; echo "<br>"; echo $_POST["password"] ?> 
</body>
</html>