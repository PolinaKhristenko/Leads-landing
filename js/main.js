$(document).ready(function() {

    // Плагин для стилизации select


    $('#sum').select2({
        placeholder: 'Сумма долга',
        minimumResultsForSearch: Infinity,
    });

    $('#city').select2({
        placeholder: 'Ваш регион',
        minimumResultsForSearch: Infinity,
    });

    $('#quantity').select2({
        placeholder: 'Необходимое число лидов',
        minimumResultsForSearch: Infinity,
    });


    // Слайдер на главной

    var step = 1;

    function changeStep () {
        if (step < 3) {
            $('.class' + step++).removeClass('hot__active');
            $('.class' + step).addClass('hot__active');
        } else {
            $('.class' + step++).removeClass('hot__active');
            step = 1;
            $('.class' + step).addClass('hot__active');
        }
        
    }

    setInterval( function() {
        changeStep ();
    }, 10000)



    // Аякс для форм


    $('form').on('submit', function (e) {
        let formID = $(this);
        $.ajax({
            url: "../send.php",
            type: "POST",
            data: formID.serialize(),
        }).done(function(r) {
            if (r.status === 'error') {
                console.log('error')
            } else {
            location.href='../pages/thanks.php';
        }
        });
        e.preventDefault();
    })


    // Валидация первого шага формы

    $('.step-changer').on('click', function() {
        if (($('#sum').val() == null) || ($('#city').val() == null) || ($('#quantity').val() == null) ) {
            $('.form1__fill1').html('Пожалуйста, заполните все поля!');
            $('.select2-container--default .select2-selection--single').css({borderColor: 'red'})
        } else {
            $('.step1').fadeOut('fast', function() {
                $('.step2').fadeIn('fast');
                $('.step2').css({ display: 'flex'});
            })
        }
    }) 



});








