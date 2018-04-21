$(document).ready(function () {
    $('.my-select2').select2({
        placeholder: "Уровень образования",
        allowClear: true
    });
    $('.search-category').select2({
        placeholder: "Выберите категорию",
        allowClear: true
    });
    $(document).on('change', '.tab-checked', function () {
        var id = $(this).attr('value');
        $('.tab-content-active').removeClass('tab-content-active').addClass('tab-content-hidden');
        $('#' + id).addClass('tab-content-active');
        return false;
    });
    $(document).on('click', '.tab-checked', function () {
        $('.link-profile a').removeClass('active-link-profile');
        $(this).parent().children(" a ").addClass('active-link-profile');
        var id = $(this).attr('data-value');
        $('.tab-content-active').removeClass('tab-content-active').addClass('tab-content-hidden');
        $('#' + id).addClass('tab-content-active');
        return false;
    });
    /*скрываем-показываем поля на 1 вкладке*/
    $(".cat-first").hide();
    console.log($(".cat-first"));
    $("#main").show();
    $("a.main-link, a.education-link, a.work-link, a.skill-link, a.about-link").on("click", function () {
        var id = $(this).attr('href');
        $(".cat-first").hide();
        $(id).slideToggle();
    });
    $(".menu-main a").on("click", function () {
        $(".menu-main a").removeClass('current');
        $(this).parent().children(" a ").addClass('current');
    })
    /*добавляем поле Навык при клике на кнопку + */
    $('#add-skill').on("click", function() {
        $('<input type="text" class="form-control skill-input" name="skill[]" placeholder="Навык :"/>').fadeIn('slow').appendTo('.skill');
    });
    $('#del-skill').on("click", function() {
        var i = $('.skill-input').length;
        if (i > 1) {$('.skill-input:last').remove();}
    });
    /*добавляем поля Образования при клике на кнопку + */

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });
    /*загрузка аватарки*/
        // initialize with defaults
    $("#input-id").fileinput();
        // with plugin options
    $("#input-id").fileinput({'showUpload':false, 'previewFileType':'any'});
});
(function () {
    var Message;
    Message = function (arg) {
        this.text = arg.text, this.message_side = arg.message_side;
        this.draw = function (_this) {
            return function () {
                var $message;
                $message = $($('.message_template').clone().html());
                $message.addClass(_this.message_side).find('.text').html(_this.text);
                $('.messages').append($message);
                return setTimeout(function () {
                    return $message.addClass('appeared');
                }, 0);
            };
        }(this);
        return this;
    };
    $(function () {
        var getMessageText, message_side, sendMessage;
        message_side = 'right';
        getMessageText = function () {
            var $message_input;
            $message_input = $('.message_input');
            return $message_input.val();
        };
        sendMessage = function (text) {
            var $messages, message;
            if (text.trim() === '') {
                return;
            }
            $('.message_input').val('');
            $messages = $('.messages');
            message_side = message_side === 'left' ? 'right' : 'left';
            message = new Message({
                text: text,
                message_side: message_side
            });
            message.draw();
            return $messages.animate({ scrollTop: $messages.prop('scrollHeight') }, 300);
        };
        $('.send_message').click(function (e) {
            return sendMessage(getMessageText());
        });
        $('.message_input').keyup(function (e) {
            if (e.which === 13) {
                return sendMessage(getMessageText());
            }
        });
        sendMessage('Hello Philip! :)');
        setTimeout(function () {
            return sendMessage('Hi Sandy! How are you?');
        }, 1000);
        return setTimeout(function () {
            return sendMessage('I\'m fine, thank you!');
        }, 2000);
    });
}.call(this));