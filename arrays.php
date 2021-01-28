<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>

<?php

$numbers = array(2,4,5,7,8,9,12);

echo $numbers[2];
?>
<br>

<?php $mixed = array (55,"fox","dog", array ("x","y","z"));?>

<?php echo $mixed[2];?><br>
 <!-- <?php echo $mixed[3];?><br>
<?php echo $mixed?><br>  -->


<?php echo $mixed[3][2];?><br>

<?php  $mixed[2] = "Man";?><br>
<?php  $mixed[4] = "Precious";?><br>
<?php $mixed[] = "horse";?>

<pre>
<?php echo print_r($mixed)?>
</pre>

<?php
    $array = [1,2,3,4];

    echo $array[0];

?>
    
</body>
</html>