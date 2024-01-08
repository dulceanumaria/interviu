<?php include('controller.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
    <h1>Home</h1>
    <button onclick="redirectToMediaClase()">media pe clase</button>
    <button onclick="redirectToMediaGenerala()">media pe scoala</button>
    <button onclick="redirectToAbsente()">cele mai multe absente</button>
    <button onclick="redirectToTop()">top 3 medii</button>
    <script>
        function redirectToMediaClase() {
            window.location.href = 'mediaclase';
        }
        function redirectToMediaGenerala() {
            window.location.href = 'mediascoala';
        }
        function redirectToAbsente() {
            window.location.href = 'absente';
        }
        function redirectToTop() {
            window.location.href = 'top';
        }
    </script>
</body>
</html>
