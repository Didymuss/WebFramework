<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');
include "../database.php";

Global $db;
Global $uKey;
$success = false;

if(isset($_POST['fName'])){
  $params = array(":fName" => $_POST['fName'], ":lName" => $_POST['lName'], ":uID" => $_SESSION['uID']);
  $stmt = $db->prepare("
    UPDATE user
    SET fName = AES_ENCRYPT(:fName, '".$uKey."'),
    lName = AES_ENCRYPT(:lName, '".$uKey."')
    WHERE uID = :uID
    ");
} else if(isset($_POST['email'])){
  $params = array(":email" => $_POST['email'], ":uID" => $_SESSION['uID']);
  $stmt = $db->prepare("
    UPDATE user
    SET email = AES_ENCRYPT(:email, '".$uKey."')
    WHERE uID = :uID
    ");
} else if(isset($_POST['phone'])){
  $params = array(":phone" => $_POST['phone'], ":uID" => $_SESSION['uID']);
  $stmt = $db->prepare("
    UPDATE user
    SET phone = AES_ENCRYPT(:phone, '".$uKey."')
    WHERE uID = :uID
    ");
} else if (isset($_POST['pass'])){
  $pass = password_hash($_POST['pass'], PASSWORD_BCRYPT);
  $params = array(":pass" => $pass, ":uID" => $_SESSION['uID']);
  $stmt = $db->prepare("
    UPDATE user
    SET pass = :pass
    WHERE uID = :uID
    ");
} else if(isset($_POST['add1'])){
  $params = array(
    ":add1" => $_POST['add1'],
    ":add2" => $_POST['add2'],
    ":city" => $_POST['city'],
    ":county" => $_POST['county'],
    ":postcode" => $_POST['post'],
    ":uID" => $_SESSION['uID']
  );
  $stmt = $db->prepare("
    UPDATE user
    SET
      add1 = AES_ENCRYPT(:add1, '".$uKey."'),
      add2 = AES_ENCRYPT(:add2, '".$uKey."'),
      city = AES_ENCRYPT(:city, '".$uKey."'),
      county = AES_ENCRYPT(:county, '".$uKey."'),
      postcode = AES_ENCRYPT(:postcode, '".$uKey."')
    WHERE uID = :uID
    ");

}
try{
  $stmt->execute($params);
  $success = true;
} catch(Exception $e){
  $success = false;
}

if($success){
  echo json_encode("success");
} else {
  echo json_encode("failure");
}

?>
