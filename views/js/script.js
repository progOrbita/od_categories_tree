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

$(document).on('change', '.input', function () {
    if (!$(this).is(':checked')) {
        $('span.' + $(this).val()).remove();
        return;
    }

    generateAssociated($(this).attr('name'), $(this).val());
});

/**
 * function to generte associated categories box
 * 
 * @param string name 
 * @param int id 
 */

function generateAssociated(name, id) {
    let box = '<span class="associated ' + id + '"><span>' + name + '</span><a class="closer" name=' + id + '>x</a></span>';
    $('.associated-cat').append(box);
}

$(document).on('click', '.closer', function () {
    $(this).parent().remove();
    $('input[value=' + $(this).attr('name') + ']').prop('checked', false);
});

/**
 * function to open or close ul of the tree
 * 
 * @param int num 
 */

function openClose(num) {
    $('#' + num).find('i:first').removeClass('fa-angle-down');
    if (!$('#' + num).find('ul:first').hasClass('show')) {
        $('#' + num).find('ul:first').addClass('show');
        $('#' + num).find('i:first').removeClass('fa-angle-right');
        $('#' + num).find('i:first').addClass('fa-angle-down');
        return;
    }

    $('#' + num).find('ul:first').removeClass('show');
    $('#' + num).find('i:first').addClass('fa-angle-right');
}

