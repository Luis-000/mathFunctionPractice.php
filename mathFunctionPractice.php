<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="mathFunctionPractice.php" method="post">
        <label>Radius:</label>
        <input type="text" name="radius">
        <input type="submit" value="calculate">
    </form> <br>
</body>

</html>


<?php

$radius = $_POST["radius"];
$circum = null;
$area = null;
$volume = null;

$circum = round((2 * pi() * $radius), 2);
$area = round(pi() * pow($radius, 2), 2);
$volume = round((4 / 3 * pi() * pow($radius, 3)), 2);

echo "Circumference = {$circum}cm<br>";
echo "Area = {$area}cm^2 <br>";
echo "Volume = {$volume} cm^3 <br>"

?>