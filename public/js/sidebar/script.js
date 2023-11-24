$(document).ready(function ()
{
    const sidebar  = $(".sidebar");
    const closeBtn = $('#btn');
    const main     = $('div.main');

    closeBtn.on('click',function (){
       sidebar.toggleClass("open");
       sidebar.toggleClass("min_width");
       sidebar.toggleClass("max_width");

       if (sidebar.hasClass('open'))
       {
           $(this).addClass('bx-menu-alt-right').removeClass('bx-menu');
           main.removeClass('main_col');

       }else
       {
           $(this).addClass('bx-menu').removeClass('bx-menu-alt-right');
           main.addClass('main_col');
       }
    });

    $('ul li .have-links').on('click',function () {
        let id = $(this).attr('id');
        $(this).children('i:last-child').toggleClass('bx-chevron-right').toggleClass('bx-chevron-down');
        $(this).siblings(`ul`).slideToggle();
    });
});
