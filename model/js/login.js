$("#resetAlert").hide();
$("#fPass").hide();
$("#resetShow").click(function(){
  $("#fPass").show();
});


$("#resetButt").click(function(){
  $("#resetAlert").removeClass("alert-danger");
  $("#resetAlert").removeClass("alert-info");
  $("#resetAlert").html("");
  $("#resetAlert").hide();
  if($("#resetEmail").val() != ""){
    $.post($("#resetForm"), function(){

    });
  } else {
    $("#resetAlert").addClass("alert-danger");
    $("#resetAlert").html("Please enter your email.");
    $("#resetAlert").show();
  }
});
