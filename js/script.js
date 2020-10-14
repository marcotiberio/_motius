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