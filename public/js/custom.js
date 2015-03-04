$(document).ready(function () {
    $('#toggle-sidebar').on('click', function () {        
        $('#sidebar').toggle();
        $('#content').toggleClass('col-md-12');
        $('#content').toggleClass('col-md-10');
        $('#content').toggleClass('col-md-offset-2');
    });
    $('.panel-title ').on('click',function(){
        $(this).children().children().toggleClass('fa-plus');
        $(this).children().children().toggleClass('fa-minus');        
        $(this).parent().parent().siblings().find('.fa').removeClass('fa-minus').addClass('fa-plus');
    });
});