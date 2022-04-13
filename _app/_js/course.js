$(document).ready(function () {
    /* Якорь */
    $("a[href='#prices']").click(function (h) {
        h.preventDefault();
        var f = $(this).attr("href"),
            g = $(f).offset().top;
        $("body,html").animate({
            scrollTop: g
        }, 1500)
    });
    

    $('.module-after,.module-more').on('click', function(){
        if(!$(this).hasClass('open')){
            $(this).addClass('open').next('.closed').slideDown(500);
        }
        else {
            $(this).removeClass('open').next('.closed').slideUp(500);
        }
    });
    /*Конец документа*/
});