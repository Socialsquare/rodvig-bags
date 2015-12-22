$(document).foundation();

$(document).ready(function() {
  $('.owl-carousel').owlCarousel({
    items: 1,
    loop: true,
    autoplay: true,
    autoplayTimeout: 4000,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn'
  })
});

var hashTagActive = "";
$(".scroll").click(function(event) {
  if (hashTagActive != this.hash) { //this will prevent if the user click several times the same link to freeze the scroll.
    event.preventDefault();
    //calculate destination place
    var dest = 0;
    if ($(this.hash).offset().top > $(document).height() - $(window).height()) {
      dest = $(document).height() - $(window).height();
    } else {
      dest = $(this.hash).offset().top;
    }
    //go to destination
    $('html,body').animate({
      scrollTop: dest
    }, 500, 'swing');
    hashTagActive = this.hash;
  }
});
