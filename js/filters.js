// Filter Success Stories
// Filter Success Stories
// Filter Success Stories

// All

$(document).ready(function () {
    $(".success-stories-filter .all").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        // Show/Hide
        $(".article-centrale").show();
        // Checkbox
        $(".success-stories-filter .all #checkbox").addClass('blue-word');
        $(".success-stories-filter a:not([class*='all']) #checkbox").removeClass('blue-word');
    });
});

// Artifical Intelligence

$(document).ready(function () {
    $(".success-stories-filter .artificial_intelligence").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        // Show/Hide
        $("#primary .artificial_intelligence").show();
        $("#primary article:not([class*='artificial_intelligence'])").hide();
        // Checkbox
        $(".success-stories-filter .artificial_intelligence #checkbox").addClass('blue-word');
        $(".success-stories-filter .artificial_intelligence #checkbox circle").addClass('active');
        $(".success-stories-filter a:not([class*='artificial_intelligence']) #checkbox").removeClass('blue-word');
    });
});

$(document).ready(function () {	
    if (window.location.href.indexOf("#artificial-intelligence") > -1) {
        $(".success-stories-filter .artificial_intelligence").siblings().removeClass('active');
        $(".success-stories-filter .artificial_intelligence").addClass('active');
        $("#primary article:not([class*='artificial_intelligence'])").toggle();
        // Checkbox
        $(".success-stories-filter .artificial_intelligence #checkbox").addClass('blue-word');
        $(".success-stories-filter .artificial_intelligence #checkbox circle").addClass('active');
        $(".success-stories-filter a:not([class*='artificial_intelligence']) #checkbox").removeClass('blue-word');
    }
});

// Augmented and Virtual Reality

$(document).ready(function () {
    $(".success-stories-filter .augmented_and_virtual_reality").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        // Show/Hide
        $("#primary .augmented_and_virtual_reality").show();
        $("#primary article:not([class*='augmented_and_virtual_reality'])").hide();
        // Checkbox
        $(".success-stories-filter .augmented_and_virtual_reality #checkbox").addClass('blue-word');
        $(".success-stories-filter a:not([class*='augmented_and_virtual_reality']) #checkbox").removeClass('blue-word');
    });
});

$(document).ready(function () {	
    if (window.location.href.indexOf("#augmented-and-virtual-reality") > -1) {
        $(".success-stories-filter .augmented_and_virtual_reality").siblings().removeClass('active');
        $(".success-stories-filter .augmented_and_virtual_reality").addClass('active');
        $("#primary article:not([class*='augmented_and_virtual_reality'])").toggle();
        // Checkbox
        $(".success-stories-filter .augmented_and_virtual_reality #checkbox").addClass('blue-word');
        $(".success-stories-filter a:not([class*='augmented_and_virtual_reality']) #checkbox").removeClass('blue-word');
    }
});

// Internet of Things

$(document).ready(function () {
    $(".success-stories-filter .internet_of_things").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        // Show/Hide
        $("#primary .internet_of_things").show();
        $("#primary article:not([class*='internet_of_things'])").hide();
        // Checkbox
        $(".success-stories-filter .internet_of_things #checkbox").addClass('blue-word');
        $(".success-stories-filter a:not([class*='internet_of_things']) #checkbox").removeClass('blue-word');
    });
});

$(document).ready(function () {	
    if (window.location.href.indexOf("#internet-of-things") > -1) {
        $(".success-stories-filter .internet_of_things").siblings().removeClass('active');
        $(".success-stories-filter .internet_of_things").addClass('active');
        $("#primary article:not([class*='internet_of_things'])").toggle();
        // Checkbox
        $(".success-stories-filter .internet_of_things #checkbox").addClass('blue-word');
        $(".success-stories-filter a:not([class*='internet_of_things']) #checkbox").removeClass('blue-word');
    }
});

// Chatbots

$(document).ready(function () {
    $(".success-stories-filter .chatbots").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        // Show/Hide 
        $("#primary .chatbots").show();
        $("#primary article:not([class*='chatbots'])").hide();
        // Checkbox
        $(".success-stories-filter .chatbots #checkbox").addClass('blue-word');
        $(".success-stories-filter a:not([class*='chatbots']) #checkbox").removeClass('blue-word');
    });
});

$(document).ready(function () {	
    if (window.location.href.indexOf("#chatbots") > -1) {
        $(".success-stories-filter .chatbots").siblings().removeClass('active');
        $(".success-stories-filter .chatbots").addClass('active');
        $("#primary article:not([class*='chatbots'])").toggle();
        // Checkbox
        $(".success-stories-filter .chatbots #checkbox").addClass('blue-word');
        $(".success-stories-filter a:not([class*='chatbots']) #checkbox").removeClass('blue-word');
    }
});

// Additive Manufacturing

$(document).ready(function () {
    $(".success-stories-filter .additive_manufacturing").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        // Show/Hide
        $("#primary .additive_manufacturing").show();
        $("#primary article:not([class*='additive_manufacturing'])").hide();
        // Checkbox
        $(".success-stories-filter .additive_manufacturing #checkbox").addClass('blue-word');
        $(".success-stories-filter a:not([class*='additive_manufacturing']) #checkbox").removeClass('blue-word');
    });
});

$(document).ready(function () {	
    if (window.location.href.indexOf("#additive-manufacturing") > -1) {
        $(".success-stories-filter .additive_manufacturing").siblings().removeClass('active');
        $(".success-stories-filter .additive_manufacturing").addClass('active');
        $("#primary article:not([class*='additive_manufacturing'])").toggle();
        // Checkbox
        $(".success-stories-filter .additive_manufacturing #checkbox").addClass('blue-word');
        $(".success-stories-filter a:not([class*='additive_manufacturing']) #checkbox").removeClass('blue-word');
    }
});

// Autonomous Driving

$(document).ready(function () {
    $(".success-stories-filter .autonomous_driving").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        // Show/Hide
        $("#primary .autonomous_driving").show();
        $("#primary article:not([class*='autonomous_driving'])").hide();
        // Checkbox
        $(".success-stories-filter .autonomous_driving #checkbox").addClass('blue-word');
        $(".success-stories-filter a:not([class*='autonomous_driving']) #checkbox").removeClass('blue-word');
    });
});

$(document).ready(function () {	
    if (window.location.href.indexOf("#autonomous-driving") > -1) {
        $(".success-stories-filter .autonomous_driving").siblings().removeClass('active');
        $(".success-stories-filter .autonomous_driving").addClass('active');
        $("#primary article:not([class*='autonomous_driving'])").toggle();
        // Checkbox
        $(".success-stories-filter .autonomous_driving #checkbox").addClass('blue-word');
        $(".success-stories-filter a:not([class*='autonomous_driving']) #checkbox").removeClass('blue-word');
    }
});

// Robotics

$(document).ready(function () {
    $(".success-stories-filter .robotics").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        // Show/Hide
        $("#primary .robotics").show();
        $("#primary article:not([class*='robotics'])").hide();
        // Checkbox
        $(".success-stories-filter .robotics #checkbox").addClass('blue-word');
        $(".success-stories-filter a:not([class*='robotics']) #checkbox").removeClass('blue-word');
    });
});

$(document).ready(function () {	
    if (window.location.href.indexOf("#robotics") > -1) {
        $(".success-stories-filter .robotics").siblings().removeClass('active');
        $(".success-stories-filter .robotics").addClass('active');
        $("#primary article:not([class*='robotics'])").toggle();
        // Checkbox
        $(".success-stories-filter .robotics #checkbox").addClass('blue-word');
        $(".success-stories-filter a:not([class*='robotics']) #checkbox").removeClass('blue-word');
    }
});

// User Centric Design

$(document).ready(function () {
    $(".success-stories-filter .user_centric_design").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        // Show/Hide
        $("#primary .user_centric_design").show();
        $("#primary article:not([class*='user_centric_design'])").hide();
        // Checkbox
        $(".success-stories-filter .user_centric_design #checkbox").addClass('blue-word');
        $(".success-stories-filter a:not([class*='user_centric_design']) #checkbox").removeClass('blue-word');
    });
});

$(document).ready(function () {	
    if (window.location.href.indexOf("#user-centric-design") > -1) {
        $(".success-stories-filter .user_centric_design").siblings().removeClass('active');
        $(".success-stories-filter .user_centric_design").addClass('active');
        $("#primary article:not([class*='user_centric_design'])").toggle();
        // Checkbox
        $(".success-stories-filter .user_centric_design #checkbox").addClass('blue-word');
        $(".success-stories-filter a:not([class*='user_centric_design']) #checkbox").removeClass('blue-word');
    }
});

// App and Web Development

$(document).ready(function () {
    $(".success-stories-filter .app_and_web_development").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        // Show/Hide
        $("#primary .app_and_web_development").show();
        $("#primary article:not([class*='app_and_web_development'])").hide();
        // Checkbox
        $(".success-stories-filter .app_and_web_development #checkbox").addClass('blue-word');
        $(".success-stories-filter a:not([class*='app_and_web_development']) #checkbox").removeClass('blue-word');
    });
});

$(document).ready(function () {	
    if (window.location.href.indexOf("#app-and-web-development") > -1) {
        $(".success-stories-filter .app_and_web_development").siblings().removeClass('active');
        $(".success-stories-filter .app_and_web_development").addClass('active');
        $("#primary article:not([class*='app_and_web_development'])").toggle();
        // Checkbox
        $(".success-stories-filter .app_and_web_development #checkbox").addClass('blue-word');
        $(".success-stories-filter a:not([class*='app_and_web_development']) #checkbox").removeClass('blue-word');
    }
});

// Data Science

$(document).ready(function () {
    $(".success-stories-filter .data_science").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        // Show/Hide
        $("#primary .data_science").show();
        $("#primary article:not([class*='data_science'])").hide();
        // Checkbox
        $(".success-stories-filter .data_science #checkbox").addClass('blue-word');
        $(".success-stories-filter a:not([class*='data_science']) #checkbox").removeClass('blue-word');
    });
});

$(document).ready(function () {	
    if (window.location.href.indexOf("#data-science") > -1) {
        $(".success-stories-filter .data_science").siblings().removeClass('active');
        $(".success-stories-filter .data_science").addClass('active');
        $("#primary article:not([class*='data_science'])").toggle();
        // Checkbox
        $(".success-stories-filter .data_science #checkbox").addClass('blue-word');
        $(".success-stories-filter a:not([class*='data_science']) #checkbox").removeClass('blue-word');
    }
});

// Blockchain

$(document).ready(function () {
    $(".success-stories-filter .blockchain").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        // Show/Hide
        $("#primary .blockchain").show();
        $("#primary article:not([class*='blockchain'])").hide();
        // Checkbox
        $(".success-stories-filter .blockchain #checkbox").addClass('blue-word');
        $(".success-stories-filter a:not([class*='blockchain']) #checkbox").removeClass('blue-word');
    });
});

$(document).ready(function () {	
    if (window.location.href.indexOf("#blockchain") > -1) {
        $(".success-stories-filter .blockchain").siblings().removeClass('active');
        $(".success-stories-filter .blockchain").addClass('active');
        $("#primary article:not([class*='blockchain'])").toggle();
        // Checkbox
        $(".success-stories-filter .blockchain #checkbox").addClass('blue-word');
        $(".success-stories-filter a:not([class*='blockchain']) #checkbox").removeClass('blue-word');
    }
});

// Embedded Development

$(document).ready(function () {
    $(".success-stories-filter .embedded_development").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        // Show/Hide
        $("#primary .embedded_development").show();
        $("#primary article:not([class*='embedded_development'])").hide();
        // Checkbox
        $(".success-stories-filter .embedded_development #checkbox").addClass('blue-word');
        $(".success-stories-filter a:not([class*='embedded_development']) #checkbox").removeClass('blue-word');
    });
});

$(document).ready(function () {	
    if (window.location.href.indexOf("#embedded-development") > -1) {
        $(".success-stories-filter .embedded_development").siblings().removeClass('active');
        $(".success-stories-filter .embedded_development").addClass('active');
        $("#primary article:not([class*='embedded_development'])").toggle();
        // Checkbox
        $(".success-stories-filter .embedded_development #checkbox").addClass('blue-word');
        $(".success-stories-filter a:not([class*='embedded_development']) #checkbox").removeClass('blue-word');
    }
});



// Filter Ideas
// Filter Ideas
// Filter Ideas

// All

$(document).ready(function () {
    $(".ideas-filter .all").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        // Show/Hide
        $(".article-centrale").show();
        // Checkbox
        $(".ideas-filter .all #checkbox").addClass('blue-word');
        $(".ideas-filter a:not([class*='all']) #checkbox").removeClass('blue-word');
    });
});

// Artifical Intelligence

$(document).ready(function () {
    $(".ideas-filter .artificial_intelligence").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        // Show/Hide
        $("#secondary .artificial_intelligence").show();
        $("#secondary article:not([class*='artificial_intelligence'])").hide();
        // Checkbox
        $(".ideas-filter .artificial_intelligence #checkbox").addClass('blue-word');
        $(".ideas-filter .artificial_intelligence #checkbox circle").addClass('active');
        $(".ideas-filter a:not([class*='artificial_intelligence']) #checkbox").removeClass('blue-word');
    });
});

$(document).ready(function () {	
    if (window.location.href.indexOf("#artificial-intelligence") > -1) {
        $(".ideas-filter .artificial_intelligence").siblings().removeClass('active');
        $(".ideas-filter .artificial_intelligence").addClass('active');
        $("#secondary article:not([class*='artificial_intelligence'])").toggle();
        // Checkbox
        $(".ideas-filter .artificial_intelligence #checkbox").addClass('blue-word');
        $(".ideas-filter .artificial_intelligence #checkbox circle").addClass('active');
        $(".ideas-filter a:not([class*='artificial_intelligence']) #checkbox").removeClass('blue-word');
    }
});

// Augmented and Virtual Reality

$(document).ready(function () {
    $(".ideas-filter .augmented_and_virtual_reality").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        // Show/Hide
        $("#secondary .augmented_and_virtual_reality").show();
        $("#secondary article:not([class*='augmented_and_virtual_reality'])").hide();
        // Checkbox
        $(".ideas-filter .augmented_and_virtual_reality #checkbox").addClass('blue-word');
        $(".ideas-filter a:not([class*='augmented_and_virtual_reality']) #checkbox").removeClass('blue-word');
    });
});

$(document).ready(function () {	
    if (window.location.href.indexOf("#augmented-and-virtual-reality") > -1) {
        $(".ideas-filter .augmented_and_virtual_reality").siblings().removeClass('active');
        $(".ideas-filter .augmented_and_virtual_reality").addClass('active');
        $("#secondary article:not([class*='augmented_and_virtual_reality'])").toggle();
        // Checkbox
        $(".ideas-filter .augmented_and_virtual_reality #checkbox").addClass('blue-word');
        $(".ideas-filter a:not([class*='augmented_and_virtual_reality']) #checkbox").removeClass('blue-word');
    }
});

// Internet of Things

$(document).ready(function () {
    $(".ideas-filter .internet_of_things").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        // Show/Hide
        $("#secondary .internet_of_things").show();
        $("#secondary article:not([class*='internet_of_things'])").hide();
        // Checkbox
        $(".ideas-filter .internet_of_things #checkbox").addClass('blue-word');
        $(".ideas-filter a:not([class*='internet_of_things']) #checkbox").removeClass('blue-word');
    });
});

$(document).ready(function () {	
    if (window.location.href.indexOf("#internet-of-things") > -1) {
        $(".ideas-filter .internet_of_things").siblings().removeClass('active');
        $(".ideas-filter .internet_of_things").addClass('active');
        $("#secondary article:not([class*='internet_of_things'])").toggle();
        // Checkbox
        $(".ideas-filter .internet_of_things #checkbox").addClass('blue-word');
        $(".ideas-filter a:not([class*='internet_of_things']) #checkbox").removeClass('blue-word');
    }
});

// Chatbots

$(document).ready(function () {
    $(".ideas-filter .chatbots").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        // Show/Hide 
        $("#secondary .chatbots").show();
        $("#secondary article:not([class*='chatbots'])").hide();
        // Checkbox
        $(".ideas-filter .chatbots #checkbox").addClass('blue-word');
        $(".ideas-filter a:not([class*='chatbots']) #checkbox").removeClass('blue-word');
    });
});

$(document).ready(function () {	
    if (window.location.href.indexOf("#chatbots") > -1) {
        $(".ideas-filter .chatbots").siblings().removeClass('active');
        $(".ideas-filter .chatbots").addClass('active');
        $("#secondary article:not([class*='chatbots'])").toggle();
        // Checkbox
        $(".ideas-filter .chatbots #checkbox").addClass('blue-word');
        $(".ideas-filter a:not([class*='chatbots']) #checkbox").removeClass('blue-word');
    }
});

// Additive Manufacturing

$(document).ready(function () {
    $(".ideas-filter .additive_manufacturing").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        // Show/Hide
        $("#secondary .additive_manufacturing").show();
        $("#secondary article:not([class*='additive_manufacturing'])").hide();
        // Checkbox
        $(".ideas-filter .additive_manufacturing #checkbox").addClass('blue-word');
        $(".ideas-filter a:not([class*='additive_manufacturing']) #checkbox").removeClass('blue-word');
    });
});

$(document).ready(function () {	
    if (window.location.href.indexOf("#additive-manufacturing") > -1) {
        $(".ideas-filter .additive_manufacturing").siblings().removeClass('active');
        $(".ideas-filter .additive_manufacturing").addClass('active');
        $("#secondary article:not([class*='additive_manufacturing'])").toggle();
        // Checkbox
        $(".ideas-filter .additive_manufacturing #checkbox").addClass('blue-word');
        $(".ideas-filter a:not([class*='additive_manufacturing']) #checkbox").removeClass('blue-word');
    }
});

// Autonomous Driving

$(document).ready(function () {
    $(".ideas-filter .autonomous_driving").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        // Show/Hide
        $("#secondary .autonomous_driving").show();
        $("#secondary article:not([class*='autonomous_driving'])").hide();
        // Checkbox
        $(".ideas-filter .autonomous_driving #checkbox").addClass('blue-word');
        $(".ideas-filter a:not([class*='autonomous_driving']) #checkbox").removeClass('blue-word');
    });
});

$(document).ready(function () {	
    if (window.location.href.indexOf("#autonomous-driving") > -1) {
        $(".ideas-filter .autonomous_driving").siblings().removeClass('active');
        $(".ideas-filter .autonomous_driving").addClass('active');
        $("#secondary article:not([class*='autonomous_driving'])").toggle();
        // Checkbox
        $(".ideas-filter .autonomous_driving #checkbox").addClass('blue-word');
        $(".ideas-filter a:not([class*='autonomous_driving']) #checkbox").removeClass('blue-word');
    }
});

// Robotics

$(document).ready(function () {
    $(".ideas-filter .robotics").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        // Show/Hide
        $("#secondary .robotics").show();
        $("#secondary article:not([class*='robotics'])").hide();
        // Checkbox
        $(".ideas-filter .robotics #checkbox").addClass('blue-word');
        $(".ideas-filter a:not([class*='robotics']) #checkbox").removeClass('blue-word');
    });
});

$(document).ready(function () {	
    if (window.location.href.indexOf("#robotics") > -1) {
        $(".ideas-filter .robotics").siblings().removeClass('active');
        $(".ideas-filter .robotics").addClass('active');
        $("#secondary article:not([class*='robotics'])").toggle();
        // Checkbox
        $(".ideas-filter .robotics #checkbox").addClass('blue-word');
        $(".ideas-filter a:not([class*='robotics']) #checkbox").removeClass('blue-word');
    }
});

// User Centric Design

$(document).ready(function () {
    $(".ideas-filter .user_centric_design").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        // Show/Hide
        $("#secondary .user_centric_design").show();
        $("#secondary article:not([class*='user_centric_design'])").hide();
        // Checkbox
        $(".ideas-filter .user_centric_design #checkbox").addClass('blue-word');
        $(".ideas-filter a:not([class*='user_centric_design']) #checkbox").removeClass('blue-word');
    });
});

$(document).ready(function () {	
    if (window.location.href.indexOf("#user-centric-design") > -1) {
        $(".ideas-filter .user_centric_design").siblings().removeClass('active');
        $(".ideas-filter .user_centric_design").addClass('active');
        $("#secondary article:not([class*='user_centric_design'])").toggle();
        // Checkbox
        $(".ideas-filter .user_centric_design #checkbox").addClass('blue-word');
        $(".ideas-filter a:not([class*='user_centric_design']) #checkbox").removeClass('blue-word');
    }
});

// App and Web Development

$(document).ready(function () {
    $(".ideas-filter .app_and_web_development").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        // Show/Hide
        $("#secondary .app_and_web_development").show();
        $("#secondary article:not([class*='app_and_web_development'])").hide();
        // Checkbox
        $(".ideas-filter .app_and_web_development #checkbox").addClass('blue-word');
        $(".ideas-filter a:not([class*='app_and_web_development']) #checkbox").removeClass('blue-word');
    });
});

$(document).ready(function () {	
    if (window.location.href.indexOf("#app-and-web-development") > -1) {
        $(".ideas-filter .app_and_web_development").siblings().removeClass('active');
        $(".ideas-filter .app_and_web_development").addClass('active');
        $("#secondary article:not([class*='app_and_web_development'])").toggle();
        // Checkbox
        $(".ideas-filter .app_and_web_development #checkbox").addClass('blue-word');
        $(".ideas-filter a:not([class*='app_and_web_development']) #checkbox").removeClass('blue-word');
    }
});

// Data Science

$(document).ready(function () {
    $(".ideas-filter .data_science").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        // Show/Hide
        $("#secondary .data_science").show();
        $("#secondary article:not([class*='data_science'])").hide();
        // Checkbox
        $(".ideas-filter .data_science #checkbox").addClass('blue-word');
        $(".ideas-filter a:not([class*='data_science']) #checkbox").removeClass('blue-word');
    });
});

$(document).ready(function () {	
    if (window.location.href.indexOf("#data-science") > -1) {
        $(".ideas-filter .data_science").siblings().removeClass('active');
        $(".ideas-filter .data_science").addClass('active');
        $("#secondary article:not([class*='data_science'])").toggle();
        // Checkbox
        $(".ideas-filter .data_science #checkbox").addClass('blue-word');
        $(".ideas-filter a:not([class*='data_science']) #checkbox").removeClass('blue-word');
    }
});

// Blockchain

$(document).ready(function () {
    $(".ideas-filter .blockchain").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        // Show/Hide
        $("#secondary .blockchain").show();
        $("#secondary article:not([class*='blockchain'])").hide();
        // Checkbox
        $(".ideas-filter .blockchain #checkbox").addClass('blue-word');
        $(".ideas-filter a:not([class*='blockchain']) #checkbox").removeClass('blue-word');
    });
});

$(document).ready(function () {	
    if (window.location.href.indexOf("#blockchain") > -1) {
        $(".ideas-filter .blockchain").siblings().removeClass('active');
        $(".ideas-filter .blockchain").addClass('active');
        $("#secondary article:not([class*='blockchain'])").toggle();
        // Checkbox
        $(".ideas-filter .blockchain #checkbox").addClass('blue-word');
        $(".ideas-filter a:not([class*='blockchain']) #checkbox").removeClass('blue-word');
    }
});

// Embedded Development

$(document).ready(function () {
    $(".ideas-filter .embedded_development").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        // Show/Hide
        $("#secondary .embedded_development").show();
        $("#secondary article:not([class*='embedded_development'])").hide();
        // Checkbox
        $(".ideas-filter .embedded_development #checkbox").addClass('blue-word');
        $(".ideas-filter a:not([class*='embedded_development']) #checkbox").removeClass('blue-word');
    });
});

$(document).ready(function () {	
    if (window.location.href.indexOf("#embedded-development") > -1) {
        $(".ideas-filter .embedded_development").siblings().removeClass('active');
        $(".ideas-filter .embedded_development").addClass('active');
        $("#secondary article:not([class*='embedded_development'])").toggle();
        // Checkbox
        $(".ideas-filter .embedded_development #checkbox").addClass('blue-word');
        $(".ideas-filter a:not([class*='embedded_development']) #checkbox").removeClass('blue-word');
    }
});



// Filter Insights
// Filter Insights
// Filter Insights

$(document).ready(function () {
    $(".filter .all").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $(".article-centrale").show();
    });
});

// Cheatsheet

$(document).ready(function () {
    $(".filter .cheat_sheet").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        // Show/Hide
        $("#primary .cheat_sheet").show();
        $("#primary article:not([class*='cheat_sheet'])").hide();
        // Checkbox
        $(".filter .cheat_sheet #checkbox").addClass('blue-word');
        $(".filter a:not([class*='cheat_sheet']) #checkbox").removeClass('blue-word');
    });
});

$(document).ready(function () {	
    if (window.location.href.indexOf("#cheat-sheet") > -1) {
        $(".filter .cheat_sheet").siblings().removeClass('active');
        $(".filter .cheat_sheet").addClass('active');
        $("#primary article:not([class*='cheat_sheet'])").toggle();
    }
});

// Toolbox

$(document).ready(function () {
    $(".filter .toolbox").click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        // Show/Hide
        $("#primary .toolbox").show();
        $("#primary article:not([class*='toolbox'])").hide();
        // Checkbox
        $(".filter .toolbox #checkbox").addClass('blue-word');
        $(".filter a:not([class*='toolbox']) #checkbox").removeClass('blue-word');
    });
});

$(document).ready(function () {	
    if (window.location.href.indexOf("#toolbox") > -1) {
        $(".filter .toolbox").siblings().removeClass('active');
        $(".filter .toolbox").addClass('active');
        $("#primary article:not([class*='toolbox'])").toggle();
    }
});