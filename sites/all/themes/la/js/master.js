(function ($) {
  Drupal.behaviors.exampleModule = {
    attach: function (context, settings) {

      $("#core-unit-switch-form select").change(function(){
        $("#core-unit-switch-form").submit();
      });

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
        }, 1000);

      });
      $(".interactive-text").each(function () {
        var element = $(this);
        setInterval(function () {

          $.get("/api?prm=" + element.attr("data-browse"), function (result) {
            if (result) {
              element.text(result);
            }
            else {
                element.text("0");
            }
          });
        }, 1000);

      });
      $("#basic").DataTable( {
        columns: [
          { data: "created" },
          { data: "obj_name" },
          { data: "tag_name"},
          { data: "state"}
          ],
        scrollY:        200,
        scrollCollapse: true,
        scroller:       true,
        searching: false,
        //paging: false,
        ajax: "/events",

      } );
      $("#basic tbody").on( "click", "tr", function () {
        if ( $(this).hasClass("selected") ) {
          $(this).removeClass("selected");
        }
        else {
          table.$("tr.selected").removeClass("selected");
          $(this).addClass("selected");
        }
      } );

      $("#remove_button").click( function () {
        table.row(".selected").remove().draw( false );
      } );
    }
  };
}(jQuery));
