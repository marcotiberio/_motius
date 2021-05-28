// Mobile Menu Toggle

$(document).ready(function(){
    $("#menuToggle").click(function(){
        $("#mobile-menu").toggle();  
        $("html").toggleClass('no-scroll');  
    });
});

$(document).ready(function(){
    $( "#menuToggle" ).click(function() {
        $( this ).toggleClass( "is-active" );
    });
});


var swiper = new Swiper('.swiper-container', {
    navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
    },
});

// Accordion Filters

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
