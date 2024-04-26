// Initialize carousel with 2 second interval
$('#myCarousel').carousel({
    interval: 2000
  });
  
  // Later update interval to 5 seconds
  let carousel = $('#myCarousel').data('bs.carousel');
  carousel.config.interval = 5000;
  