var MarkS;
var Img1S;
var Img2S;
var Mark = 0;
var Img1 = 0;
var Img2 = 0;

$(document).ready(function(){
$("#rightnext").click(function() {
    if(Mark == 0){
    Mark = MarkS;
    Img1 = Img1S;
    Img2 = Img2S;
    }
    document.getElementById("inf_right").style.visibility="hidden";
    $('#left').toggle(1000);
    document.getElementById("hidden").style.zIndex="2";
    $.ajax({
        type: "POST",
        url: "choice.php",
        dataType : 'json',
        data: {
               Mark : Mark,
               Img1 : Img1,
               Img2 : Img2,
               Side : 1,
               p    : p,
               p2   : p2,
        },
        success : function(json) {
            Img1 = json['no1'];
            Img2 = json['no2'];

            document.getElementById('left').src = "../upload_images" + sex + "/" + json['num'] + "/" + json['no1'] + ".jpg?random="+new Date().getTime();
            document.getElementById('right').src = "../upload_images" + sex + "/" + json['num2'] + "/" + json['no2'] + ".jpg?random="+new Date().getTime();
            document.getElementById('nick1').innerHTML = json['nick2'];
            document.getElementById('nick2').innerHTML = json['nick1'];
            document.getElementById('nick1value').value = json['nick2'];
            document.getElementById('nick2value').value = json['nick1'];
            document.getElementById('age1').innerHTML = json['age2'];
            document.getElementById('age2').innerHTML = json['age1'];
            document.getElementById('plus1').innerHTML = json['plus2'];
            document.getElementById('plus2').innerHTML = json['plus1'];
            p = json['plus1'];
            p2 = json['plus2'];
            document.getElementById('won1').innerHTML = json['battle2'];
            document.getElementById('won2').innerHTML = json['battle1'];
            document.getElementById('leftc').src = "../flag/" + json['country2'] + ".ico?random="+new Date().getTime();
            document.getElementById('rightc').src = "../flag/" + json['country1'] + ".ico?random="+new Date().getTime();
            $('#left').toggle(1000);
            $('#right').toggle(1000);
            $('#buttons_right').fadeIn(500);
            $('#buttons_left').fadeIn(500);
            $('#report_js_right').fadeIn(500);
            $('#report_js_left').fadeIn(500);
        }
    });
});

$("#leftnext").click(function() {
    if(Mark == 0){
    Mark = MarkS;
    Img1 = Img1S;
    Img2 = Img2S;
    }
    document.getElementById("inf_left").style.visibility="hidden";
    $('#right').toggle(1000);
    document.getElementById("hidden").style.zIndex="2";
    $.ajax({
        type: "POST",
        url: "choice.php",
        dataType : 'json',
        data: {
               Mark : Mark,
               Img1 : Img1,
               Img2 : Img2,
               Side : 0,
               p    : p,
               p2   : p2,
        },
        success : function(json) {
            Img1 = json['no1'];
            Img2 = json['no2'];

            document.getElementById('left').src = "../upload_images" + sex + "/" + json['num'] + "/" + json['no1'] + ".jpg?random="+new Date().getTime();
            document.getElementById('right').src = "../upload_images" + sex + "/" + json['num2'] + "/" + json['no2'] + ".jpg?random="+new Date().getTime();
            document.getElementById('nick1').innerHTML = json['nick2'];
            document.getElementById('nick2').innerHTML = json['nick1'];
            document.getElementById('nick1value').value = json['nick2'];
            document.getElementById('nick2value').value = json['nick1'];
            document.getElementById('age1').innerHTML = json['age2'];
            document.getElementById('age2').innerHTML = json['age1'];
            document.getElementById('plus1').innerHTML = json['plus2'];
            document.getElementById('plus2').innerHTML = json['plus1'];
            p = json['plus1'];
            p2 = json['plus2'];
            document.getElementById('won1').innerHTML = json['battle2'];
            document.getElementById('won2').innerHTML = json['battle1'];
            document.getElementById('leftc').src = "../flag/" + json['country2'] + ".ico?random="+new Date().getTime();
            document.getElementById('rightc').src = "../flag/" + json['country1'] + ".ico?random="+new Date().getTime();
            $('#left').toggle(1000);
            $('#right').toggle(1000);
            $('#buttons_right').fadeIn(500);
            $('#buttons_left').fadeIn(500);
            $('#report_js_right').fadeIn(500);
            $('#report_js_left').fadeIn(500);
        }
    });
});

$("#msgbox_report").dialog({
    autoOpen: false,
    position: { my: "center", at: "center" },
    show: {
    effect: "blind",
    duration: 1000
    },
    hide: {
    effect: "blind",
    duration: 1000
    }
    });

$("#report_js_right").click(function() {
   $( "#msgbox_report" ).dialog( "open" );
});

$("#report_js_left").click(function() {
   $( "#msgbox_report" ).dialog( "open" );
});

});

function left_button(PMark,PImg1,PImg2) {
        MarkS = PMark;
        Img1S = PImg1;
        Img2S = PImg2;

        document.getElementById("inf_right").style.visibility="visible";
        $('#right').toggle(1000);
        document.getElementById("hidden").style.zIndex="10";
        $('#buttons_right').fadeOut(500);
        $('#buttons_left').fadeOut(500);
        $('#report_js_right').fadeOut(500);
        $('#report_js_left').fadeOut(500);
        }

function right_button(PMark,PImg1,PImg2) {
        MarkS = PMark;
        Img1S = PImg1;
        Img2S = PImg2;

        document.getElementById("inf_left").style.visibility="visible";
        $('#left').toggle(1000);
        document.getElementById("hidden").style.zIndex="10";
        $('#buttons_right').fadeOut(500);
        $('#buttons_left').fadeOut(500);
        $('#report_js_right').fadeOut(500);
        $('#report_js_left').fadeOut(500);
        }