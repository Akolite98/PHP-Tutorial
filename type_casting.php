<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type juggling and casting</title>
</head>
<body>

type juggling <br>

<?php $count = "2 cats";?>
type: <?php echo gettype($count);?><br>

<?php $count += 3; ?>
type: <?php echo gettype($count);?><br>

<?php $cats = "I have " .  $count .  " cats."?>
<!-- <?php echo $cats;?><br> -->
cats:<?php echo gettype($cats);?>
<br>

type casting <br>
<?php settype($count, "integer"); ?>
count: <?php echo gettype($count);?><br>

<?php $count2 = (string)  $count;?>
count: <?php echo gettype($count);?><br>
count2: <?php echo gettype($count2);?><br>



    
</body>
</html>