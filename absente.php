<?php include('controller.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absente</title>
</head>
<body>
    <?php if ($resultAbsente) {
        echo "<h1>Elevul cu cele mai multe absente:</h1>";
        echo "<ul>";
        $rand = mysqli_fetch_assoc($resultAbsente);
        echo "<li>" . $rand['name'] . ' cu ' . $rand['nr'] . ' absente' . "</li> </ul>";
    }?>
</body>
</html>