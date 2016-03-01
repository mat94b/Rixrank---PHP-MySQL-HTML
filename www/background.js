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
