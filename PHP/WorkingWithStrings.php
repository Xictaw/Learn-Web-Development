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
    $phrase = "Girrafe Academy";
    echo "The String value is $phrase <br>";
    echo "The length of the string is ".strlen($phrase)."<br>";
    echo "The fifth letter of the string value is $phrase[4] <br>";
    echo "The letter of the string from the offset 8 and then 3 infront is ".substr($phrase, 8, 3)."<br>";
    echo "The string if girrafe is replaced to Panda is ".str_replace("Girrafe", "Panda", $phrase);
  ?>

</body>
</html>