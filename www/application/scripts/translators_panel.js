$(document).ready(function(){
document.getElementById("translate").style.visibility="visible";

$("#action_translate").click(function() {
document.getElementById("translate").style.visibility="visible";
document.getElementById("edit").style.visibility="hidden";
document.getElementById("settings").style.visibility="hidden";
});

$("#action_edit").click(function() {
document.getElementById("translate").style.visibility="hidden";
document.getElementById("edit").style.visibility="visible";
document.getElementById("settings").style.visibility="hidden";
});

$("#action_settings").click(function() {
document.getElementById("translate").style.visibility="hidden";
document.getElementById("edit").style.visibility="hidden";
document.getElementById("settings").style.visibility="visible";
});

 $("#action_save_settings").click(function() {
     var signature = '';
     if (document.getElementById("signature").value == '') signature = ' ';
     else signature = document.getElementById("signature").value;
     
     var footer = 0;
     if(document.getElementById("name_footer").checked == true) footer = 1;
     
     var inform = 0;
     if(document.getElementById("inform_new_text").checked == true) inform = 1;
     
         $.ajax({
        type: "POST",
        url: "",
        dataType : 'json',
        data: {
               signature : signature,
               footer : footer,
               inform : inform
        },
        success : function(json) {
        $('div.result').text("Settings saved");
        }
        });

});
  
});

