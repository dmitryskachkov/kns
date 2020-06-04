(function ($) {
    Drupal.behaviors.exampleModule = {
        attach: function (context, settings) {
            setInterval(function () {
                    $(".interactive").each(function () {
                        $element = $(this);
                        $.ajax({
                            type: "GET",
                            url: "/api",
                            async: false,
                            data: "prm=" + $(this).attr('data-browse'),
                            success: function (result) {
                                if (result == 1) {
                                    if (!$element.hasClass('btn-active')) {
                                        $element.addClass('btn-active');
                                    }
                                }
                                else {
                                    if ($element.hasClass('btn-active')) {
                                        $element.removeClass('btn-active');
                                    }

                                }

                            }
                        });
                    });


                },
                2500);


        }
    };
}(jQuery));
