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
           Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
           Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
           Oranges <input type="checkbox" name="fruits[]" value="oragens"><br>
           Strawberry: <input type="checkbox" name="fruits[]" value="Strawberry"><br>
           <input type="submit">
     
     </form>
     <br>
     <?php 

      $fruits = $_POST["fruits"];
      echo $fruits[0];
      echo "<br>";
      echo "Number of fruits:";
      echo count($fruits); 

     ?> 
</body>
</html>