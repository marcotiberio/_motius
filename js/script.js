// Search News
$(document).ready(function(){
    $('.type').show();
    $('#search').click(function(){
        $('.type').show();
        var txt = $('#search-criteria').val();
        $('.type').each(function(){
        if($(this).text().toUpperCase().indexOf(txt.toUpperCase()) != -1){
            $(this).fadeIn();
        } else {
            $(this).fadeOut();
        }
        });
    });
});