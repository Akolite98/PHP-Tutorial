<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical</title>
</head>
<body>
    
    <?php

    $a = 4;
    $b = 4;

    if($a > $b){

        echo "a is larger than b";
    }
    elseif($a < $b){

        echo "a is smaller than b";
    }
    else{

    echo "a is equal to b";
    };
    
    
    ?>

<br>

<?php //for new users
  $new_user = true;

  if($new_user){

    echo "<h1>welcome!</h1>";
    echo "<p>we are glad you decided to join us.</p>";


  }
  
  

?>
</b>

<?php // you don't divide by zero

$numerator = 20;
$denominator = 4;
$result = 0;

if($denominator>0){

    $result = $numerator / $denominator;
  
};
echo "Result: {$result}";
?>
</body>
</html>