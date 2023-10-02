<?php

session_start();
if (isset($_SESSION['uid'])) {
    echo "";
} else {
    header('location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body {
            background-image: url('../images/readme.gif');
            background-repeat: no-repeat;
            background-size: 410mm 180mm;
        }
    </style>
</head>

<body>
    <?php include('header.php'); ?>
    <div align='center' style="font-weight: bold;font-family:'Times New Roman', Times, serif;color:darkblue"><br><br><br><br>
        <h2>HNP Courier Management Service</h2>
        <h4>The fastest courier service of India</h4><br><br>
    </div>
</body>

</html>
