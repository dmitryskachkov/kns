(function ($) {
    Drupal.behaviors.exampleModule = {
        attach: function (context, settings) {

            $("#core-unit-switch-form select").change(function () {
                $("#core-unit-switch-form").submit();
            });

            $(".toolipdate").click(function () {
                var element = $(this);
                $.get("/last?prm=" + element.attr("data-browse"), function (result) {
                    if (result) {
                        element.after("<div class=\"mytooltip\" id=\"" + element.attr("data-browse") + "\">Последнее изменение:" + result + "</div>");
                        $("#" + element.attr("data-browse")).fadeOut(8500);
                    }
                });
            });

            $("#event-resize").click(function () {
                if ($("#event-body").hasClass("hidden")) {
                    $("#event-body").removeClass("hidden");
                    $("#event-body .btn").removeClass("hidden");
                    $("html, body").animate({
                            scrollTop: $(document).height() - $(window).height()
                        },
                        1400,
                        "easeOutQuint"
                    );
                } else {
                    $("#event-body").addClass("hidden");
                    $("#event-body .btn").addClass("hidden");
                }
            });
            $("#event-header h5").click(function () {
                if ($("#event-body").hasClass("hidden")) {
                    $("#event-body").removeClass("hidden");
                    $("#event-body .btn").removeClass("hidden");
                    $("html, body").animate({
                            scrollTop: $(document).height() - $(window).height()
                        },
                        1400,
                        "easeOutQuint"
                    );
                } else {
                    $("#event-body").addClass("hidden");
                    $("#event-body .btn").addClass("hidden");
                }
            });
            $(".interactive").each(function () {
                var element = $(this);
                setInterval(function () {

                    $.get("/api?prm=" + element.attr("data-browse"), function (result) {
                        if (result == 1) {
                            if (!element.hasClass("btn-active")) {
                                element.addClass("btn-active");
                            }
                        } else {
                            if (element.hasClass("btn-active")) {
                                element.removeClass("btn-active");
                            }

                        }
                    });
                    if (element.attr("data-error")){
                    $.get("/api?prm=" + element.attr("data-error"), function (result) {
                        if (result == 1) {
                            if (!element.hasClass("blink_error")) {
                                element.addClass("blink_error");
                            }
                        } else {
                            if (element.hasClass("blink_errore")) {
                                element.removeClass("blink_error");
                            }

                        }
                    });

                    }
                }, 1000);

            });
            $(".interactive-text").each(function () {
                var element = $(this);
                setInterval(function () {

                    $.get("/api?prm=" + element.attr("data-browse"), function (result) {
                        if (result) {
                            element.text(result);
                        } else {
                            element.text("0");
                        }
                    });
                }, 1000);

            });
            var table = $("#basic").DataTable({
                columns: [
                    {data: "id"},
                    {data: "created"},
                    {data: "obj_name"},
                    {data: "tag_name"},
                    {data: "state"}
                ],
                order: [[ 1, "desc" ]],
                scrollY: 200,
                scrollCollapse: true,
                scroller: true,
                select: true,
                searching: false,
                language: {
                  "decimal":        "",
                  "emptyTable":     "Нет данных для отображеня",
                  "info":           "Показано _START_ до _END_ из _TOTAL_ записей",
                  "infoEmpty":      "Показано 0 записей",
                  "infoFiltered":   "(filtered from _MAX_ total entries)",
                  "infoPostFix":    "",
                  "thousands":      ",",
                  "lengthMenu":     "Показать _MENU_ для записей",
                  "loadingRecords": "Загружаю данные...",
                  "processing":     "Обрабатываю данные...",
                  "search":         "Поиск:",
                  "zeroRecords":    "Нет записей для отображения",
                  "paginate": {
                    "first":      "Первая",
                    "last":       "Последняя",
                    "next":       "Следующая",
                    "previous":   "Предыдущая"
                  },
                  "aria": {
                    "sortAscending":  ": активируйте для сортировки по возрастанию",
                    "sortDescending": ": активируйте для сортировки по убыванию"
                  }
                },

                //paging: false,
                ajax: "/events",

            });
            $("#journal").DataTable();

            $("#basic tbody").on("click", "tr", function () {
                if ($(this).hasClass("selected")) {
                    $(this).removeClass("selected");
                } else {
                    table.$("tr.selected").removeClass("selected");
                    $(this).addClass("selected");
                }
            });

            $("#remove_button").click(function () {
                var data = table.row( ".selected" ).data();
                table.row(".selected").remove().draw(false);
                $.ajax({
                    url: "/quit?id=" + data.id,
                    data: data,
                });

            });
            $("#remove_all_button").click(function () {
                table.clear().draw();
                $.ajax({
                      url: "/quit?id=all",
                      language: {
                        "decimal":        "",
                        "emptyTable":     "Нет данных для отображеня",
                        "info":           "Показано _START_ до _END_ из _TOTAL_ записей",
                        "infoEmpty":      "Показано 0 записей",
                        "infoFiltered":   "(filtered from _MAX_ total entries)",
                        "infoPostFix":    "",
                        "thousands":      ",",
                        "lengthMenu":     "Показать _MENU_ для записей",
                        "loadingRecords": "Загружаю данные...",
                        "processing":     "Обрабатываю данные...",
                        "search":         "Поиск:",
                        "zeroRecords":    "Нет записей для отображения",
                        "paginate": {
                          "first":      "Первая",
                          "last":       "Последняя",
                          "next":       "Следующая",
                          "previous":   "Предыдущая"
                        },
                        "aria": {
                          "sortAscending":  ": активируйте для сортировки по возрастанию",
                          "sortDescending": ": активируйте для сортировки по убыванию"
                        }
                      },
                });
            });
        }
    };
}(jQuery));
