<?php
function checkLoggedIn(){
  if($_SESSION['uID'] == null){
    $_SESSION['uID'] = null;
    header("location: http://localhost/index.php");
    exit();
  }
}

?>
