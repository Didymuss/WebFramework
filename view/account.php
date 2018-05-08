<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');
include "../controller/checkLoggedIn.php";
checkLoggedIn();
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="../dependencies/fontAwesome/fontawesome-all.js"></script>
  <link rel="stylesheet" href="../dependencies/bootstrap/bootstrap-4.0.0-beta.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="../dependencies/css/mainCSS.css">
  <title>Go Search - Account</title>
</head>
<body>
  <div class = "container-fluid">
    <?php include "includes/header.html"; ?>
    <?php include "../model/account/account.php"; ?>
    <?php include "includes/footer.html"; ?>
  </div>

  <script src="../dependencies/jquery-3.2.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="../dependencies/bootstrap/bootstrap-4.0.0-beta.2/js/bootstrap.min.js"></script>
  <script src="../model/account/js/account.js"></script>
</body>
</html>
