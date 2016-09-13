$(document).ready(function() {
    photoAndVideoBlockSize();
    $(window).resize(function() {
        photoAndVideoBlockSize();
    })
    slidersInitialization();
    navigationMenuAdhesion();
    bindNavigationSwitch();
    backgroundImagePopup();
})

function backgroundImagePopup() {
    var popupShowSpeed = 400;

    $('.popup-target-image').click(function() {
        var bg = $(this).css('background-image');
        bg = bg.replace('url(', '').replace(')', '').replace(/\"/gi, "");
        $('.image-popup img').attr('src', bg);
        $('.image-popup-container').fadeIn(popupShowSpeed);
    })
    $('.image-popup-close').click(function() {
        $('.image-popup-container').fadeOut(popupShowSpeed);
    })

    $('.feedback-popup-open').click(function(event) {
        event.preventDefault();
        $('.feedback-popup-container').fadeIn(popupShowSpeed);
    })
    $('.feedback-popup-close').click(function() {
        $('.feedback-popup-container').fadeOut(popupShowSpeed);
    })
}

function bindNavigationSwitch() {
    var $navigationLink = $('.navigation-menu a'),
        activeClass = 'active-link';

    function updateState() {
        var viewportTop = $(window).scrollTop();

        $('.navigation-target').each(function() {

            var sectionTop = $(this).offset().top;
            if ((viewportTop >= sectionTop)) {
                $navigationLink.removeClass(activeClass);
                console.log($('.navigation-link[href=\'#' + $(this).attr('id') + '\']'));
                $('.navigation-link[href=\'#' + $(this).attr('id') + '\']').addClass(activeClass);
            }
        });
    };

    updateState();
    $(window).scroll(function() {
        updateState();
    });
};


function photoAndVideoBlockSize() {
    elementWidth = $('.completed-line').css('width');
    elementWidth = elementWidth.replace('px', '');

    if (+elementWidth <= 768) {
        elementHeight = elementWidth / 3.09;
        $('.single-block').css('height', elementHeight);
    } else {
        elementHeight = elementWidth / 3.09;
        $('.completed-line').css('height', elementHeight);
    }

}

function slidersInitialization() {
    $('.purchase-pluses-text-slider').slick({
        arrows: false,
        dots: true,
        appendDots: $('.purchase-pluses-text-slider-navigation')
    })
    $('.question-answer-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 3,
        prevArrow: $('.question-answer .prev-arrow'),
        nextArrow: $('.question-answer .next-arrow'),
        responsive: [{
            breakpoint: 1201,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        }, {
            breakpoint: 900,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    })
    $('.documents-slider').slick({
        slidesToShow: 5,
        prevArrow: $('.documents .prev-arrow'),
        nextArrow: $('.documents .next-arrow'),
        responsive: [{
            breakpoint: 1701,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 1401,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 1101,
            settings: {
                slidesToShow: 2
            }
        }, {
            breakpoint: 831,
            settings: {
                slidesToShow: 1
            }
        }]
    })
}

function navigationMenuAdhesion() {
    $(window).scroll(function() {
        var windowPosition = $(window).scrollTop(),
            elementPosition = $('.intro').offset().top;

        if (windowPosition >= elementPosition) {
            $('.navigation-menu-block').addClass('adhesion-menu');
        } else {
            $('.navigation-menu-block').removeClass('adhesion-menu')
        }
    })
}