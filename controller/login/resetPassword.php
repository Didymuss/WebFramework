<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
include "../database.php";
include "";
Global $db;
Global $uKey;
$email = $_POST['email'];

$params = array(":email" => $email);
$stmt = $db->prepare("
  SELECT email FROM user
  WHERE AES_ENCRYPT(:email, '".$uKey."') = email
  ");
$stmt->execute($params);
$result = $stmt->fetch(PDO::FETCH_ASSOC);

$email = $result['email'];
if($email != "" || $email != null){
  echo json_encode("success");
} else {
  echo json_encode("failure");
}

?>
