
$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    console.log("scroll pos:" + scroll);
    if (scroll > 251.5) {
        $("#my-header").addClass("active");
    }
    else {
        $("#my-header").removeClass("active");
    }
});