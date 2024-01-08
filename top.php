<?php include('controller.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absente</title>
</head>
<body>
    <?php if ($resultTop) {
        echo "<h1>Top 3 medii:</h1>";
        echo "<ul>";
        while ($rand = mysqli_fetch_assoc($resultTop)) {
            echo "<li>" . $rand['name'] . " cu media " . $rand['medie'] . "</li>";
        }
        echo "</ul>";
    }?>
</body>
</html>