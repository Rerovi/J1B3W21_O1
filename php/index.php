<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            margin: 0;
        }
        h1 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
        }
        img {
            width: 100%;
            height: 100%;
        }
    </style>
    <meta charset="UTF-8">
    <title>Klok</title>
</head>
<body>
<?php
date_default_timezone_set("Europe/Amsterdam");
$time = date("G:i");
$hour = (int) date("G");
if ($hour > 6 && $hour < 12) {
    echo "<h1>Goede Morgen! <br>".$time."</h1>",
    "<img src='../img/morning.png' alt='Background-image'>";
} else if ($hour > 12 && $hour < 18) {
    echo "<h1>Goede Middag! <br>".$time."</h1>",
    "<img src='../img/afternoon.png' alt='Background-image'>";
} else if ($hour > 18 && $hour < 24) {
    echo "<h1>Goede Avond! <br>".$time."</h1>",
    "<img src='../img/evening.png' alt='Background-image'>";
} else {
    echo "<h1>Goede Nacht! <br>".$time."</h1>",
    "<img src='../img/night.png' alt='Background-image'>";
}

?>
</body>
</html>


