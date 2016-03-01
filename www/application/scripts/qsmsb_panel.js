var HOST = "http://192.168.0.11/ow/";
function odliczaj(n)
{
    n--;
    s = n%60;
    m = Math.floor((n%3600)/60);
    g = Math.floor(n/3600);
    if (n == 0)
    {
        document.getElementById('second').innerHTML = '';
    }
    else
    {
        document.getElementById('second').innerHTML = '' + g + ':' + ((m < 10) ? '0' + m : m)+ ':' +((s < 10) ? '0' + s : s);
        if(n >= 0)
            setTimeout("odliczaj(" + n + ")", 1000);
    }
}
window.onload=function () { odliczaj('600'); }

$(document).ready(function(){

$("#action_alarm").click(function() {
document.getElementById("alarms").style.visibility="visible";
document.getElementById("ranks").style.visibility="hidden";
document.getElementById("traffic").style.visibility="hidden";
document.getElementById("publicity").style.visibility="hidden";
document.getElementById("tools").style.visibility="hidden"; 
document.getElementById("logs").style.visibility="hidden"; 
});

$("#action_ranks").click(function() {
document.getElementById("ranks").style.visibility="visible";
document.getElementById("alarms").style.visibility="hidden";
document.getElementById("traffic").style.visibility="hidden";
document.getElementById("publicity").style.visibility="hidden";
document.getElementById("tools").style.visibility="hidden"; 
document.getElementById("logs").style.visibility="hidden"; 
});

$("#action_traffic").click(function() {
document.getElementById("traffic").style.visibility="visible";
document.getElementById("alarms").style.visibility="hidden";
document.getElementById("ranks").style.visibility="hidden";
document.getElementById("publicity").style.visibility="hidden";
document.getElementById("tools").style.visibility="hidden"; 
document.getElementById("logs").style.visibility="hidden"; 
});

$("#action_publicity").click(function() {
document.getElementById("publicity").style.visibility="visible";
document.getElementById("alarms").style.visibility="hidden";
document.getElementById("ranks").style.visibility="hidden";
document.getElementById("traffic").style.visibility="hidden";
document.getElementById("tools").style.visibility="hidden"; 
document.getElementById("logs").style.visibility="hidden"; 
});

$("#action_tools").click(function() {
document.getElementById("tools").style.visibility="visible";  
document.getElementById("publicity").style.visibility="hidden";
document.getElementById("alarms").style.visibility="hidden";
document.getElementById("ranks").style.visibility="hidden";
document.getElementById("traffic").style.visibility="hidden";
document.getElementById("logs").style.visibility="hidden";  
});

$("#action_logs").click(function() {
document.getElementById("logs").style.visibility="visible";      
document.getElementById("tools").style.visibility="hidden";  
document.getElementById("publicity").style.visibility="hidden";
document.getElementById("alarms").style.visibility="hidden";
document.getElementById("ranks").style.visibility="hidden";
document.getElementById("traffic").style.visibility="hidden";    
});

$("#action_alarm_main").click(function() {
    if(document.getElementById('alarm_main').src == (HOST+"application/icon/light_bulb_off.ico"))
    {
        $.ajax({
        type: "POST",
        url: "",
        dataType : 'json',
        data: {
               alarm : true,
               name : 'main'
        },
        success : function(json) {
        document.getElementById('alarm_main').src = HOST+"application/icon/light_bulb_on.ico";
        }
        });
    }
    else
    {
        $.ajax({
        type: "POST",
        url: "",
        dataType : 'json',
        data: {
               alarm : false,
               name : 'main'
        },
        success : function(json) {
        document.getElementById('alarm_main').src = HOST+"application/icon/light_bulb_off.ico";
        }
        });
        
    }
});

$("#action_alarm_comparetab").click(function() {
    if(document.getElementById('alarm_comparetab').src == (HOST+"application/icon/light_bulb_off.ico"))
    {
        $.ajax({
        type: "POST",
        url: "",
        dataType : 'json',
        data: {
               alarm : true,
               name : 'comparetab'
        },
        success : function(json) {
        document.getElementById('alarm_comparetab').src = HOST+"application/icon/light_bulb_on.ico";
        }
        });
        
    }
    else
    {
        $.ajax({
        type: "POST",
        url: "",
        dataType : 'json',
        data: {
               alarm : false,
               name : 'comparetab'
        },
        success : function(json) {
        document.getElementById('alarm_comparetab').src = HOST+"application/icon/light_bulb_off.ico";
        }
        });
        
    }
});

$("#action_alarm_upload").click(function() {
    if(document.getElementById('alarm_upload').src == (HOST+"application/icon/light_bulb_off.ico"))
    {
        $.ajax({
        type: "POST",
        url: "",
        dataType : 'json',
        data: {
               alarm : true,
               name : 'upload'
        },
        success : function(json) {
        document.getElementById('alarm_upload').src = HOST+"application/icon/light_bulb_on.ico";
        }
        });
        
    }
    else
    {
        $.ajax({
        type: "POST",
        url: "",
        dataType : 'json',
        data: {
               alarm : false,
               name : 'upload'
        },
        success : function(json) {
        document.getElementById('alarm_upload').src = HOST+"application/icon/light_bulb_off.ico";
        }
        });
       
    }
});

$("#action_alarm_comment").click(function() {
    if(document.getElementById('alarm_comment').src == (HOST+"application/icon/light_bulb_off.ico"))
    {
        $.ajax({
        type: "POST",
        url: "",
        dataType : 'json',
        data: {
               alarm : true,
               name : 'comment'
        },
        success : function(json) {
        document.getElementById('alarm_comment').src = HOST+"application/icon/light_bulb_on.ico";
        }
        });
        
    }
    else
    {
        $.ajax({
        type: "POST",
        url: "",
        dataType : 'json',
        data: {
               alarm : false,
               name : 'comment'
        },
        success : function(json) {
        document.getElementById('alarm_comment').src = HOST+"application/icon/light_bulb_off.ico";
        }
        });
        
    }
});

$("#action_alarm_delimg").click(function() {
    if(document.getElementById('alarm_delimg').src == (HOST+"application/icon/light_bulb_off.ico"))
    {
        $.ajax({
        type: "POST",
        url: "",
        dataType : 'json',
        data: {
               alarm : true,
               name : 'delimg'
        },
        success : function(json) {
        document.getElementById('alarm_delimg').src = HOST+"application/icon/light_bulb_on.ico";
        }
        });
        
    }
    else
    {
        $.ajax({
        type: "POST",
        url: "",
        dataType : 'json',
        data: {
               alarm : false,
               name : 'delimg'
        },
        success : function(json) {
        document.getElementById('alarm_delimg').src = HOST+"application/icon/light_bulb_off.ico";
        }
        });
        
    }
});

$("#action_alarm_local").click(function() {
    if(document.getElementById('alarm_local').src == (HOST+"application/icon/light_bulb_off.ico"))
    {
        $.ajax({
        type: "POST",
        url: "",
        dataType : 'json',
        data: {
               alarm : true,
               name : 'local'
        },
        success : function(json) {
        document.getElementById('alarm_local').src = HOST+"application/icon/light_bulb_on.ico";
        }
        });
        
    }
    else
    {
        $.ajax({
        type: "POST",
        url: "",
        dataType : 'json',
        data: {
               alarm : false,
               name : 'local'
        },
        success : function(json) {
        document.getElementById('alarm_local').src = HOST+"application/icon/light_bulb_off.ico";
        }
        });
        
    }
});


$("#action_alarm_global").click(function() {
    if(document.getElementById('alarm_global').src == (HOST+"application/icon/light_bulb_off.ico"))
    {
        $.ajax({
        type: "POST",
        url: "",
        dataType : 'json',
        data: {
               alarm : true,
               name : 'global'
        },
        success : function(json) {
        document.getElementById('alarm_global').src = HOST+"application/icon/light_bulb_on.ico";
        }
        });
        
    }
    else
    {
        $.ajax({
        type: "POST",
        url: "",
        dataType : 'json',
        data: {
               alarm : false,
               name : 'global'
        },
        success : function(json) {
        document.getElementById('alarm_global').src = HOST+"application/icon/light_bulb_off.ico";
        }
        });
        
    }
});


$("#action_alarm_ask").click(function() {
    if(document.getElementById('alarm_ask').src == (HOST+"application/icon/light_bulb_off.ico"))
    {
        $.ajax({
        type: "POST",
        url: "",
        dataType : 'json',
        data: {
               alarm : true,
               name : 'ask'
        },
        success : function(json) {
        document.getElementById('alarm_ask').src = HOST+"application/icon/light_bulb_on.ico";
        }
        });
        
    }
    else
    {
        $.ajax({
        type: "POST",
        url: "",
        dataType : 'json',
        data: {
               alarm : false,
               name : 'ask'
        },
        success : function(json) {
        document.getElementById('alarm_ask').src = HOST+"application/icon/light_bulb_off.ico";
        }
        });
        
    }
});


$("#action_alarm_query").click(function() {
    if(document.getElementById('alarm_query').src == (HOST+"application/icon/light_bulb_off.ico"))
    {
        $.ajax({
        type: "POST",
        url: "",
        dataType : 'json',
        data: {
               alarm : true,
               name : 'query'
        },
        success : function(json) {
        document.getElementById('alarm_query').src = HOST+"application/icon/light_bulb_on.ico";
        }
        });
        
    }
    else
    {
        $.ajax({
        type: "POST",
        url: "",
        dataType : 'json',
        data: {
               alarm : false,
               name : 'query'
        },
        success : function(json) {
        document.getElementById('alarm_query').src = HOST+"application/icon/light_bulb_off.ico";
        }
        });
        
    }
});

$("#action_alarm_search").click(function() {
    if(document.getElementById('alarm_search').src == (HOST+"application/icon/light_bulb_off.ico"))
    {
        $.ajax({
        type: "POST",
        url: "",
        dataType : 'json',
        data: {
               alarm : true,
               name : 'search'
        },
        success : function(json) {
        document.getElementById('alarm_search').src = HOST+"application/icon/light_bulb_on.ico";
        }
        });
        
    }
    else
    {
        $.ajax({
        type: "POST",
        url: "",
        dataType : 'json',
        data: {
               alarm : false,
               name : 'search'
        },
        success : function(json) {
        document.getElementById('alarm_search').src = HOST+"application/icon/light_bulb_off.ico";
        }
        });
        
    }
});


$("#action_alarm_settings").click(function() {
    if(document.getElementById('alarm_settings').src == (HOST+"application/icon/light_bulb_off.ico"))
    {
        $.ajax({
        type: "POST",
        url: "",
        dataType : 'json',
        data: {
               alarm : true,
               name : 'settings'
        },
        success : function(json) {
        document.getElementById('alarm_settings').src = HOST+"application/icon/light_bulb_on.ico";
        }
        });
        
    }
    else
    {
        $.ajax({
        type: "POST",
        url: "",
        dataType : 'json',
        data: {
               alarm : false,
               name : 'settings'
        },
        success : function(json) {
        document.getElementById('alarm_settings').src = HOST+"application/icon/light_bulb_off.ico";
        }
        });
        
    }
});


$("#action_alarm_login").click(function() {
    if(document.getElementById('alarm_login').src == (HOST+"application/icon/light_bulb_off.ico"))
    {
        $.ajax({
        type: "POST",
        url: "",
        dataType : 'json',
        data: {
               alarm : true,
               name : 'login'
        },
        success : function(json) {
        document.getElementById('alarm_login').src = HOST+"application/icon/light_bulb_on.ico";
        }
        });
        
    }
    else
    {
        $.ajax({
        type: "POST",
        url: "",
        dataType : 'json',
        data: {
               alarm : false,
               name : 'login'
        },
        success : function(json) {
        document.getElementById('alarm_login').src = HOST+"application/icon/light_bulb_off.ico";
        }
        });
        
    }
});


$("#action_alarm_register").click(function() {
    if(document.getElementById('alarm_register').src == (HOST+"application/icon/light_bulb_off.ico"))
    {
        $.ajax({
        type: "POST",
        url: "",
        dataType : 'json',
        data: {
               alarm : true,
               name : 'register'
        },
        success : function(json) {
        document.getElementById('alarm_register').src = HOST+"application/icon/light_bulb_on.ico";
        }
        });
        
    }
    else
    {
        $.ajax({
        type: "POST",
        url: "",
        dataType : 'json',
        data: {
               alarm : false,
               name : 'register'
        },
        success : function(json) {
        document.getElementById('alarm_register').src = HOST+"application/icon/light_bulb_off.ico";
        }
        });
        
    }
});


$("#action_alarm_report").click(function() {
    if(document.getElementById('alarm_report').src == (HOST+"application/icon/light_bulb_off.ico"))
    {
        $.ajax({
        type: "POST",
        url: "",
        dataType : 'json',
        data: {
               alarm : true,
               name : 'report'
        },
        success : function(json) {
        document.getElementById('alarm_report').src = HOST+"application/icon/light_bulb_on.ico";
        }
        });
        
    }
    else
    {
        $.ajax({
        type: "POST",
        url: "",
        dataType : 'json',
        data: {
               alarm : false,
               name : 'report'
        },
        success : function(json) {
        document.getElementById('alarm_report').src = HOST+"application/icon/light_bulb_off.ico";
        }
        });
        
    }
});

$("#action_updateGlobal").click(function() { 
var progress = 0;
var chop = 50;
var colorchop = 127;
var r = 0;
document.getElementById('loader1').style.backgroundColor= "rgb(0,0,0)";
    for(i = 1; i<=2; i++){
        $.ajax({
        type: "POST",
        url: "",
        dataType : 'json',
        data: {
               update : 'GLOBAL',
               number : i
        },
        success : function(json) {
        progress = progress + chop;
        r = r + colorchop;
        document.getElementById('loader1').style.backgroundColor= "rgb(" + r + "," + r + "," + r + ")";
        document.getElementById('loader1').innerHTML = progress + ' %';
        }
        });
    }
});

$("#action_updateLocal").click(function() { 
var progress = 0;
var chop = 0.38;
var colorchop = 1;
var r = 0;
document.getElementById('loader2').style.backgroundColor= "rgb(0,0,0)";
    for(i = 1; i<=261; i++){
        $.ajax({
        type: "POST",
        url: "",
        dataType : 'json',
        data: {
               update : 'LOCAL',
               number : i
        },
        success : function(json) {
        progress = progress + chop;
        var show = Math.round(progress * 100) / 100 ;
        r = r + colorchop;
        if(r > 255) r=255;
        document.getElementById('loader2').style.backgroundColor= "rgb(" + r + "," + r + "," + r + ")";
        document.getElementById('loader2').innerHTML = show + ' %';
        if(show == 99.18) document.getElementById('loader2').innerHTML = '100 %';
        }
        });
    }
    
});

});