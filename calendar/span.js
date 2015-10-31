$("#spanhovering").hover(function(event) {
    $("#divtoshow").css({top: event.clientY}).show();
}, function() {
    $("#divtoshow").hide();
});