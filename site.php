<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>
      <?php include "header.html" ?>
      <?php 
            $title = "There are no power in those points!";
            $author = "Rajivi Ushakabi";
            $wordCount = 890; 
      
      include "article-header.php" ?>

      <?php include "useful-tools.php"; sayHi("Renato") ?>
     
     <form action="site.php" method="POST">
           Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
           Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
           Oranges <input type="checkbox" name="fruits[]" value="oragens"><br>
           Strawberry: <input type="checkbox" name="fruits[]" value="Strawberry"><br>
           <input type="submit">
      
      <?php include "footer.html" ?>
     
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