// Cube Animations

ScrollTrigger.defaults({
    markers:false
  })
  
  var points = gsap.utils.toArray('.home .point');
  var indicators = gsap.utils.toArray('.indicator');
  
  var height = 100 * points.length;
  
  gsap.set('.indicators', {display: "flex"});
  
  var tl = gsap.timeline({
    duration: points.length,
    scrollTrigger: {
      trigger: ".home #blockScroll",
      start: "top center",
      end: "200%",
      scrub: true,
      markers: false,
      id: "points",
    }
  })
  
  var pinner = gsap.timeline({
    scrollTrigger: {
      trigger: ".home  #blockScroll .wrapper",
      start: "top top",
      end: "300%",
      scrub: true,
      pin: ".home #blockScroll .wrapper",
      pinSpacing: true,
      id: "pinning",
      markers: false
    }
  })

  function fullscreenListener() {
    const state =
      document.fullScreen ||
      document.mozFullScreen ||
      document.webkitIsFullScreen;
    
    if (!state) {
      ScrollTrigger.config({ autoRefreshEvents: "visibilitychange,DOMContentLoaded,load,resize" });
    }
  }
  
  
  
  points.forEach(function(elem, i) {
    gsap.set(elem, {position: "absolute", top: 0});
  
    tl.to(indicators[i], {backgroundColor: "orange", duration: 0.25}, i)
    tl.from(elem.querySelector('img'), {autoAlpha:0}, i)
    tl.from(elem.querySelector('article'), {autoAlpha:0, translateY: 100}, i)
    
    if (i != points.length-1) {
      tl.to(indicators[i], {backgroundColor: "#adadad", duration: 0.25}, i+0.75)
      tl.to(elem.querySelector('article'), {autoAlpha:0, translateY: -100}, i + 0.75)
      tl.to(elem.querySelector('img'), {autoAlpha:0}, i + 0.75)
    }
    
  });


// Cake Animations

ScrollTrigger.defaults({
  markers:false
})

var points = gsap.utils.toArray('.page-template-about .point');
var indicators = gsap.utils.toArray('.indicator');

var height = 100 * points.length;

gsap.set('.indicators', {display: "flex"});

var tl = gsap.timeline({
  duration: points.length,
  scrollTrigger: {
    trigger: ".page-template-about #blockScroll",
    start: "top center",
    end: "300%",
    scrub: true,
    markers: false,
    id: "points",
  }
})

var pinner = gsap.timeline({
  scrollTrigger: {
    trigger: ".page-template-about  #blockScroll .wrapper",
    start: "top top",
    end: "400%",
    scrub: true,
    pin: ".page-template-about #blockScroll .wrapper",
    pinSpacing: true,
    id: "pinning",
    markers: false
  }
})

function fullscreenListener() {
  const state =
    document.fullScreen ||
    document.mozFullScreen ||
    document.webkitIsFullScreen;
  
  if (!state) {
    ScrollTrigger.config({ autoRefreshEvents: "visibilitychange,DOMContentLoaded,load,resize" });
  }
}



points.forEach(function(elem, i) {
  gsap.set(elem, {position: "absolute", top: 0});

  tl.to(indicators[i], {backgroundColor: "orange", duration: 0.25}, i)
  tl.from(elem.querySelector('img'), {autoAlpha:0}, i)
  tl.from(elem.querySelector('article'), {autoAlpha:0, translateY: 100}, i)
  
  if (i != points.length-1) {
    tl.to(indicators[i], {backgroundColor: "#adadad", duration: 0.25}, i+0.75)
    tl.to(elem.querySelector('article'), {autoAlpha:0, translateY: -100}, i + 0.75)
    tl.to(elem.querySelector('img'), {autoAlpha:0}, i + 0.75)
  }
  
});
  


// Menu Hide/Show

// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('header').outerHeight();

$(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();
    
    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $('.site-header').removeClass('site-header-down',  'site-header-up').addClass('site-header-up', 'transparent');
        $('.site-header-down').addClass('site-header-up', 'transparent');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('.site-header').removeClass('site-header-up').addClass('site-header-down');
        }
    }
    
    lastScrollTop = st;
}

$(window).on("scroll", function() {
  if($(window).scrollTop() > 1) {
      $(".site-header-down").removeClass("transparent");
  } else {
      //remove the background property so it comes transparent again (defined in your css)
     $(".site-header-down").addClass("transparent");
  }
});


// Swiper Clients Home

var swiper = new Swiper('.home .swiper-container', {
    spaceBetween: 30,
    effect: 'fade',
    centeredSlides: true,
    autoplay: {
    delay: 4000,
    disableOnInteraction: false,
    },
    pagination: {
    el: '.swiper-pagination',
    clickable: true,
    },
    navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
    },
});

// Swiper Clients Companies

var swiper = new Swiper('.page-template-companies .swiper-container', {
    spaceBetween: 30,
    effect: 'fade',
    centeredSlides: true,
    autoplay: {
    delay: 4000,
    disableOnInteraction: false,
    },
    pagination: {
    el: '.swiper-pagination',
    clickable: true,
    },
    navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
    },
});


// Background Crossfade Companies

$(window).scroll(function() {
  
    // selectors
    var $window = $(window),
        $body = $('.page-template-companies'),
        $panel = $('.panel');
    
    // Change 33% earlier than scroll position so colour is there when you arrive.
    var scroll = $window.scrollTop() + ($window.height() / 3);
   
    $panel.each(function () {
      var $this = $(this);
      
      // if position is within range of this panel.
      // So position of (position of top of div <= scroll position) && (position of bottom of div > scroll position).
      // Remember we set the scroll to 33% earlier in scroll var.
      if ($this.position().top <= scroll && $this.position().top + $this.height() > scroll) {
            
        // Remove all classes on body with color-
        $body.removeClass(function (index, css) {
          return (css.match (/(^|\s)color-\S+/g) || []).join(' ');
        });
         
        // Add class of currently active div
        $body.addClass('color-' + $(this).data('color'));
      }
    });    
    
  }).scroll();



// Background Crossfade Talents

$(window).scroll(function() {
  
    // selectors
    var $window = $(window),
        $body = $('.page-template-talents'),
        $panel = $('.panel');
    
    // Change 33% earlier than scroll position so colour is there when you arrive.
    var scroll = $window.scrollTop() + ($window.height() / 3);
   
    $panel.each(function () {
      var $this = $(this);
      
      // if position is within range of this panel.
      // So position of (position of top of div <= scroll position) && (position of bottom of div > scroll position).
      // Remember we set the scroll to 33% earlier in scroll var.
      if ($this.position().top <= scroll && $this.position().top + $this.height() > scroll) {
            
        // Remove all classes on body with color-
        $body.removeClass(function (index, css) {
          return (css.match (/(^|\s)color-\S+/g) || []).join(' ');
        });
         
        // Add class of currently active div
        $body.addClass('color-' + $(this).data('color'));
      }
    });    
    
  }).scroll();


// Companies Timeline

$(document).ready(function(){

  gsap.registerPlugin(ScrollTrigger);
  gsap.utils.toArray('.companyTimeline').forEach((el) =>{
      const tl = gsap.timeline({
              scrollTrigger: {
                  trigger: el,
                  scrub: true,
                  start: "top 90%",
                  end: "bottom 90%",
                  markers: true,
              }
          });
          
          tl.to(el.querySelectorAll('.svgDot'), {fill: "#28B9DA", stroke: "#28B9DA", duration: 1, ease: "power3.in"})
          tl.to(el.querySelectorAll('.left'), {opacity: 1, duration: 1, ease: "none"}) 
          tl.to(el.querySelectorAll('h2'), {color: "#D7DFEB", duration: 1, ease: "none"}, "-=1") 
          tl.to(el.querySelectorAll('.textAppear'), {opacity: 1, duration: 1, ease: "none"}, "-=1")
              if ($(window).width() > 414 && $(window).height() > 414) { 
                  tl.to(el.querySelectorAll('.right'), {backgroundImage: "linear-gradient(to bottom, #28B9DA, #D7DFEB)", duration: 1, ease: "none"}, "-=1")
              }
              if ($(window).width() > 414 && $(window).height() > 414) { 
                tl.to(el.querySelectorAll('.right'), {backgroundImage: "linear-gradient(to bottom, #28B9DA, #28B9DA)", duration: 1, ease: "none"}) 
            }       
  });
});


// Timeline Switch

$(document).ready(function(){
  $('#switchTimelineLeft').click(function(){    
      $('#scrollLineLeft').show();
      $('#scrollLineRight').hide();
      $("#switchTimelineLeft").removeClass('switch-white');
      $("#switchTimelineLeft").addClass('switch-blue');
      $("#switchTimelineRight").removeClass('switch-blue');
      $("#switchTimelineRight").addClass('switch-white');
  })
});

$(document).ready(function(){
  $('#switchTimelineRight').click(function(){    
      $('#scrollLineRight').show();
      $('#scrollLineLeft').hide();
      $("#switchTimelineRight").removeClass('switch-white');
      $("#switchTimelineRight").addClass('switch-blue');
      $("#switchTimelineLeft").removeClass('switch-blue');
      $("#switchTimelineLeft").addClass('switch-white');
      ScrollTriggerTimeline2()
  })
});


// Talents Timelines

$(document).ready(function(){
  gsap.registerPlugin(ScrollTrigger);
  ScrollTriggerTimeline();
});

function ScrollTriggerTimeline() {
    gsap.utils.toArray('.talentsTimelineLeft').forEach((el) =>{
      const tl = gsap.timeline({
              scrollTrigger: {
                  id: 'scrollTimeline1',
                  trigger: el,
                  scrub: true,
                  start: "top 100%",
                  end: "bottom 100%",
                  markers: false
              }
          });
          
          tl.to(el.querySelectorAll('.svgDot'), {fill: "#28B9DA", stroke: "transparent", duration: 1, ease: "power3.in"})
          tl.to(el.querySelectorAll('.left'), {opacity: 1, duration: 1, ease: "none"}) 
          tl.to(el.querySelectorAll('h3'), {color: "#D7DFEB", duration: 1, ease: "none"}, "-=1") 
          tl.to(el.querySelectorAll('.textAppear'), {opacity: 1, duration: 1, ease: "none"}, "-=1")
              if ($(window).width() > 414 && $(window).height() > 414) { 
                  tl.to(el.querySelectorAll('.right'), {backgroundImage: "linear-gradient(to bottom, #28B9DA, #D7DFEB)", duration: 1, ease: "none"}, "-=1")
              }            
              if ($(window).width() > 414 && $(window).height() > 414) { 
                  tl.to(el.querySelectorAll('.right'), {backgroundImage: "linear-gradient(to bottom, #28B9DA, #28B9DA)", duration: 1, ease: "none"}) 
              }
  });
}

function ScrollTriggerTimeline2() {
  gsap.registerPlugin(ScrollTrigger);

    gsap.utils.toArray('.talentsTimelineRight').forEach((el) =>{
      const tl2 = gsap.timeline({
              scrollTrigger: {
                  id: 'scrollTimeline2',
                  trigger: el,
                  scrub: true,
                  start: "top 100%",
                  end: "bottom 100%",
                  markers: false
              }
          });

          tl2.to(el.querySelectorAll('.svgDot'), {fill: "#28B9DA", stroke: "transparent", duration: 1, ease: "power3.in"})
          tl2.to(el.querySelectorAll('.left'), {opacity: 1, duration: 1, ease: "none"}) 
          tl2.to(el.querySelectorAll('h3'), {color: "#D7DFEB", duration: 1, ease: "none"}, "-=1") 
          tl2.to(el.querySelectorAll('.textAppear'), {opacity: 1, duration: 1, ease: "none"}, "-=1")
              if ($(window).width() > 414 && $(window).height() > 414) { 
                  tl2.to(el.querySelectorAll('.right'), {backgroundImage: "linear-gradient(to bottom, #28B9DA, #D7DFEB)", duration: 1, ease: "none"}, "-=1")
              }            
              if ($(window).width() > 414 && $(window).height() > 414) { 
                  tl2.to(el.querySelectorAll('.right'), {backgroundImage: "linear-gradient(to bottom, #28B9DA, #28B9DA)", duration: 1, ease: "none"}) 
              }
  });
}


// About Timeline

$(document).ready(function(){

  gsap.registerPlugin(ScrollTrigger);
  gsap.utils.toArray('.aboutTimeline').forEach((el) =>{
      const tl = gsap.timeline({
              scrollTrigger: {
                  trigger: el,
                  scrub: true,
                  start: "top 100%",
                  end: "bottom 100%",
                  markers: false
              }
          });
          
          tl.to(el.querySelectorAll('.svgDot'), {fill: "#28B9DA", stroke: "transparent", duration: 1, ease: "power3.in"})
          tl.to(el.querySelectorAll('.left'), {opacity: 1, duration: 1, ease: "none"}) 
          tl.to(el.querySelectorAll('h2'), {color: "#D7DFEB", duration: 1, ease: "none"}, "-=1") 
          tl.to(el.querySelectorAll('.textAppear'), {opacity: 1, duration: 1, ease: "none"}, "-=1")
              if ($(window).width() > 414 && $(window).height() > 414) { 
                  tl.to(el.querySelectorAll('.right'), {backgroundImage: "linear-gradient(to bottom, #28B9DA, #D7DFEB)", duration: 1, ease: "none"}, "-=1")
              }            
              if ($(window).width() > 414 && $(window).height() > 414) { 
                  tl.to(el.querySelectorAll('.right'), {backgroundImage: "linear-gradient(to bottom, #28B9DA, #28B9DA)", duration: 1, ease: "none"}) 
              }
  });
});