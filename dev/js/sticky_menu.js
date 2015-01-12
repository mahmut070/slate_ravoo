$(document).ready(function() {
  var stickyNavTop = $('.full-bg-menu').offset().top;

  var stickyNav = function() {
    var scrollTop = $(window).scrollTop();

    if (scrollTop > stickyNavTop) {
      $('.full-bg-menu').addClass('sticky')

    } else {
      $('.full-bg-menu').removeClass('sticky');

    }
  };

  stickyNav();

  $(window).scroll(function() {
    stickyNav();
  });
});
