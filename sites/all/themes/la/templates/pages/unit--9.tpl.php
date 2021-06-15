<?php
drupal_set_title('КНС 37');
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
                                    data-browse="506" data-var="level0">0
                            </button>
                            <button class="btn btn-inverse-light btn-fw toolipdate interactive"
                                    style="margin-bottom: 10px" data-href="btn"
                                    data-browse="507" data-var="level1">1
                            </button>
                            <button class="btn btn-inverse-light btn-fw toolipdate interactive"
                                    style="margin-bottom: 10px" data-href="btn"
                                    data-browse="508" data-var="level2">2
                            </button>
                            <button class="btn btn-inverse-light btn-fw toolipdate interactive"
                                    style="margin-bottom: 10px; " data-href="btn"
                                    data-browse="509" data-var="level3">3
                            </button>

                        </div>
                        <div class="col-md-2">
                            <h4>Состояние насосов</h4>
                            <p class="text-muted font-weight-light">Сигналы насосов</p>
                            <div style="margin-left: 10px">
                                <p class="btn btn-outline-secondary btn-icon btn-rounded toolipdate interactive" style="margin-right: 12px;" data-href="btn" data-browse="503" data-error="510" data-var="engine1.status" title="Насос №1"><span class="interactive-text" data-browse="520">0</span> A</p>
                                <p class="btn btn-outline-secondary btn-icon btn-rounded toolipdate interactive"
                                   style="margin-right: 12px;" data-href="btn"
                                   data-browse="504" data-error="511" data-var="engine2.status" title="Насос №2"><span class="interactive-text" data-browse="521">0</span> A</p>
                                <p class="btn btn-outline-secondary btn-icon btn-rounded toolipdate interactive"
                                   style="margin-right: 12px;" data-href="btn"
                                   data-browse="505" data-error="512" data-var="engine3.status" title="Насос №3"><span class="interactive-text" data-browse="522">0</span> A</p>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <h4>Температура</h4>
                            <p class="text-muted font-weight-light">На объекте</p>
                            <h3 style="margin-top: 15px"><span class="interactive-text" data-browse="519">0</span> ℃</h3>
                        </div>
                        <div class="col-md-3">
                            <h4>Прочее</h4>
                            <p class="text-muted font-weight-light">Дополнительные сигналы</p>
                            <button class="btn btn-inverse-light btn-fw toolipdate interactive"
                                    style="margin-bottom: 10px; " data-href="btn"
                                    data-browse="514" data-var="voltage1" title="Напряжение на вводе №1"><i
                                        class="fa fa-bolt"></i> 1
                            </button>
                            <button class="btn btn-inverse-light btn-fw toolipdate interactive"
                                    style="margin-bottom: 10px; " data-href="btn"
                                    data-browse="515" data-var="voltage1" title="Напряжение на вводе №2"><i
                                        class="fa fa-bolt"></i> 2
                            </button>
                            <button class="btn btn-inverse-light btn-fw toolipdate interactive"
                                    style="margin-bottom: 10px; " data-href="btn"
                                    data-browse="513" title="Датчик холода"><i
                                        class="fa fa-snowflake-o" aria-hidden="true"></i></button>
                            <button class="btn btn-inverse-light btn-fw toolipdate interactive"
                                    style="margin-bottom: 10px; " data-href="btn"
                                    data-browse="532" data-var="door" title="Датчик движения"><i class="fa fa-lock"
                                                                                               aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="col-md-2" style="padding-top: 30px">
                            <p style="line-height: 20px">Ошибка уровня:
                                <button class="btn btn-inverse-light btn-fw btn-sm toolipdate float-right error-btn interactive"
                                        data-browse="533" data-href="btn"
                                        data-var="unit.error_level" title="Проблемы с датчиками уровня"></button>
                            </p>
                            <p style="line-height: 20px">Ошибка насоса 1:
                                <button class="btn btn-inverse-light btn-fw btn-sm toolipdate float-right error-btn  interactive"
                                        data-browse="510" data-href="btn"
                                        data-var="unit.error_engine" title="Ошибка РКЗ"></button>
                            </p>
                            <p style="line-height: 20px">Ошибка насоса 2:
                                <button class="btn btn-inverse-light btn-fw btn-sm toolipdate float-right error-btn  interactive"
                                        data-browse="511" data-href="btn"
                                        data-var="unit.error_engine" title="Ошибка РКЗ"></button>
                            </p>
                            <p style="line-height: 20px">Ошибка насоса 3:
                                <button class="btn btn-inverse-light btn-fw btn-sm toolipdate float-right error-btn  interactive"
                                        data-browse="512" data-href="btn"
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
                                        data-browse="516"
                                        data-var="engine1mode"></span>

                                Автоматика насоса №2 <span style="margin-left: 20px; margin-right: 20px;"
                                         class="btn btn-sm btn-inverse-light btn-fw toolipdate interactive"
                                         data-href="btn"
                                         data-browse="517" data-var="engine1mode"></span>

                                Автоматика насоса №3 <span style="margin-left: 20px; margin-right: 20px;"
                                                           class="btn btn-sm btn-inverse-light btn-fw toolipdate interactive"
                                                           data-href="btn"
                                                           data-browse="518" data-var="engine1mode"></span>

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

            //point = chart.series[0].searchPoint(event, true); // Get the hovered point
            //point = searchPoint(event, chart);

            // if (point) {
            //     point.highlight(e);
            // }
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

    function requestVerticalLineForErrorData(stockChart, tag, color, msg, val=1) {
        $.get('/timeline?prm=' + tag + '&val=' + val, function(data) {
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
    Highcharts.getJSON('/history?prm=523', function (data) {
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
                    states: {
                        inactive: {
                            opacity: 1
                        }
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

        var levels_errors = requestVerticalLineForErrorData(stockChart, '509', '#FF0000','Ошибка уровня');
        var doors = requestVerticalLineForErrorData(stockChart, '532', '#ffc92a','Движение', 0);

    });

    var MainChartOptions = [], MainChartCounter = 0,
        MainChartTags = {
            '503': 'Насос №1',
            '504': 'Насос №2',
            '505': 'Насос №3',
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
                    if (MainChartCounter === 3) {
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
                        var engine1_errors = requestVerticalLineForErrorData(enginesChart, '510', '#ffaf4d', 'Ошибка двигателя 1');
                        var engine2_errors = requestVerticalLineForErrorData(enginesChart, '511', '#4dbc29', 'Ошибка двигателя 2');
                        var engine3_errors = requestVerticalLineForErrorData(enginesChart, '512', '#4dbc29', 'Ошибка двигателя 3');
                    }
                }

            }
        });
    }

    );




</script>