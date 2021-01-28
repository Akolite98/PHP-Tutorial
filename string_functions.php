<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String functions</title>
</head>
<body>
<?php

$first = "The quick brown fox";
$second = "jumped over the lazy dog.";

$third = $first . ' ' . $second;
// $third .=$second;

echo $third




?>

<br/>

lowercase : <?php echo strtolower($third); ?><br>
uppercase : <?php echo strtoupper($third); ?><br>
uppercase first : <?php echo ucfirst($third);?><br>
uppercase words : <?php echo ucwords($third);?><br>




    
</body>
</html>