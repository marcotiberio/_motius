// $(".type").click( function() {
//     $("table.filtered").removeClass("filtered");
//     $(".filter").removeClass("filter");
//     $(".sorter-false").removeClass('hideth');          

    

//     var filter = $(this)[0].textContent.toLowerCase().replace(' ', '_');
//     $("." + filter).addClass('filter');
//     $(".tablesorter").toggleClass('filtered');
//     $(".sorter-false").toggleClass('hideth');            

//     window.location.hash = filter;
// });

// $(".clear").click(function(){
//     $("table.filtered").removeClass("filtered");
//     $(".filter").removeClass("filter");
//     $(".sorter-false").removeClass('hideth');          

//     window.location.hash = '';
    
// });


// if(window.location.hash) {

//     var filter = window.location.hash.substr(1);
//     $("." + filter).toggleClass('filter');
//     $(".tablesorter").toggleClass('filtered');
//     $(".sorter-false").toggleClass('hideth');           

//     window.location.hash = filter;

// }

$('.type').click(function(){
    var _val = $(this).data('index');
    $('.article-centrale').each(function(){
       if (_val === $(this).data('index')){
         //do something
        }
    });
});

// window.onload = function() {
//     (function() {
//       var elems = document.querySelectorAll("div[data-index]"), len = elems.length, div;
  
//       for (var i = 0; i < len; i++) {
//         div = elems[i];
//         div.onclick = clickAction;
//       }
  
//       function clickAction(e) {
//         var index = e.target.dataset.index, target = document.querySelector("div[data-index=\"" + index + "\"].over-menu");
//         resetSelectedElements();
//         target.classList.add("selected");
//       }
  
//       function resetSelectedElements() {
//         var targetElements = document.getElementsByClassName("over-menu"), len = targetElements.length, targetElement;
  
//         for (var i = 0; i < len; i++) {
//           targetElement = targetElements[i];
//           targetElement.classList.remove("selected");
//         }
//       }
//     }());
//   };