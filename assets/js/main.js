$(document).ready(function(){
 $('.slider__inner').slick({
  arrows: false,
  dots: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
   {
    breakpoint: 768,
     settings: {
      slidesToShow: 2
     }
   },
   {
    breakpoint: 600,
     settings: {
      slidesToShow: 1
     }
   },
  ]
 });
});