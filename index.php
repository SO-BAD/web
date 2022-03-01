<?php include_once "library/base.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/collections.css">
    <link rel="shortcut icon" href="#">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/collection.js"></script>

</head>

<body onload="adjModal()" onresize="adjModal()">
    <div class="modalBG">
        <div class="modalPage">

        </div>
    </div>
    <?php
    include "include/collections.php";
    ?>
</body>

</html>