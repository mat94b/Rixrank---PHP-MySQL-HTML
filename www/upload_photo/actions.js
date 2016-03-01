var w=300;
var h=400;
$(document).ready(function(){

$('#box').draggable({containment: '#container'});

$('#plus').click(function(){
 var box = $('#box').offset();
    var container = $('#container').offset();

    var y = box.top - container.top;
    var x = box.left - container.left;
if (  document.getElementById('container').offsetWidth > x + w + 15  && document.getElementById('container').offsetHeight > (y + h + 20) )  {
w=w+15;
h=h+20;
document.getElementById('box').style.width=w;
document.getElementById('box').style.height=h;
}
});

$('#minus').click(function(){
if (w > 300){
w=w-15;
h=h-20;
document.getElementById('box').style.width=w;
document.getElementById('box').style.height=h;

}
});

$('#up').click(function(){
    var box = $('#box').offset();
    var container = $('#container').offset();

    var y = box.top - container.top;
if (y > 10){
var top= y -10;
document.getElementById('box').style.top=top;
}
});

$('#down').click(function(){
    var box = $('#box').offset();
    var container = $('#container').offset();

    var y = box.top - container.top;
if ( y + h < document.getElementById('container').offsetHeight - 10){
var top= y + 10;
document.getElementById('box').style.top=top;
}
});

$('#left').click(function(){
    var box = $('#box').offset();
    var container = $('#container').offset();

    var x = box.left - container.left;
if ( x > 10){
var left= x - 10;
document.getElementById('box').style.left=left;
}
});

$('#right').click(function(){
    var box = $('#box').offset();
    var container = $('#container').offset();

    var x = box.left - container.left;
if ( x + w < document.getElementById('container').offsetWidth - 10){
var left= x + 10;
document.getElementById('box').style.left=left;
}
});

});
