(function ($) {
  Drupal.behaviors.reportModule = {
    attach: function (context, settings) {

      $(".color-interactive td").each(function () {

        var td_element = $(this);
        var tr_element = $(this).closest("tr");

        $.get("/timecond?prm=" + tr_element.attr("data-browse") + "&start=" + td_element.attr("data-start-time") + "&end=" + td_element.attr("data-end-time"), function (result) {
          if (result > 0) {
            td_element.append(result);
            td_element.addClass("active");
          }
          else {
            td_element.append("x");
          }
        });


      });
    }
  };
}(jQuery));