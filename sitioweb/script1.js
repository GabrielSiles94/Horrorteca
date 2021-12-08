$(document).ready(function() {

    $(function() {
        $('#monster').change(function() {
            if (!$(this).attr('checked')) {
                $('#aparece').hide();
            } else {
                $('#aparece').fadeIn(2000);
            }

        });
    });

    $(function() {
        $('#cine').change(function() {
            if (!$(this).attr('checked')) {
                $('#videos1').hide();
            } else {
                $('#videos1').fadeIn(2000);
            }

        });

    });

    $(function() {
        $('#cine2').change(function() {
            if (!$(this).attr('checked')) {
                $('#videos2').hide();
            } else {
                $('#videos2').fadeIn(2000);
            }

        });

    });


    $(function() {
        $('#monster2').change(function() {
            if (!$(this).attr('checked')) {
                $('#dioses').hide();
            } else {
                $('#dioses').fadeIn(2000);
            }

        });
    });




    $('img.grande').hover(function() {
        $(this).addClass('transition');
    }, function() {
        $(this).removeClass('transition');
    });

    $('div.descarga').hover(function() {
        $(this).addClass('transition');
    }, function() {
        $(this).removeClass('transition');
    });

});