$(function () {
  $(".menu-trigger").on("click", function () {
    $(this).toggleClass("active");
    $("#mobile").toggleClass("active");

    if ($(this).hasClass("active")) {
      $(".globalMenuSp").addClass("active");
    } else {
      $(".globalMenuSp").removeClass("active");
    }

    $(".globalMenuSp_link").on("click", function () {
      $("#mobile").removeClass("active");
      $(".menu-trigger").removeClass("active");
      $(".globalMenuSp").removeClass("active");
    });
  });
});