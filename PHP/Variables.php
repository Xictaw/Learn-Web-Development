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
    $characterName = "Tom";
    $characterAge = 80;
    //Those both on top are variables
    echo "There was once a man named $characterName <br>";
    echo "He was $characterAge years old <br>";
    //You can change the variables like below
    $characterName = "Mike";
    $characterAge = "35";
    //It will only change the text that uses the variables below it
    echo "He really liked the name $characterName <br>";
    echo "But didn't like being $characterAge <br>";
  ?>

</body>
</html>