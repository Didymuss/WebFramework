$("#rentPrice").hide();
$("#furnished").hide();
$("#pType").change(function(){
  if($(this).val() == "buy"){
    $("#rentPrice").hide();
    $("#buyPrice").show();
    $("#furnished").hide();
  } else {
    if($("#site").val() == "zoop"){
      $("#furnished").show();
    } else {
      $("#furnished").hide();
    }
    $("#rentPrice").show();
    $("#buyPrice").hide();
  }
});
