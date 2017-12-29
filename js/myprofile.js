$(document).ready(function () {
    $("#select").select2({
        placeholder: "Уровень образования",
        allowClear: true
    });

    $(document).on('change', '.tab-checked', function () {
        var id = $(this).attr('value');
        $('.tab-content-active').removeClass('tab-content-active').addClass('tab-content-hidden');
        $('#' + id).addClass('tab-content-active');
        return false;
    });
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });
});