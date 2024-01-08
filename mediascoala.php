<?php include('controller.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media pe scoala</title>
</head>
<body>
    <?php if ($resultMedieGenerala) {
        echo "<h1>Media pe scoala:</h1>";
        echo "<ul>";
        $rand = mysqli_fetch_assoc($resultMedieGenerala);
        echo "<li>" . $rand['medieGenerala'] . "</li> </ul>";
    }?>
</body>
</html>