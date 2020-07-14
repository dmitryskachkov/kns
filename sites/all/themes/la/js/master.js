(function ($) {
  Drupal.behaviors.exampleModule = {
    attach: function (context, settings) {

      $(".toolipdate").click(function() {
        var element = $(this);
        $.get("/last?prm=" + element.attr("data-browse"), function (result) {
          if (result) {
            element.after("<div class=\"mytooltip\" id=\"" + element.attr("data-browse") + "\">Последнее обновление:" + result + "</div>");
            $("#" + element.attr("data-browse")).fadeOut(6500);
          }
        });
      });

      $(".interactive").each(function () {
        var element = $(this);
        setInterval(function () {

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
        }, 100);

      });


    }
  };
}(jQuery));
