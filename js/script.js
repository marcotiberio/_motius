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

$(document).ready(function () {
    $(".filter .all").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $(".article-centrale").fadeIn();
    });
});

$(document).ready(function () {
    $(".filter .artificial_intelligence").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $("#primary article:not([class*='artificial_intelligence'])").fadeOut();
    });
});

$(document).ready(function () {
    $(".filter .augmented_and_virtual_reality").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $("#primary article:not([class*='augmented_and_virtual_reality'])").fadeOut();
    });
});

$(document).ready(function () {
    $(".filter .internet_of_things").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $("#primary article:not([class*='internet_of_things'])").fadeOut();
    });
});

$(document).ready(function () {
    $(".filter .chatbots").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $("#primary article:not([class*='chatbots'])").fadeOut();
    });
});

$(document).ready(function () {
    $(".filter .additive_manufacturing").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $("#primary article:not([class*='additive_manufacturing'])").fadeOut();
    });
});

$(document).ready(function () {
    $(".filter .robotics").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $("#primary article:not([class*='robotics'])").fadeOut();
    });
});

$(document).ready(function () {
    $(".filter .user_centric_design").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $("#primary article:not([class*='user_centric_design'])").fadeOut();
    });
});

$(document).ready(function () {
    $(".filter .app_and_web_development").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $("#primary article:not([class*='app_and_web_development'])").fadeOut();
    });
});

$(document).ready(function () {
    $(".filter .data_science").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $("#primary article:not([class*='data_science'])").fadeOut();
    });
});

$(document).ready(function () {
    $(".filter .blockchain").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $("#primary article:not([class*='blockchain'])").fadeOut();
    });
});

$(document).ready(function () {
    $(".filter .embedded_development").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $("#primary article:not([class*='embedded_development'])").fadeOut();
    });
});

// Filter Insights

$(document).ready(function () {
    $(".filter .all").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $(".article-centrale").fadeIn();
    });
});

$(document).ready(function () {
    $(".filter .cheat_sheet").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $("#primary article:not([class*='cheat_sheet'])").fadeOut();
    });
});

$(document).ready(function () {
    $(".filter .toolbox").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $("#primary article:not([class*='toolbox'])").fadeOut();
    });
});

// Timeline Switch

$(document).ready(function(){
    $("#switchTimelineleft").click(function(){
        $("#switchTimelineleft").animate({
            opacity: "1",
        }, 10);
        $("#timelineLeft").animate({
            opacity: "1",
        }, 10);
        $("#switchTimelineright").animate({
            opacity: "0.2",
        }, 10);
        $("#timelineRight").animate({
            opacity: "0",
        }, 10);
    });
});

$(document).ready(function(){
    $("#switchTimelineright").click(function(){
        $("#switchTimelineright").animate({
            opacity: "1",
        }, 10);
        $("#timelineRight").animate({
            opacity: "1",
        }, 10);
        $("#timelineLeft").animate({
            opacity: "0",
        }, 10);
        $("#switchTimelineleft").animate({
            opacity: "0.2",
        }, 10);
    });
});