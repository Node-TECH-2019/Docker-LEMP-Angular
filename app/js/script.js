$(function () {
  $("#slick")
    .on("init", function (event, slick) {
      $(this).append(
        '<div class="slick-counter"><span class="current"></span> / <span class="total"></span></div>'
      );
      $(".current").text(slick.currentSlide + 1);
      $(".total").text(slick.slideCount);
    })
    .slick({
      autoplay: true,
      autoplaySpeed: 3000,
      infinite: true,
      arrows: true,
    })
    .on("beforeChange", function (event, slick, currentSlide, nextSlide) {
      $(".current").text(nextSlide + 1);
    });
});
