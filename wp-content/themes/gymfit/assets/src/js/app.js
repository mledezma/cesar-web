"use strict";

(function ($) {
    var themePath = object_name.templateUrl;
    //var url = window.siteUrl || window.location.origin;

    function addArrow() {
        $('#bannerIcons img.banner-icon').each(function (idx) {
            if ($('#bannerIcons img.banner-icon').length - 1 !== idx) {
                $(this).after('<img class="arrow-right" src="' + themePath + '/assets/img/icons/arrow-right.svg">');
            }
        });
    }
    function addSliderBullet() {
        $('.slider-controls a').each(function (idx) {
            if ($('.slider-controls a').length - 1 !== idx) {
                $(this).after('<span class="slider-bullet">•</span>');
            }
        });
    }
    function addMenuClasses() {
        var toggle = true;
        $('#headerNavbar').find('ul li').each(function () {
            var anchor = $(this).find('a:first');
            $(this).attr('class', 'nav-item');
            anchor.attr('class', 'nav-link');

            if (anchor.attr('href') === location.href && $(this).find('ul').length === 0) {
                $(this).addClass('active');
            } else if ($(this).find('ul').length > 0) {
                $(this).addClass('siku-dropdown');
                anchor.append('<span class="siku-dropdown__icon"></span>');

                $(this).on('click', function () {
                    $(this).toggleClass('siku-dropdown--hover');
                    $(this).find('.siku-dropdown__icon').toggleClass('siku-dropdown__icon--down');

                    togglePadding($(this), toggle);
                    toggle = !toggle;
                });
            }
        });
    }
    function togglePadding(self, toggle) {
        if (toggle) {
            var dropdownHeight = self.find('ul').css('height');
            self.css('padding-bottom', dropdownHeight);
        } else {
            self.css('padding-bottom', 0);
        }
    }
    function initSlick() {
        if ($('.slider-banner').length) {
            $('.slider-banner').slick({
                'arrows': false,
                'centerMode': true,
                'centerPadding': '0',
                'dots': true,
                'dotsClass': 'slick-dots-siku',
                'adaptiveHeight': true
            });
        }
        if ($('.module-slider').length) {
            $('.module-slider').slick({
                'centerMode': true,
                'centerPadding': '0',
                'dots': true,
                'dotsClass': 'slick-dots-siku',
                'prevArrow': '<span class="siku-slider__arrow--left siku-slider__arrow"></span>',
                'nextArrow': '<span class="siku-slider__arrow--right siku-slider__arrow"></span>',
                'slide': 'div'
            });
            $('.module-filter').on('click', function (e) {
                e.preventDefault();
                var filter = $(this).data('filter');
                var key = "." + 'module-' + filter;
                $('.module-slider').slick('slickUnfilter');
                $('.module-slider').slick('slickFilter', key).slick('refresh');
                $('.module-slider').slick('slickGoTo', 0);
            });
        }
        if ($('.testimonies-slider').length) {
            $('.testimonies-slider').slick({
                'arrows': false,
                'autoplay': true,
                'autoplaySpeed': 8000,
                'slide': 'div',
                'mobileFirst': true,
                'responsive': [{
                    'breakpoint': 1024,
                    'settings': {
                        'slidesToShow': 3,
                        'slidesToScroll': 3,
                        'dots': true,
                        'dotsClass': 'slick-dots-siku'
                    }
                }]
            });
        }
    }
    function smoothScroll() {
        $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function (event) {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000, function () {
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) {
                            return false;
                        } else {
                            $target.attr('tabindex', '-1');
                            $target.focus();
                        }
                    });
                }
            }
        });
    }
    function updateLocalLink() {
        var localLinks = $('a[href*="#"]').not('[href="#"]').not('[href="#0"]');
        var url = location.href;
        var urlOrigin = location.protocol + '//' + location.hostname + '/';
        if (url !== urlOrigin) {
            localLinks.each(function () {
                var currentLink = $(this).attr('href');
                $(this).attr('href', urlOrigin + currentLink);
            });
        }
    }
    function resetForms() {
        var demo = $('.siku-form').filter(function(){
            if($(this).find('input[value="form-demo-siku"]').length) return $(this);
        });
        var forms = $('.siku-form').not(demo);
        forms.each(function(){
            $(this).submit(function() {
                $(this)[0].reset();
            });
        });
    }
    function validTerms() {
        var form = $('.siku-form').filter(function(){
            if($(this).find('input[value="form-demo-siku"]').length) return $(this);
        });
        form.submit(function(e) {
            var checkbox = $(this).find('input[name="aceptTerms"]');
            if(!checkbox.is(':checked')) {
                e.preventDefault();
                checkbox.parent().append('<div class="form-control-feedback smaller-text">Lo sentimos, para solicitar el demo debes de estar de acuerdo con los términos y condiciones*</div>');
                checkbox.parent().parent().addClass('has-danger');

                checkbox.click(function(){
                    checkbox.parent().parent().toggleClass('has-danger');
                });
            } else {
                this.reset();
            }
        });
    }
    // function test() {
    //     $('#contactForm').submit(function(e){
    //         e.preventDefault();
    //         $.ajax();
    //     });
    // }
    if ($('#bannerIcons img.banner-icon').length) {
        addArrow();
    }
    if ($('.slider-controls').length) {
        addSliderBullet();
    }
    if ($('#headerNavbar').length) {
        addMenuClasses();
    }
    if ($().slick) {
        initSlick();
    }
    updateLocalLink();
    smoothScroll();
    //test();
    validTerms();
    resetForms();
})(window.jQuery);