$(window).scroll(function() {
  0 < $(this).scrollTop()
    ? $(".my-nav").addClass("fixed-me")
    : $(".my-nav").removeClass("fixed-me");
});
