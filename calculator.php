<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Calculator</title>
</head>
<body>
      <form action="calculator.php" method="post">
            <!-- the step takes how many decimals of precision -->
            First number: <input type="number" step="0.01" name="num1" > <br>
            OP: <input type="text" name="op" > <br>
            Second number: <input type="number" name="num2" > <br>
            <input type="submit" value="Resultado">

      </form>

      <?php 
      $num1 = $_POST["num1"];
      $num2 = $_POST["num2"];
      $op = $_POST["op"];

      if($op == "+"){
            echo $num1 + $num2;
      } elseif($op == "-"){
            echo $num1 - $num2;
      } elseif($op == "x"){
            echo $num1 * $num2;
      } elseif($op == "/"){
            echo $num1 / $num2;
      } else echo "invalid operation :("
      


      ?>
      
</body>
</html>