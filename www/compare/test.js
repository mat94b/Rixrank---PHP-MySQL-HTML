$(document).ready(function(){

    $("#choice_sex").dialog({
    autoOpen: true,
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
    
    $("#male").click(function() {
    $.ajax({
        type: "POST",
        url: "test.php",
        dataType : 'json',
        data: {
               sex : 1
        },
        success : function(json) {
        location.reload();
        }
        });
    $( "#choice_sex" ).dialog( "close" );

    });
    
    $("#female").click(function() {
    $.ajax({
        type: "POST",
        url: "test.php",
        dataType : 'json',
        data: {
               sex : 0
        },
        success : function(json) {
        location.reload();
        }
        });
    $( "#choice_sex" ).dialog( "close" );
    });

});