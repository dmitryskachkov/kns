<?php
drupal_set_title('КНС 4');
?>
<div class="row">
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">


                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-xs-4">
                            <a class="default-text" href="/unit/8">
                                <h4>Основной резервуар</h4>
                                <p class="text-muted font-weight-light">Уровень в резервуаре</p>
                            </a>
                            <button class="btn btn-inverse-light btn-fw toolipdate interactive"
                                    style="margin-bottom: 10px" data-href="btn"
                                    data-browse="405" data-var="level0">0
                            </button>
                            <button class="btn btn-inverse-light btn-fw toolipdate interactive"
                                    style="margin-bottom: 10px" data-href="btn"
                                    data-browse="406" data-var="level1">1
                            </button>
                            <button class="btn btn-inverse-light btn-fw toolipdate interactive"
                                    style="margin-bottom: 10px" data-href="btn"
                                    data-browse="407" data-var="level2">2
                            </button>
                            <button class="btn btn-inverse-light btn-fw toolipdate interactive"
                                    style="margin-bottom: 10px; " data-href="btn"
                                    data-browse="408" data-var="level3">3
                            </button>

                        </div>
                        <div class="col-md-2">
                            <h4>Состояние насосов</h4>
                            <p class="text-muted font-weight-light">Сигналы насосов</p>
                            <div style="margin-left: 10px">
                                <p class="btn btn-outline-secondary btn-icon btn-rounded toolipdate interactive"
                                   style="margin-right: 12px;" data-href="btn"
                                   data-browse="403" data-error="310" data-var="engine1.status" title="Насос №1"><span class="interactive-text" data-browse="420">0</span> A</p>
                                <p class="btn btn-outline-secondary btn-icon btn-rounded toolipdate interactive"
                                   style="margin-right: 12px;" data-href="btn"
                                   data-browse="404" data-error="311" data-var="engine2.status" title="Насос №2"><span class="interactive-text" data-browse="421">0</span> A</p>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <h4>Температура</h4>
                            <p class="text-muted font-weight-light">На объекте</p>
                            <h3 style="margin-top: 15px"><span class="interactive-text" data-browse="419">0</span> ℃</h3>
                        </div>
                        <div class="col-md-3">
                            <h4>Прочее</h4>
                            <p class="text-muted font-weight-light">Дополнительные сигналы</p>
                            <button class="btn btn-inverse-light btn-fw toolipdate interactive"
                                    style="margin-bottom: 10px; " data-href="btn"
                                    data-browse="414" data-var="voltage1" title="Напряжение на вводе №1"><i
                                        class="fa fa-bolt"></i> 1
                            </button>
                            <button class="btn btn-inverse-light btn-fw toolipdate interactive"
                                    style="margin-bottom: 10px; " data-href="btn"
                                    data-browse="413" title="Датчик холода"><i
                                        class="fa fa-snowflake-o" aria-hidden="true"></i></button>
                            <button class="btn btn-inverse-light btn-fw toolipdate interactive"
                                    style="margin-bottom: 10px; " data-href="btn"
                                    data-browse="412" data-var="door" title="Датчик движения"><i class="fa fa-lock"
                                                                                               aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="col-md-2" style="padding-top: 30px">
                            <p style="line-height: 20px">Ошибка уровня:
                                <button class="btn btn-inverse-light btn-fw btn-sm toolipdate float-right error-btn interactive"
                                        data-browse="409" data-href="btn"
                                        data-var="unit.error_level" title="Проблемы с датчиками уровня"></button>
                            </p>
                            <p style="line-height: 20px">Ошибка насоса 1:
                                <button class="btn btn-inverse-light btn-fw btn-sm toolipdate float-right error-btn  interactive"
                                        data-browse="410" data-href="btn"
                                        data-var="unit.error_engine" title="Ошибка РКЗ"></button>
                            </p>
                            <p style="line-height: 20px">Ошибка насоса 2:
                                <button class="btn btn-inverse-light btn-fw btn-sm toolipdate float-right error-btn  interactive"
                                        data-browse="411" data-href="btn"
                                        data-var="unit.error_engine" title="Ошибка РКЗ"></button>
                            </p>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <hr>
                            <p style="margin-top: 20px">Автоматика насоса №1 <span
                                        style="margin-left: 20px; margin-right: 20px"
                                        class="btn btn-sm btn-inverse-light btn-fw toolipdate interactive"
                                        data-href="btn"
                                        data-browse="416"
                                        data-var="engine1mode"></span>

                                Автоматика насоса №2 <span style="margin-left: 20px; margin-right: 20px;"
                                         class="btn btn-sm btn-inverse-light btn-fw toolipdate interactive"
                                         data-href="btn"
                                         data-browse="417" data-var="engine1mode"></span>

                                Временные задержки в работе насосов<span style="margin-left: 20px"
                                                           class="btn btn-sm btn-inverse-light btn-fw toolipdate"
                                                           data-href="btn"></span>
                            </p>

                            <p style="margin-top: 20px"><i class="fa fa-mouse-pointer"></i> * Кликните на интерактивный
                                элемент,
                                чтобы увидеть дату последнего обновления параметра.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>


<div class="col-md-12 grid-margin stretch-card">
    <div class="card">

        <div class="card-body" id="charts" style="height: 600px">
            <div id="levels" style="width: 100%; height: 250px "></div>
            <div id="engines" style="width: 100%;height: 250px  "></div>
        </div>

    </div>
</div>
</div>

<script type="text/javascript" src="/sites/all/modules/jquery_update/replace/jquery/1.8/jquery.min.js?v=1.8.3"></script>
<script src="http://code.highcharts.com/maps/modules/map.js"></script>
<script type="text/javascript">
    const timezone = new Date().getTimezoneOffset()

    // Apply the theme
    //Highcharts.setOptions(Highcharts.theme);
    Highcharts.setOptions({
        global: {
            timezoneOffset: timezone
        },
        time: {
           //timezoneOffset: 10 * 60,
            timezone: 'Asia/Yekaterinburg'
        }
    });
    var RangeSelectorTemplate = {
        buttonTheme: {
            width: 60
        },
        buttons: [
            {
                type: 'minute',
                count: 30,
                text: '30 мин'
            },
            {
                type: 'hour',
                count: 3,
                text: '3 часа'
            },
            {
                type: 'hour',
                count: 6,
                text: '5 часов'
            },
            {
                type: 'hour',
                count: 12,
                text: '12 часов'
            },
            {
                type: 'hour',
                count: 24,
                text: '24 часа '
            },

        ],
        inputEnabled: true, // it supports only days
        selected: 2,
        inputPosition: {
            x: -40,
            y: 0
        },
    };


    function searchPoint(event, chart) {
        var points = chart.series[0].points,
            len = points.length,
            x = chart.axes[0].toValue(event.chartX),
            range = 0.2,
            pointX,
            i;

        for (i = 0; i < len; i++) {
            pointX = points[i].x;
            if (x - range < pointX && pointX < x + range) {
                return points[i];
            }
        }
    }

    $('#charts').bind('mousemove touchmove touchstart', function (e) {
        var chart, point, i, event;

        for (i = 0; i < Highcharts.charts.length; i = i + 1) {
            chart = Highcharts.charts[i];
            event = chart.pointer.normalize(e.originalEvent); // Find coordinates within the chart

            point = chart.series[0].searchPoint(event, true); // Get the hovered point
            //point = searchPoint(event, chart);

            if (point) {
                point.highlight(e);
            }
        }
    });
    /**
     * Override the reset function, we don't need to hide the tooltips and crosshairs.
     */
    Highcharts.Pointer.prototype.reset = function () {
        return undefined;
    };

    /**
     * Highlight a point by showing tooltip, setting hover state and draw crosshair
     */
    Highcharts.Point.prototype.highlight = function (event) {
        this.onMouseOver(); // Show the hover marker
        this.series.chart.tooltip.refresh(this); // Show the tooltip
        this.series.chart.xAxis[0].drawCrosshair(event, this); // Show the crosshair
    };

    /**
     * Synchronize zooming through the setExtremes event handler.
     */
    function syncExtremes(e) {
        var thisChart = this.chart;

        if (e.trigger !== 'syncExtremes') { // Prevent feedback loop
            Highcharts.each(Highcharts.charts, function (chart) {
                if (chart !== thisChart) {
                    if (chart.xAxis[0].setExtremes) { // It is null while updating
                        chart.xAxis[0].setExtremes(e.min, e.max, undefined, false, {
                            trigger: 'syncExtremes'
                        });
                    }
                }
            });
        }
    }

    var day = (Date.now() / 1000) - 86400;

    function requestVerticalLineForErrorData(stockChart, tag, color, msg) {
        $.get('/timeline?prm=' + tag, function(data) {
            var data = JSON.parse(data);

            const result = [];
            $.each(data, function (i, time) {
                result.push({
                    color: color, // Red
                    width: 1,
                    value: time
                });

                stockChart.xAxis[0].addPlotLine({
                    label: {text: msg},
                    color: color, // Red
                    width: 1,
                    value: time
                });
            });

            // stockChart.xAxis[0].options.plotLines[0].value = chart.xAxis[0].options.plotLines.concat(result);
            // stockChart.xAxis[0].update();

            return result;
        });
    }
    Highcharts.getJSON('/history?prm=418', function (data) {
        // Create the chart

        let stockChart = Highcharts.stockChart('levels', {
            mapNavigation: {
                enableMouseWheelZoom: true
            },
            colors: ["#6e411f"],
            plotOptions: {
                series: {
                    connectNulls: true,
                    dataGrouping: {
                        enabled: false,
                    },
                },
            },
            rangeSelector: RangeSelectorTemplate,
            xAxis: {
                ordinal: false,
                type: 'datetime',
                events: {
                    setExtremes: syncExtremes
                },
                plotLines: []
            },

            chart: {
                type: 'area',
                zoomType: 'x'
            },
            title: {
                text: 'Уровень в основном резервуаре',
                floating: true,
                align: 'bottom',
                x: 20,
                y: 70
            },

            scrollbar: {
                enabled: false
            },
            navigator: {
                enabled: false
            },
            series: [{
                //type: 'area',
                name: 'Уровень в основном резервуаре',
                data: data,
                step: true,
                tooltip: {
                    valueDecimals: 0
                }
            }]
        });

        var levels_errors = requestVerticalLineForErrorData(stockChart, '409', '#FF0000','Ошибка уровня');


    });

    var MainChartOptions = [], MainChartCounter = 0,
        MainChartTags = {
            '403': 'Насос №1',
            '404': 'Насос №2',
        };
    $('#engines').append('<p class="chart-loader" style="text-align: center"> Загружаю данные ...</p>');


    $.each(MainChartTags, function (tag, name) {
        $.ajax({
            url: '/history?prm=' + tag,//+ '&start=' + day ,
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                if (data) {
                    MainChartOptions[MainChartCounter] = {name: name, data: data};

                    MainChartCounter += 1;
                    if (MainChartCounter === 2) {
                        let enginesChart = Highcharts.stockChart('engines', {
                            mapNavigation: {
                                enableMouseWheelZoom: true
                            },
                            plotOptions: {
                                series: {
                                  connectNulls: true,
                                  dataGrouping: {
                                    enabled: false,
                                  },
                                },
                            },
                            xAxis: {
                                ordinal: false,
                                plotLines: [],
                                type: 'datetime',
                                //minRange: 300 * 1000,
                                events: {
                                    setExtremes: syncExtremes
                                },
                            },
                            yAxis: {
                                max: 2
                            },
                            scrollbar: {
                                enabled: false
                            },
                            chart: {
                                type: 'area',
                                zoomType: 'x'
                            },
                            navigator: {
                                enabled: false
                            },
                          rangeSelector: RangeSelectorTemplate,


                            title: {
                                text: 'Работа насосов',
                                floating: true,
                                align: 'bottom',
                                x: 20,
                                y: 70
                            },
                            series: MainChartOptions

                        });
                        //var engine1_errors = requestVerticalLineForErrorData(enginesChart, '210', '#ffaf4d', 'Ошибка двигателя 1');
                        //var engine2_errors = requestVerticalLineForErrorData(enginesChart, '211', '#4dbc29', 'Ошибка двигателя 2');
                    }
                }

            }
        });
    }

    );




</script>