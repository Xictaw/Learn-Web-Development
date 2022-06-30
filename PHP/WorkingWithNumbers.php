<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
  
  <?php
    //PHP can do basic math like any other programming language
    $num = 10;
    echo "The number is $num <br>";
    echo "$num + 6 is ".$num += 6;
    echo "<br>";
    //Math functions that PHP can do
    echo "$num raised to the power of 3 is ".pow($num, 3)."<br>";
    echo "The Square root of $num is ".sqrt($num)."<br>";
    echo "The highest value from 16 to 4096 is ".max($num, 4096)."<br>";
    echo "The smallest value from 16 to 4096 is ".min($num, 4096)."<br>";
    //"round(float)" is a function to ALWAYS round a float according to general rounding rules
    //"ceil(float)" is a function to ALWAYS round a float up
    //"floor(float)" is a function to ALWAYS round a float down
  ?>

</body>
</html>