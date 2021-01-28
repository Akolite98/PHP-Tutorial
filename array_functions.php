<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array functions</title>
</head>
<body>
    
    <?php $numbers = array (4,12,24,25,50,30);?>

    count:  <?php echo count($numbers);?><br>
    max value: <?php echo max($numbers);?><br>
    min value: <?php echo min($numbers);?><br>
    <br>
<pre>sort : <?php sort($numbers); print_r($numbers);?>
    reverse sort : <?php rsort($numbers); print_r($numbers);?>
    </pre>
    <br>
    Implode : <?php echo $num_string = implode (" * " , $numbers);?><br>
    Explode : <?php print_r(explode (" * " , $num_string));?>
    <br>
     <!-- Implode converts arrays to strings -->
    12 in an array? : <?php echo in_array(12, $numbers); //returns true or false ?><br>
    19 in an array? : <?php echo in_array(19,$numbers);//returns true or false?><br>
    
</body>
</html>