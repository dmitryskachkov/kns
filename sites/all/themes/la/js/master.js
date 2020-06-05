(function ($) {
  Drupal.behaviors.exampleModule = {
    attach: function (context, settings) {

            $(".interactive").each(function () {
              var element = $(this);
              setInterval(function() {

                $.get("/api?prm=" + element.attr("data-browse"), function (result) {
                  if (result == 1) {
                    if (!element.hasClass("btn-active")) {
                      element.addClass("btn-active");
                    }
                  }
                  else {
                    if (element.hasClass("btn-active")) {
                      element.removeClass("btn-active");
                    }

                  }
                });
              }, 2000);

            });



    }
  };
}(jQuery));
