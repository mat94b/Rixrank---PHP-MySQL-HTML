$(document).ready(function(){
var a=0;
var chop = 17;
$.ajax({
        type: "POST",
        url: "",
        dataType : 'json',
        data: {
               stat : 1,
        },
        success : function(json) {
                if(json['status'] != false){
        
                }
       
        }
        });

        document.getElementById('img1').src = "../images/main.png?random="+new Date().getTime();
        document.getElementById('img2').src = "../images/test.png?random="+new Date().getTime();
        document.getElementById('img3').src = "../images/login.png?random="+new Date().getTime();
        document.getElementById('img4').src = "../images/register.png?random="+new Date().getTime();
        document.getElementById('img5').src = "../images/activate.png?random="+new Date().getTime();
        document.getElementById('img6').src = "../images/upload.png?random="+new Date().getTime();
        document.getElementById("main_stat").style.visibility="visible";
        
$("#more1").click(function() {
    document.getElementById('img1').src = "../images/mainforecast.png?random="+new Date().getTime();
    });
    
$("#more2").click(function() {
    document.getElementById('img2').src = "../images/testforecast.png?random="+new Date().getTime();
    });
    
$("#more3").click(function() {
    document.getElementById('img3').src = "../images/loginforecast.png?random="+new Date().getTime();
    });
    
$("#more4").click(function() {
    document.getElementById('img4').src = "../images/registerforecast.png?random="+new Date().getTime();
    });
    
$("#more5").click(function() {
    document.getElementById('img5').src = "../images/activateforecast.png?random="+new Date().getTime();
    });
    
$("#more6").click(function() {
    document.getElementById('img6').src = "../images/uploadforecast.png?random="+new Date().getTime();
    });
    
$("#basic1").click(function() {
    document.getElementById('img1').src = "../images/main.png?random="+new Date().getTime();
    });
    
$("#basic2").click(function() {
    document.getElementById('img2').src = "../images/test.png?random="+new Date().getTime();
    });
    
$("#basic3").click(function() {
    document.getElementById('img3').src = "../images/login.png?random="+new Date().getTime();
    });
    
$("#basic4").click(function() {
    document.getElementById('img4').src = "../images/register.png?random="+new Date().getTime();
    });
    
$("#basic5").click(function() {
    document.getElementById('img5').src = "../images/activate.png?random="+new Date().getTime();
    });
    
$("#basic6").click(function() {
    document.getElementById('img6').src = "../images/upload.png?random="+new Date().getTime();
    });


});
