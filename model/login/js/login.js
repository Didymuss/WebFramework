$("#resetAlert").hide();
$("#loginAlert").hide();
$("#fPass").hide();
$("#resetShow").click(function(){
  $("#fPass").show();
});


$("#resetButt").click(function(){
  $("#resetAlert").removeClass("alert-danger");
  $("#resetAlert").removeClass("alert-info");
  $("#resetAlert").html("");
  $("#resetAlert").hide();
  rEmail = $("#rEmail").val();
  if($("#resetEmail").val() != ""){
    $.post("controller/login/resetEmail.php", {email : rEmail}, function(){
      if(result == "failure"){
        $("#resetAlert").addClass("alert-danger");
        $("#resetAlert").html("Incorrect Email.");
        $("#resetAlert").show();
      }
    });
  } else {
    $("#resetAlert").addClass("alert-danger");
    $("#resetAlert").html("Please enter your email.");
    $("#resetAlert").show();
  }
});

$("#loginButt").click(function(){
  $("#loginAlert").removeClass("alert-danger");
  $("#loginAlert").removeClass("alert-info");
  $("#loginAlert").html("");
  $("#loginAlert").hide();
  email = $("#email").val();
  pass = $("#pass").val();

  if($("#email").val() != "" && $("#pass").val() != ""){
    $.post("controller/login/login.php", {email : email, pass : pass}, function(result){
      if(result == "failure"){
        $("#loginAlert").addClass("alert-danger");
        $("#loginAlert").html("Incorrect Details.");
        $("#loginAlert").show();
      } else {
        window.location.href = "http://localhost/view/account.php";
      }
    }, "json");
  } else {
    $("#loginAlert").addClass("alert-danger");
    $("#loginAlert").html("Please enter your details.");
    $("#loginAlert").show();
  }
});
