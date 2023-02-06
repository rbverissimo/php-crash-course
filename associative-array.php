<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Associative Array</title>
</head>
<body>


<?php 
      $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+");
      #the key value must be unique; 
      echo $grades["Jim"];
      $grades["Jim"] = "F"; # changes the value associated to the key
?>
      
</body>
</html>