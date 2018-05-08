<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');
include "../database.php";

Global $db;
Global $uKey;
$email = $_POST['email'];
$pass = $_POST['pass'];
$success = false;

$_SESSION['uID'] = null;
$_SESSION['loggedIn'] = null;

$params = array(":email" => $email);
$stmt = $db->prepare("
  SELECT pass FROM user
  WHERE AES_ENCRYPT(:email, '".$uKey."') = email
  ");
$stmt->execute($params);
$result = $stmt->fetch(PDO::FETCH_ASSOC);

if(password_verify($pass, $result['pass'])){
  $params = array(":email" => $email);
  $stmt = $db->prepare("
    SELECT uID FROM user
    WHERE AES_ENCRYPT(:email, '".$uKey."') = email
    ");
  $stmt->execute($params);
  $result = $stmt->fetch(PDO::FETCH_ASSOC);

  $uID = $result['uID'];
  if($uID != "" || $uID != null){
    $_SESSION['uID'] = $uID;
    //header("Location: http://localhost/view/search.php");
    echo json_encode("success");
  } else {
    echo json_encode("failure");
  }
} else {
  echo json_encode("failure");
}

?>
