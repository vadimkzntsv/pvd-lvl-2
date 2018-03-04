$(document).ready(function() {
    $('.flexslider').flexslider({
        animation: "slide",
        controlNav: false,
        prevText: "",
        nextText: ""
    });

//Contact form js
    $('#form-show').on('click', function (event) {
        event.preventDefault();
        $('#overlay').show();
        $('#contact-form').show();
    });

    $('#form-close').on('click', function (event) {
        event.preventDefault();
        $('#overlay').hide();
        $('#contact-form').hide();
    });

    $('#contact-form').on('submit', function (event) {
        $('#contact-form input').each(function () {
            if ($(this).val() === '') {
                event.preventDefault();
                $(this).attr('placeholder','Поле обязательно для заполнения');
            }
        })
    });

//Hamburger menu
    $('.hamburger').on('click', function () {
        $(this).toggleClass('is-active');
        $('#navigation').slideToggle('slow');
    });

//Ajax page change
    $('#pagelist').on('click', 'a', function (event) {
        event.preventDefault();
        var id = $(this).attr('href');
        $.ajax({
            url: id,
            dataType: 'html',
            success: function(data) {
                $('#item-wrapper').html(data);
            }
        });
        if ($(this).hasClass('active-page') ) {
            $(this).removeClass('active-page');
        } else {
            $('a.active-page').removeClass('active-page');
            $(this).addClass('active-page');
        }
    });
});