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
    $(".category-profile form").hide();
    $(".form-active").show();
    $("a.basic","a.education","a.work","a.skill","a.about_me").on("click", function () {
        $(".category-profile form").hide();
        $("#basic","#education","#work","#skill","#about_me").slideToggle();
    })
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });
});