<!DOCTYPE html>
<html>
<head>
    <style>
        .box {
            width: 50px;
            height: 50px;
            border: 1px solid black;
            display: inline-block;
            text-align: center;
            vertical-align: middle;
            line-height: 50px;
            margin: 2px;
        }
    </style>
</head>
<body>

<?php
$A = "A";
$B = "B";
$C = "C";
?>

<div>
    <div class="box"><?php echo $A; ?></div><br>
    <div class="box"><?php echo $A; ?></div>
    <div class="box"><?php echo $B; ?></div><br>
    <div class="box"><?php echo $A; ?></div>
    <div class="box"><?php echo $B; ?></div>
    <div class="box"><?php echo $C; ?></div>
</div>

</body>
</html>
