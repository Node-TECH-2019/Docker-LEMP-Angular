$(function () {
  var header = $("#header_bg");
  var sub_nav = $(".sub_nav_bg");
  var logo = $("#header_logo");

  $(window).on("scroll", function () {
    if ($(this).scrollTop() > 0) {
      sub_nav.removeClass("sub_nav_hide");
      header.removeClass("hide");
      header.addClass("active");
      logo.removeClass("hide");
      logo.addClass("active");
    } else {
      sub_nav.addClass("sub_nav_hide");
      header.removeClass("active");
      header.addClass("hide");
      logo.removeClass("active");
      logo.addClass("hide");
    }
  });
});
