<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Basic Calculator</title>
</head>
<body>
  <form action="BasicCalculator.php" method="get">
    <input type="number" name="num1" placeholder="The First Number">
    <input type="text" name="operation" placeholder="The Operations">
    <input type="number" name="num2" placeholder="The Second Number">
    <input type="submit">
  </form>
  Answer: 
  <?php 
    echo $_GET["num1"].$_GET["operation"].$_GET["num2"]." is ";
    if (strtolower($_GET["operation"]) == "+") {
      echo $_GET["num1"] + $_GET["num2"];
    } elseif (strtolower($_GET["operation"]) == "-") {
      echo $_GET["num1"] - $_GET["num2"];
    } elseif (strtolower($_GET["operation"]) == "/") {
      echo $_GET["num1"] / $_GET["num2"];
    } elseif (strtolower($_GET["operation"]) == "*" or strtolower($_GET["operation"]) == "x") {
      echo $_GET["num1"] * $_GET["num2"];
    }
  ?>
</body>
</html>