(function ($) {
    $(document).ready(function (e) {
        $(".js-fancybox").fancybox({
            helpers: {
                overlay: {
                    locked: false
                }
            }
        });

        $(".various").fancybox({
            maxWidth	: 800,
            maxHeight	: 600,
            fitToView	: false,
            width		: '100%',
            height		: '70%',
            autoSize	: false,
            closeClick	: false,
            openEffect	: 'none',
            closeEffect	: 'none'
        });

        $(function () {
            $('a[href^="#"]').click(function(){
                var targetHref = $(this).attr('href');
                var $target = $('[id="' + targetHref.substring(1) + '"]');
                var offset = 70;

                if ($target.length) {
                    $('html, body').animate({scrollTop: $target.offset().top - offset}, 800);
                }

                return false;
            });
        });

        $('.js-form').submit(function () {
            $(this).ajaxSubmit({
                success: function (responseText, statusText, xhr, $form) {
                    alert('Успешно!');
                },

                error: function (response) {
                    var errors = response.responseJSON.errors;

                    for (var errorKey in errors) {
                        var errorValue = errors[errorKey];

                        alert(errorValue);
                        break;
                    }
                },

                clearForm: true,
                resetForm: true
            });

            return false;
        });

    });
})(jQuery);
