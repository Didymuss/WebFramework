<?php
function getAccount($uID){
  Global $db;
  Global $uKey;
  $params = array(":uID" => $uID);
  $stmt = $db->prepare("
    SELECT AES_DECRYPT(fName, '".$uKey."') as fName,
    AES_DECRYPT(lName, '".$uKey."') as lName,
    AES_DECRYPT(email, '".$uKey."') as email,
    AES_DECRYPT(add1, '".$uKey."') as add1,
    AES_DECRYPT(add2, '".$uKey."') as add2,
    AES_DECRYPT(city, '".$uKey."') as city,
    AES_DECRYPT(county, '".$uKey."') as county,
    AES_DECRYPT(postcode, '".$uKey."') as postcode,
    AES_DECRYPT(phone, '".$uKey."') as phone
    FROM user
    WHERE uID = :uID
    ");
  $stmt->execute($params);
  $accInf = $stmt->fetch(PDO::FETCH_ASSOC);
  return $accInf;
}
function getBilling($uID){
  Global $db;
  Global $bKey;
  $params = array(":uID" => $uID);
  $stmt = $db->prepare("
    SELECT bID,
    date,
    AES_DECRYPT(add1, '".$bKey."') as add1,
    AES_DECRYPT(add2, '".$bKey."') as add2,
    AES_DECRYPT(city, '".$bKey."') as city,
    AES_DECRYPT(county, '".$bKey."') as county,
    AES_DECRYPT(postcode, '".$bKey."') as postcode,
    AES_DECRYPT(last4, '".$bKey."') as phone
    FROM billing
    WHERE uID = :uID
    ORDER BY bID
    ");
  $stmt->execute($params);
  $billInf = $stmt->fetch(PDO::FETCH_ASSOC);
  return $billInf;
}
function getSearch($uID){
  Global $db;
  $params = array(":uID" => $uID);
  $stmt = $db->prepare("
    SELECT *
    FROM searches
    WHERE uID = :uID
    ORDER BY sID
    ");
  $stmt->execute($params);
  $searchInf = $stmt->fetch(PDO::FETCH_ASSOC);
  return $searchInf;
}
?>
