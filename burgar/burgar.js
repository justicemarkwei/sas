$(document).ready(function () {

    /* Navigation burger onclick side navigation show */
    $('.burger-container').on('click', function () {
        $('.main-navigation').toggle('slow');

        if ($('#myBtn').hasClass('change')) {
            $('body').addClass('stop-scroll');
        } else {
            $('body').removeClass('stop-scroll');
        }
    });


});