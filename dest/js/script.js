'use strict';

//$(window).load(function() {});
window.addEventListener('load', function (event) {});

//$(window).resize(function(){});
window.addEventListener('resize', function (event) {});

//$(document).ready(function(){});
document.addEventListener("DOMContentLoaded", function () {
    // slider('.slider-container');

    // Valid phone
    $("#phone").mask("+7 (999) 999-99-99");

    // Valid @mail       https://webformyself.com/validaciya-e-mail-na-letu-s-ispolzovaniem-jquery/
    var pattern = /^[a-z0-9_-]+@[a-z0-9-]+\.([a-z]{1,6}\.)?[a-z]{2,6}$/i;
    var mail = $('#mail');
    mail.blur(function () {
        if (mail.val() != '') {
            if (mail.val().search(pattern) == 0) {
                $('#valid').text('Подходит');
                $('#submit').attr('disabled', false);
                mail.removeClass('error').addClass('ok');
            } else {
                $('#valid').text('Не подходит');
                $('#submit').attr('disabled', true);
                mail.addClass('ok');
            }
        } else {
            $('#valid').text('Поле e-mail не должно быть пустым!');
            mail.addClass('error');
            $('#submit').attr('disabled', true);
        }
    });

    mobileMenu();
});

/*
 * @function    javascript
 * @Components	Carousel slider
 */

function slider(selector) {
    var swiper = new Swiper(selector);
}

// Мобильная кнопка
function mobileMenu() {
    var hamburger = $('#hamburger');
    var navigation = $('#navigation');

    if (hamburger) {
        hamburger.on('click', function (e) {
            e.preventDefault();
            var __this = e.target;

            //
            navigation.toggleClass('navigation--isOpen');
            hamburger.toggleClass('trigger--active');
            console.log(__this);
        });
    }
}

// Форма отправки
//# sourceMappingURL=script.js.map
$(document).ready(function () {

    $('a#submit').click(function () {
        $('form').find('[type="submit"]').trigger('click');
    });
    $('form').submit(function () {
        $.ajax({
            url: 'php/post.php',
            type: 'post',
            data: $(this).serialize(),
            success: function success(response) {
                var data = JSON.parse(response);
                if (data.result == 1) {
                    swal("Отлично!", data.msg, "success");
                } else {
                    swal("Ошибка!", data.msg, "warning");
                }
            }
        });
        return false;
    });
});
//# sourceMappingURL=script.js.map
