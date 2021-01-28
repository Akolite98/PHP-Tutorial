<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floating numbers</title>
</head>
<body>
    
    <?php echo $float = 3.14;?><br>
    <?php echo $float + 7;?><br>
    <?php echo 4/3;?>;
    <?php echo 4/0;?>;
    <br>
    round = <?php echo round ($float, 1);?><br>
    ceiling = <?php echo ceil ($float );?><br>
    floor = <?php echo floor ($float);?><br>

    <br>

    <?php $interger = 3;?><br>

    <?php echo "Is {$interger} interger?" . is_int($interger); ?><br>
    <?php echo "Is {$interger} interger?" . is_int($float); ?><br>
    <br>

    <?php echo "Is {$interger} float?" . is_float($interger); ?><br>
    <?php echo "Is {$interger} float?" . is_float($float); ?><br>
    <br>
    <?php echo "Is {$interger} numeric?" . is_numeric($interger); ?><br>
    <?php echo "Is {$interger} numeric?" . is_numeric($float); ?><br>

    <br>

</body>
</html>