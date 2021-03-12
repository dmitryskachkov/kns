(function ($) {
  Drupal.behaviors.reportModule = {
    attach: function (context, settings) {

      $(".color-interactive td").each(function () {

        var td_element = $(this);
        var tr_element = $(this).closest("tr");
        var get_url = "/timecond?prm=" + tr_element.attr("data-browse") + "&start=" + td_element.attr("data-start-time") + "&end=" + td_element.attr("data-end-time");

        if (typeof tr_element.attr("data-find") !== typeof undefined && tr_element.attr("data-find") !== false ) {
          get_url = get_url + "&find=" + tr_element.attr("data-find");
        }
        $.get(get_url, function (result) {
          if (result > 0) {
            td_element.append('<a href="#' + td_element.attr("data-start-time") +'">' + result + '</a>');
            td_element.addClass("active");
          }
          else {
            td_element.append('<a href="#' + td_element.attr("data-start-time") +'"> X </a>');
          }
        });


      });
    }
  };
}(jQuery));