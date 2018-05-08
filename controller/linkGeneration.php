<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

$site     = $_POST['site'];
$location = $_POST['location'];
$pType    = $_POST['pType'];
$sRadius  = $_POST['sRadius'];
$prop     = $_POST['prop'];
if($pType == "buy"){
  $minPrice = $_POST['minPrice'];
  $maxPrice = $_POST['maxPrice'];
} else {
  $minPrice = $_POST['rminPrice'];
  $maxPrice = $_POST['rmaxPrice'];
}
$bedrooms = $_POST['bedrooms'];
$added    = $_POST['added'];
$offer    = null;
$furnished= null;
if(isset($_POST['offer'])){
  $offer    = $_POST['offer'];
}

if(isset($_POST['furnished'])){
  $furnished= $_POST['furnished'];
}
switch($location){
  case "bham":
    $location = "Birmingham";
    $rMovLoc = "REGION^162";
    break;
  case "malv":
    $location = "Malvern";
    $rMovLoc = "REGION^903";
    break;
  case "tam":
    $location = "Tamworth";
    $rMovLoc = "REGION^1314";
    break;
  case "cov":
    $location = "Coventry";
    $rMovLoc = "REGION^368";
    break;
  default:
    $location = "Birmingham";
    $rMovLoc = "REGION^162";
}

function generateLink($site, $location, $rMovLoc, $pType, $sRadius, $prop, $minPrice, $maxPrice, $bedrooms, $added, $offer, $furnished){
  $finalLink = "";
  if($pType == "buy"){
    if($minPrice != ""){
      $minPrice = $minPrice * 1000;
    }
    if($maxPrice != ""){
      $maxPrice = $maxPrice * 1000;
    }
  }
  if($site == "rMov"){
    $formName = "propertySearchCriteria";
    $buttID   = "submit";
    $priceMinID = "minPrice";
    $priceMaxID = "maxPrice";
    $propID   = "displayPropertyType";
    $roomsID  = "minBedrooms";
    $addedID  = "maxDaysSinceAdded";
    if($sRadius > 0.5){
      $sRadius= sprintf("%.1f", $sRadius); //Rightmove's radius selections are all floats. Even those ending in .0
    }
    if($pType == "buy"){
      $checkBox = "includeSSTC";
      $finalLink = "http://www.rightmove.co.uk/property-for-sale/find.html?searchType=SALE";
    } else {
      $checkBox = "includeLetAgreed";
      $finalLink = "http://www.rightmove.co.uk/property-to-rent/find.html?searchType=RENT";
    }

    $finalLink .= "&locationIdentifier=".$rMovLoc;
    $finalLink .= "&radius=".$sRadius;
    $finalLink .= "&minPrice=".$minPrice;
    $finalLink .= "&maxPrice=".$maxPrice;
    $finalLink .= "&minBedrooms=".$bedrooms;
    $finalLink .= "&displayPropertyType=".$prop;
    $finalLink .= "&maxDaysSinceAdded=".$added;

    if($offer != null){
      $finalLink .= "&includeSSTC=true";
    }
    $finalLink .= "&auction=false";

  } else if($site == "zoop"){
    $formName = "search-form";
    $buttID   = "search-submit";
    $propID   = "property_type";
    $roomsID  = "beds_min";
    $addedID  = "added";

    if($pType == "buy"){
      $finalLink = "https://www.zoopla.co.uk/for-sale/";
      $priceMinID = "forsale_price_min";
      $priceMaxID = "forsale_price_max";
      if($furnished != ""){
        $furnished = "";
      }
    } else {
      $finalLink = "https://www.zoopla.co.uk/to-rent/";

      $priceMinID = "rent_price_min_per_month";
      $priceMaxID = "rent_price_max_per_month";
      if($furnished != ""){
        $furnished = "&furnished_state=".$furnished;
      } else {
        $furnished = "";
      }
    }

    if($prop == "land"){$prop = "farms-land";}
    $finalLink .= $prop."/";
    $finalLink .= $location."/?";
    switch($added){
      case 1:
        $finalLink .= "added=24_hours";
      break;
      case 3:
        $finalLink .= "added=3_days";
      break;
      case 7:
        $finalLink .= "added=7_days";
      break;
      case 14:
        $finalLink .= "added=14_days";
      break;
      default:
        $finalLink .= "added=";
    }
    $finalLink .= "&beds_min=".$bedrooms;
    $finalLink .= $soldrented;
    $finalLink .= "&price_max=".$maxPrice;
    $finalLink .= "&price_min=".$minPrice;
    $finalLink .= "&radius=".$sRadius;
    $finalLink .= $furnished;
    if($offer == "on"){
      if($pType == "buy"){
        $finalLink .= "&include_sold=true";
      } else {
        $finalLink .= "&include_rented=true";
      }
    }
  }
  header('Location: '.$finalLink);
}

generateLink($site, $location, $rMovLoc, $pType, $sRadius, $prop, $minPrice, $maxPrice, $bedrooms, $added, $offer, $furnished);

?>
