<?php
$sname = ["Ahmad", "Budi", "Chika", "Dhini", "Erwin"];
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Looping for Array</title>
</head>
<body>
    <?php
        for ($i = 0; $i < count($sname); $i++) {
            
            echo "<li>$sname[$i]</li>";
        }
    ?>
</body>
</html>
