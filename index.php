<?php
session_start();
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="dependencies/fontAwesome/fontawesome-all.js"></script>
  <link rel="stylesheet" href="dependencies/bootstrap/bootstrap-4.0.0-beta.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="dependencies/css/mainCSS.css">
  <title>Go Find - Login</title>
</head>
<body>
  <div class = "container-fluid">
    <div class = "row header">
      <div class = "col headerLeft">
        <h1>Go Find</h1>
        <br />
      </div>
    </div>
    <?php include "model/login/loginBox.html"; ?>
    <?php include "view/includes/footer.html"; ?>
  </div>
  <script src="dependencies/jquery-3.2.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="dependencies/bootstrap/bootstrap-4.0.0-beta.2/js/bootstrap.min.js"></script>
  <script src="model/login/js/login.js"></script>
</body>
</html>
