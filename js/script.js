ScrollTrigger.defaults({
    markers:false
  })
  
  var points = gsap.utils.toArray('.point');
  var indicators = gsap.utils.toArray('.indicator');
  
  var height = 100 * points.length;
  
  gsap.set('.indicators', {display: "flex"});
  
  var tl = gsap.timeline({
    duration: points.length,
    scrollTrigger: {
      trigger: "#blockScroll",
      start: "top center",
      end: "+="+height+"%",
      scrub: true,
      markers: false,
      id: "points",
    }
  })
  
  var pinner = gsap.timeline({
    scrollTrigger: {
      trigger: "#blockScroll .wrapper",
      start: "top top",
      end: "+="+height+"%",
      scrub: true,
      pin: "#blockScroll .wrapper",
      pinSpacing: true,
      id: "pinning",
      markers: false
    }
  })
  
  
  
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



// Filter Success Stories

// All

$(document).ready(function () {
    $(".filter .all").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $(".article-centrale").fadeIn();
    });
});

// Artifical Intelligence

$(document).ready(function () {
    $(".filter .artificial_intelligence").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $("#primary article:not([class*='artificial_intelligence'])").fadeOut();
    });
});

$(document).ready(function () {	
    if (window.location.href.indexOf("#artificial-intelligence") > -1) {
        $(".filter .artificial_intelligence").siblings().removeClass('active');
        $(".filter .artificial_intelligence").addClass('active');
        $("#primary article:not([class*='artificial_intelligence'])").fadeOut();
    }
});

// Augmented and Virtual Reality

$(document).ready(function () {
    $(".filter .augmented_and_virtual_reality").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $("#primary article:not([class*='augmented_and_virtual_reality'])").fadeOut();
    });
});

$(document).ready(function () {	
    if (window.location.href.indexOf("#augmented-and-virtual-reality") > -1) {
        $(".filter .augmented_and_virtual_reality").siblings().removeClass('active');
        $(".filter .augmented_and_virtual_reality").addClass('active');
        $("#primary article:not([class*='augmented_and_virtual_reality'])").fadeOut();
    }
});

// Internet of Things

$(document).ready(function () {
    $(".filter .internet_of_things").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $("#primary article:not([class*='internet_of_things'])").fadeOut();
    });
});

$(document).ready(function () {	
    if (window.location.href.indexOf("#internet-of-things") > -1) {
        $(".filter .internet_of_things").siblings().removeClass('active');
        $(".filter .internet_of_things").addClass('active');
        $("#primary article:not([class*='internet_of_things'])").fadeOut();
    }
});

// Chatbots

$(document).ready(function () {
    $(".filter .chatbots").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $("#primary article:not([class*='chatbots'])").fadeOut();
    });
});

$(document).ready(function () {	
    if (window.location.href.indexOf("#chatbots") > -1) {
        $(".filter .chatbots").siblings().removeClass('active');
        $(".filter .chatbots").addClass('active');
        $("#primary article:not([class*='chatbots'])").fadeOut();
    }
});

// Additive Manufacturing

$(document).ready(function () {
    $(".filter .additive_manufacturing").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $("#primary article:not([class*='additive_manufacturing'])").fadeOut();
    });
});

$(document).ready(function () {	
    if (window.location.href.indexOf("#additive-manufacturing") > -1) {
        $(".filter .additive_manufacturing").siblings().removeClass('active');
        $(".filter .additive_manufacturing").addClass('active');
        $("#primary article:not([class*='additive_manufacturing'])").fadeOut();
    }
});

// Autonomous Driving

$(document).ready(function () {
    $(".filter .autonomous_driving").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $("#primary article:not([class*='autonomous_driving'])").fadeOut();
    });
});

$(document).ready(function () {	
    if (window.location.href.indexOf("#autonomous-driving") > -1) {
        $(".filter .autonomous_driving").siblings().removeClass('active');
        $(".filter .autonomous_driving").addClass('active');
        $("#primary article:not([class*='autonomous_driving'])").fadeOut();
    }
});

// Robotics

$(document).ready(function () {
    $(".filter .robotics").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $("#primary article:not([class*='robotics'])").fadeOut();
    });
});

$(document).ready(function () {	
    if (window.location.href.indexOf("#robotics") > -1) {
        $(".filter .robotics").siblings().removeClass('active');
        $(".filter .robotics").addClass('active');
        $("#primary article:not([class*='robotics'])").fadeOut();
    }
});

// User Centric Design

$(document).ready(function () {
    $(".filter .user_centric_design").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $("#primary article:not([class*='user_centric_design'])").fadeOut();
    });
});

$(document).ready(function () {	
    if (window.location.href.indexOf("#user-centric-design") > -1) {
        $(".filter .user_centric_design").siblings().removeClass('active');
        $(".filter .user_centric_design").addClass('active');
        $("#primary article:not([class*='user_centric_design'])").fadeOut();
    }
});

// App and Web Development

$(document).ready(function () {
    $(".filter .app_and_web_development").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $("#primary article:not([class*='app_and_web_development'])").fadeOut();
    });
});

$(document).ready(function () {	
    if (window.location.href.indexOf("#app-and-web-development") > -1) {
        $(".filter .app_and_web_development").siblings().removeClass('active');
        $(".filter .app_and_web_development").addClass('active');
        $("#primary article:not([class*='app_and_web_development'])").fadeOut();
    }
});

// Data Science

$(document).ready(function () {
    $(".filter .data_science").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $("#primary article:not([class*='data_science'])").fadeOut();
    });
});

$(document).ready(function () {	
    if (window.location.href.indexOf("#data-science") > -1) {
        $(".filter .data_science").siblings().removeClass('active');
        $(".filter .data_science").addClass('active');
        $("#primary article:not([class*='data_science'])").fadeOut();
    }
});

// Blockchain

$(document).ready(function () {
    $(".filter .blockchain").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $("#primary article:not([class*='blockchain'])").fadeOut();
    });
});

$(document).ready(function () {	
    if (window.location.href.indexOf("#blockchain") > -1) {
        $(".filter .blockchain").siblings().removeClass('active');
        $(".filter .blockchain").addClass('active');
        $("#primary article:not([class*='blockchain'])").fadeOut();
    }
});

// Embedded Development

$(document).ready(function () {
    $(".filter .embedded_development").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $("#primary article:not([class*='embedded_development'])").fadeOut();
    });
});

$(document).ready(function () {	
    if (window.location.href.indexOf("#embedded-development") > -1) {
        $(".filter .embedded_development").siblings().removeClass('active');
        $(".filter .embedded_development").addClass('active');
        $("#primary article:not([class*='embedded_development'])").fadeOut();
    }
});



// Filter Insights

$(document).ready(function () {
    $(".filter .all").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $(".article-centrale").fadeIn();
    });
});

// Cheatsheet

$(document).ready(function () {
    $(".filter .cheat_sheet").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $("#primary article:not([class*='cheat_sheet'])").fadeOut();
    });
});

$(document).ready(function () {	
    if (window.location.href.indexOf("#cheat-sheet") > -1) {
        $(".filter .cheat_sheet").siblings().removeClass('active');
        $(".filter .cheat_sheet").addClass('active');
        $("#primary article:not([class*='cheat_sheet'])").fadeOut();
    }
});

// Toolbox

$(document).ready(function () {
    $(".filter .toolbox").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $("#primary article:not([class*='toolbox'])").fadeOut();
    });
});

$(document).ready(function () {	
    if (window.location.href.indexOf("#toolbox") > -1) {
        $(".filter .toolbox").siblings().removeClass('active');
        $(".filter .toolbox").addClass('active');
        $("#primary article:not([class*='toolbox'])").fadeOut();
    }
});






// Timeline Switch

$(document).ready(function(){
    $("#switchTimelineleft").click(function(){
        $("#switchTimelineleft").animate({
            opacity: "1",
        }, 10);
        $("#scrollLineleft").animate({
            display: "block",
        }, 10);
        $("#switchTimelineright").animate({
            opacity: "0.2",
        }, 10);
        $("#scrollLineright").animate({
            display: "none",
        }, 10);
    });
});

$(document).ready(function(){
    $("#switchTimelineright").click(function(){
        $("#switchTimelineright").animate({
            opacity: "1",
        }, 10);
        $("#scrollLineright").animate({
            display: "block",
        }, 10);
        $("#scrollLineleft").animate({
            display: "none",
        }, 10);
        $("#switchTimelineleft").animate({
            opacity: "0.2",
        }, 10);
    });
});


$(document).ready(function(){
    $("#menuToggle").click(function(){
        $("#mobile-menu").toggle(100);
    });
});

$(document).ready(function(){
    $( "#menuToggle" ).click(function() {
        $( this ).toggleClass( "is-active" );
    });
});