

$('#slider_home').slippry({

  
  slippryWrapper: '<div class="sy-box portfolio-slider" />', // wrapper to wrap everything, including pager
   // options
  adaptiveHeight: false, // height of the sliders adapts to current slide
  start: 'random', // num (starting from 1), random
 
  captionsSrc: 'li',
  captions: 'custom', // Position: overlay, below, custom, false
  

  // transitions
  transition: 'fade', // fade, horizontal, kenburns, false
  easing: 'linear', // easing to use in the animation [(see... [jquery www])]
  

  // slideshow
  auto: false




});