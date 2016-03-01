$(document).ready(function(){

 document.getElementById("id_login").style.visibility="visible";
 
 $("#action_login").click(function() {
     var nick = document.getElementById("nick").value;
     var pass = document.getElementById("pass").value;
         $.ajax({
        type: "POST",
        url: "../qsmsb/",
        dataType : 'json',
        data: {
               nick : nick,
               pass : pass,
        },
        success : function(json) {
        if(json['status'] == true){
        location.reload();}
        }
        });

});
 
});