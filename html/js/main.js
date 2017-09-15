jQuery(function($) {

  $('body').mCustomScrollbar({
    mouseWheel: {preventDefault: false},
    contentTouchScroll: false,
    documentTouchScroll: false,
    theme: 'minimal-dark',
  });

  $('.custom-scroll').mCustomScrollbar({theme: 'minimal-dark'});

});
