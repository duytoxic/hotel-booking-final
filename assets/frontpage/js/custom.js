$(window).scroll(function () {
  // if ($(this).scrollTop() > 200) {
  //   $(".header_area").addClass("navbar_fixed");
  //   $(".header_area").css("position", "absolute");
  // } else {
  //   $(".header_area").removeClass("navbar_fixed");
  //   $(".header_area").css("position", "static");
  // }
});

$(document).ready(() => {
  $('.btn--close--message').click(function() {
    $('.alert--message').css("display", "none");
  })
})
