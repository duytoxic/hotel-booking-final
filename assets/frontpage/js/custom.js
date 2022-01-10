$(window).scroll(function () {
  if ($(this).scrollTop() > 175) {
    $(".header_area").addClass("navbar_fixed");
    $(".header_area").css("position", "absolute");
  } else {
    $(".header_area").removeClass("navbar_fixed");
    $(".header_area").css("position", "static");
  }
});
