$(".material").click(function(e) {
    var $this_offset = $(this).offset(),
    posX = e.pageX - $this_offset.left;
    posY = e.pageY - $this_offset.top;
    $(this).children(".ripple").remove();
    $(this).append("<div class='ripple'></div>");
    $(this).children(".ripple").css({"left" : posX + "px", "top" : posY + "px"});
});
