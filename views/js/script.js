$(document).on('click', '.expand', function () {
    $('.expand i').removeClass('fa-angle-up');
    if ($('ul:first').hasClass('colapsed')) {
        $('ul:first').removeClass('colapsed');
        $('.expand i').removeClass('fa-angle-down');
        $('.expand i').addClass('fa-angle-up');
        return;
    }

    $('.expand i').addClass('fa-angle-down');
    $('ul:first').addClass('colapsed');
});
