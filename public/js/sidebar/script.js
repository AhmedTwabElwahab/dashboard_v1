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
});
