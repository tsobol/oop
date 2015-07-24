/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
console.log("width"+document.documentElement.clientWidth);
console.log("height" +document.documentElement.clientHeight);

});

$(window).scroll(function () {
    $('.image-swap').each(function () {
        
        var bottom_of_image = $(this).offset().top + $(this).outerHeight();
        var bottom_of_window = $(window).scrollTop() + $(window).height();
        if (bottom_of_window > bottom_of_image) {
            $(this).css('visibility', 'visible');
            $(this).animate({'opacity': '1'}, 500);
            console.log('OPACITY=1')
        }
       /* else
        {
            if (!checkVisibility($(this))) {
                $(this).css('visibility', 'hidden');
                console.log('invisible element');
            }

        }*/
       
    });

    function checkVisibility(element) {
        var viewport = {};
        viewport.top = $(window).scrollTop();
        viewport.bottom = viewport.top + $(window).height();
        var bounds = {};
        bounds.top = element.offset().top;
        bounds.bottom = bounds.top + element.outerHeight();
        return ((bounds.top <= viewport.bottom) && (bounds.bottom >= viewport.top));
    }

});