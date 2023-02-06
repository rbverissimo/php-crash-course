<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Functions in PHP</title>
</head>
<body>
      

<?php 
      # no parameters
      function sayHi(){
            echo "Hello, User<br>";
} 
      sayHi();


      #one parameter
      function yourAge($age){
            echo "My age is $age";
      }

      yourAge(4);

      #two parameters
      function combineNameAge($name, $age){
            echo "My name is $name I'm $age";
      }

      combineNameAge("Renato", 31);

      # returning a value
      function cube($num){
            return $num * $num * $num;
      }

      echo $cubeResult = cube(4);


?>

</body>
</html>