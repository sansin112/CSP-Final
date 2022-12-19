
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

// type="text/javascript">
// alert("Welcome to our Fan Page! Here you can learn all about Taylor Swift and her amazing accomplishments.");