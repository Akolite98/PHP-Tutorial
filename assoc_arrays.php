<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>
<body>
    <?php

    $assoc = array("first_name" => "Precious", "last_name"=> "Nnorom");
    
    ?>

    <?php echo $assoc["first_name"];?><br>
    <?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?><br>
    <?php echo $assoc["last_name"] . " " . $assoc["first_name"]; ?><br>

    <?php $assoc["first_name"] = "Akachukwu";?>
    <?php echo $assoc["last_name"] . " " . $assoc["first_name"]; ?><br>
</body>
</html>