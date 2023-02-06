<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Forms Site</title>
</head>
<body>
      <!-- This is a simple associative exercise on how to use key:value pairs -->

      <form action="forms-site.php" method="post">
            Type the name of the student to get its grade 
            <input type="text" name="student">
            <input type="submit" value="Ok">

      </form>
            

      <?php $students_grades = array("John"=>"A+", "Maria"=>"B-", 
                                          "Gilad"=>"B+", "Mike"=>"C+", "Jane"=>"A+" );
      
      echo "The student grade is: <br>"; 
      echo $students_grades[$_POST["student"]]; 
      
      ?>
</body>
</html>