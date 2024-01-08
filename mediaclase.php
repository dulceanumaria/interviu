<?php include('controller.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media pe clase</title>
</head>
<body>
    <?php if ($resultMedieClase) {
        echo "<h1>Media pe clase:</h1>";
        echo "<ul>";
        while ($rand = mysqli_fetch_assoc($resultMedieClase)) {
            echo "<li>Clasa " . $rand['class'] . ": " . $rand['medie'] . "</li>";
        }
        echo "</ul>";
    }?>
</body>
</html>