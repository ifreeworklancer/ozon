import jquery from 'jquery';
import Flickity from 'flickity';

window.jQuery = window.$ = jquery;

import 'flickity/dist/flickity.css';

(function () {

    /**
     * Burger-menu
     */
    $('.burger-menu').click(function () {
        var menu = $('.menu');
        $(this).toggleClass('active');

        if (!menu.is(':visible')) {
            menu.slideDown('is-active').css('display', 'flex');
        } else {
            menu.slideUp('is-active');
        }
    });

    /**
     * Header-social
     */

    $('.header-social-list-item--share').on(('click'), function () {
        $(this).siblings().slideToggle().css('display', 'flex');
    });

})(jQuery)

