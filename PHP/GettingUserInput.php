<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
  <form action="GettingUserInput.php" method="get">
    Name : <br> <input type="text" name="name" placeholder="Your Name">
    <br>
    Age : <br> <input type="number" name="age" placeholder="Your Age">
    <br>
    <input type="submit">
  </form>
  <br>
  Your name is <?php echo $_GET["name"]; echo " and you are "; echo $_GET["age"]; echo " years old"?>
</body>
</html>