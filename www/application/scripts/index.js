$(function(){
    var total = $('#backgrounds img').length;
    var counter = 1;
    function cycle(){
        $('#backgrounds img:nth-child('+counter+')').css({'opacity':'0','display':'block','z-index':'2'});
        $('#backgrounds img:nth-child('+counter+')').animate({'opacity':'1'},2000);
        counter++;
        if( counter > total ){ counter = 1; $('#backgrounds img').css('z-index','1'); };
        }
    cycle();
    setInterval(function(){cycle();},5000);
});

$(document).ready(function(){
    $("#log").click(function() {
        var nick = document.getElementById("nick").value;
        var pass = document.getElementById("pass").value;
         $.ajax({
        type: "POST",
        url: "bin/login.php",
        dataType : 'json',
        data: {
               nick : nick,
               password : pass,
        },
        success : function(json) {
            var status = json['status'];
            if(status == 1){
            document.getElementById("nick").style.backgroundColor="#990000";
            document.getElementById("nick").style.color="#FFF";
            document.getElementById("nick").style.borderBottom="2px solid #990000";
            document.getElementById("pass").style.backgroundColor="#990000";
            document.getElementById("pass").style.color="#FFF";
            document.getElementById("pass").style.borderBottom="#990000";
            }
            if(status == 2){
            document.getElementById("nick").style.backgroundColor="rgb(45,45,45)";
            document.getElementById("nick").style.color="rgb(230,115,0)";
            document.getElementById("pass").style.backgroundColor="#990000";
            document.getElementById("pass").style.color="#FFF";
            }
            if(status == 3){
            document.getElementById("nick").style.backgroundColor="rgb(45,45,45)";
            document.getElementById("nick").style.color="rgb(230,115,0)";
            document.getElementById("pass").style.backgroundColor="rgb(45,45,45)";
            document.getElementById("pass").style.color="rgb(230,115,0)";
            location.reload();
            }

        }
    });


 });


$("#signin").click(function() {
  var nick = document.getElementById("nicks").value;
  var pass = document.getElementById("passs").value;
  var sex = document.getElementById("sex").value;
  var mail = document.getElementById("mail").value;
  var statute = document.getElementById("statute").checked;

  if(sex == "none")
  {
  document.getElementById("sex").style.backgroundColor="#990000";
  }
  else  document.getElementById("sex").style.backgroundColor="rgb(45,45,45)";


  if(statute == false)
  {
  document.getElementById("st").style.backgroundColor="#990000";
  }
  else document.getElementById("st").style.backgroundColor="rgba(255,255,255,.5)";

  if(sex != "none" && statute == true)
  {
     $.ajax({
        type: "POST",
        url: "bin/register.php",
        dataType : 'json',
        data: {
               nick     : nick,
               password : pass,
               sex      : sex,
               mail     : mail,
        },
        success : function(json) {

        if(json['nick'] == false)
        {
        document.getElementById("nicks").style.backgroundColor="#990000";
        }
        else document.getElementById("nicks").style.backgroundColor="rgb(45,45,45)";

        if(json['password'] == false)
        {
        document.getElementById("passs").style.backgroundColor="#990000";
        }
        else document.getElementById("passs").style.backgroundColor="rgb(45,45,45)";


        if(json['mail'] == false)
        {
        document.getElementById("mail").style.backgroundColor="#990000";
        }
        else document.getElementById("mail").style.backgroundColor="rgb(45,45,45)";

        if(json['result'] == true)
            $("#sent").dialog({
            autoOpen: true,
            show: {
            effect: "blind",
            duration: 1000
            },
            hide: {
            effect: "blind",
            duration: 1000
            }
            });
        }
    });
  }
});


$("#lost_pass").click(function() {
    $("#forgot_pass").dialog({
    autoOpen: true,
    show: {
    effect: "blind",
    duration: 1000
    },
    hide: {
    effect: "blind",
    duration: 1000
    }
    });
});

$("#button_forgot_pass").click(function() {
    var mail = document.getElementById("mail_forgot_pass").value;
    $.ajax({
            type: "POST",
            url: "",
            dataType : 'json',
            data: {
            mail : mail
            },
            success : function(json) {
            if(json['result'] == 1) $('div.sent_or_not').text("Address don't exist");
            if(json['mail'] == false) $('div.sent_or_not').text('Wrong address');
            if(json['result'] == 2){
                $('div.sent_or_not').text("E-mail was sent");
                $( "#forgot_pass" ).dialog( "close" );
                $('div.sent_or_not').text(" ");
            }
            }
    });
});

});