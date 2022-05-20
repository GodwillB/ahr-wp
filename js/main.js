$('.owl-carousel').owlCarousel({
  loop:true,
  margin: 100,
  autoplay: true,
  autoplayTimeout : 1200,

  // nav:true,
  responsive:{
      0:{
          items:2
      },
      600:{
          items:3
      },
      1000:{
          items:5
      }
  }
})