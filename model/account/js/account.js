$("#nameCh").hide();
$("#emailCh").hide();
$("#phoneCh").hide();
$("#passCh").hide();
$("#addCh").hide();
$("#resetAlert").hide();

function hideAlert(){
  $("#resetAlert").removeClass("alert-danger");
  $("#resetAlert").removeClass("alert-info");
  $("#resetAlert").html("");
  $("#resetAlert").hide();
}

function showAlert(msg, type){
  if(type == "info"){
    $("#resetAlert").addClass("alert-info");
  } else {
    $("#resetAlert").addClass("alert-danger");
  }
  $("#resetAlert").html(msg);
  $("#resetAlert").show();
}

$("#name").click(function(){
  $("#name").hide();
  $("#nameCh").show();
});
$("#nCancel").click(function(){
  $("#name").show();
  $("#nameCh").hide();
});
$("#nSave").click(function(){
  hideAlert();
  fName = $("#fNameIn").val();
  lName = $("#lNameIn").val();
  if(fName != "" && lName != ""){
    $.post("../controller/account/updateDetails.php", {fName : fName, lName : lName}, function(result){
      if(result == "failure"){
        showAlert("Something went wrong.", "danger");
      } else {
        $("#name").html(fName + " " + lName);
        $("#name").show();
        $("#nameCh").hide();
        showAlert("Name Updated", "info");
      }
    });
  } else {
    showAlert("Please enter your details.", "danger");
  }
});

$("#email").click(function(){
  $("#email").hide();
  $("#emailCh").show();
});
$("#eCancel").click(function(){
  $("#email").show();
  $("#emailCh").hide();
});
$("#eSave").click(function(){
  hideAlert();
  email = $("#emailIn").val();
  if(email != ""){
    $.post("../controller/account/updateDetails.php", {email : email}, function(result){
      if(result == "failure"){
        showAlert("Something went wrong.", "danger");
      } else {
        $("#email").html(email);
        $("#email").show();
        $("#emailCh").hide();
        showAlert("Email Updated", "info");
      }
    });
  } else {
    showAlert("Please enter your new email.", "danger");
  }
});

$("#phone").click(function(){
  $("#phone").hide();
  $("#phoneCh").show();
});
$("#pCancel").click(function(){
  $("#phone").show();
  $("#phoneCh").hide();
});
$("#pSave").click(function(){
  hideAlert();
  phone = $("#phoneIn").val();
  if(phone != ""){
    $.post("../controller/account/updateDetails.php", {phone : phone}, function(result){
      if(result == "failure"){
        showAlert("Something went wrong.", "danger");
      } else {
        $("#phone").html(phone);
        $("#phone").show();
        $("#phoneCh").hide();
        showAlert("Phone number updated", "info");
      }
    });
  } else {
    showAlert("Please enter your new number.", "danger");
  }
});

$("#pass").click(function(){
  $("#pass").hide();
  $("#passCh").show();
});
$("#passCancel").click(function(){
  $("#pass").show();
  $("#passCh").hide();
});

$("#passSave").click(function(){
  hideAlert();
  pass = $("#passIn").val();
  if($("#passIn").val() != null && $("#passConf").val() != null && $("#passIn").val() == $("#passConf").val()){
    $.post("../controller/account/updateDetails.php", {pass : pass}, function(result){
      if(result == "failure"){
        showAlert("Something went wrong.", "danger");
      } else {
        $("#pass").show();
        $("#passCh").hide();
        showAlert("Password Updated", "info");
      }
    });
  } else {
    showAlert("Please enter your new password.", "danger");
  }
});

$("#add").click(function(){
  $("#add").hide();
  $("#addCh").show();
});
$("#aCancel").click(function(){
  $("#add").show();
  $("#addCh").hide();
});
$("#aSave").click(function(){
  hideAlert();
  add1 = $("#add1In").val();
  add2 = $("#add2In").val();
  city = $("#cityIn").val();
  county = $("#countyIn").val();
  post = $("#postIn").val();
  if(add1 != "" && add2 != "" && city != "" && county != "" && post != ""){
    $.post("../controller/account/updateDetails.php", {add1 : add1, add2 : add2, city : city, county : county, post : post}, function(result){
      if(result == "failure"){
        showAlert("Something went wrong.", "danger");
      } else {
        $("#add1").html(add1);
        $("#add2").html(add2);
        $("#city").html(city);
        $("#county").html(county);
        $("#postcode").html(post);
        $("#add").show();
        $("#addCh").hide();
        showAlert("Address Updated", "info");
      }
    });
  } else {
    showAlert("Please enter your new address.", "danger");
  }
});
