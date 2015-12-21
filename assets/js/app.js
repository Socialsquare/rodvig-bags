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

var list = document.getElementsByClassName('item');

for (var i = 0; i < list.length; i++) {
  var src = list[i].getAttribute('data-image-src');
  list[i].style.backgroundImage="url('" + src + "')";
}
