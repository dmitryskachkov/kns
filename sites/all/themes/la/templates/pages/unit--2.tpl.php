<div class="row">


<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">


                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <a class="default-text" href="/unit/2">
                                <h4>КНС №22 Дорожный</h4>
                                <p class="text-muted font-weight-light">пос. Дорожный | SE M241</p>
                            </a>
                            <button class="btn btn-inverse-light btn-fw toolipdate interactive"
                                    style="margin-bottom: 10px" data-href="btn"
                                    data-browse="DBAVl_kns1_m241_levels_level0" data-var="level0">0
                            </button>
                            <button class="btn btn-inverse-light btn-fw toolipdate interactive"
                                    style="margin-bottom: 10px" data-href="btn"
                                    data-browse="DBAVl_kns1_m241_levels_level1" data-var="level1">1
                            </button>
                            <button class="btn btn-inverse-light btn-fw toolipdate interactive"
                                    style="margin-bottom: 10px" data-href="btn"
                                    data-browse="DBAVl_kns1_m241_levels_level2" data-var="level2">2
                            </button>
                            <button class="btn btn-inverse-light btn-fw toolipdate interactive"
                                    style="margin-bottom: 10px; " data-href="btn"
                                    data-browse="DBAVl_kns1_m241_levels_level3" data-var="level3">3
                            </button>


                        </div>
                        <div class="col-md-2">
                            <h4>Насосы в работе</h4>
                            <p class="text-muted font-weight-light">Сигналы насосов</p>
                            <div style="margin-left: 10px">
                                <p class="btn btn-outline-secondary btn-icon btn-rounded toolipdate interactive"
                                   style="margin-right: 12px;" data-href="btn"
                                   data-browse="DBAVl_kns1_m241_engine1_engine1" data-var="engine1.status">1</p>
                                <p class="btn btn-outline-secondary btn-icon btn-rounded toolipdate interactive"
                                   style="margin-right: 12px;" data-href="btn"
                                   data-browse="DBAVl_kns1_m241_engine2_engine2" data-var="engine2.status">2</p>
                            </div>

                        </div>

                        <div class="col-md-4">
                            <h4>Прочее</h4>
                            <p class="text-muted font-weight-light">Дополнительные сигналы</p>
                            <button class="btn btn-inverse-light btn-fw toolipdate interactive"
                                    style="margin-bottom: 10px; " data-href="btn"
                                    data-browse="DBAVl_kns1_m241_main_voltage1" data-var="voltage1"><i
                                        class="fa fa-bolt"></i> 1
                            </button>
                            <button class="btn btn-inverse-light btn-fw toolipdate interactive"
                                    style="margin-bottom: 10px; " data-href="btn"
                                    data-browse="DBAVl_kns1_m241_main_voltage2" data-var="voltage2"><i
                                        class="fa fa-bolt"></i> 2
                            </button>
                            <button class="btn btn-inverse-light btn-fw toolipdate interactive"
                                    style="margin-bottom: 10px; " data-href="btn"
                                    data-browse="DBAVl_kns1_m241_main_cold" data-var="voltage2"><i
                                        class="fa fa-snowflake-o" aria-hidden="true"></i></button>
                            <button class="btn btn-inverse-light btn-fw toolipdate interactive"
                                    style="margin-bottom: 10px; " data-href="btn"
                                    data-browse="DBAVl_kns1_m241_main_door" data-var="door"><i class="fa fa-lock"
                                                                                               aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="col-md-2" style="padding-top: 30px">
                            <p style="line-height: 20px">Ошибка уровня:
                                <button class="btn btn-inverse-light btn-fw btn-sm toolipdate float-right error-btn interactive"
                                        data-browse="DBAVl_kns1_m241_levels_level_error" data-href="btn"
                                        data-var="unit.error_level"></button>
                            </p>
                            <p style="line-height: 20px">Ошибка насоса 1:
                                <button class="btn btn-inverse-light btn-fw btn-sm toolipdate float-right error-btn  interactive"
                                        data-browse="DBAVl_kns1_m241_engine1_engine1_erro" data-href="btn"
                                        data-var="unit.error_engine"></button>
                            </p>
                            <p style="line-height: 20px">Ошибка насоса 2:
                                <button class="btn btn-inverse-light btn-fw btn-sm toolipdate float-right error-btn  interactive"
                                        data-browse="DBAVl_kns1_m241_engine2_engine2_erro" data-href="btn"
                                        data-var="unit.error_engine"></button>
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
                                        data-browse="DBAVl_kns1_m241_main_engine1mode"
                                        data-var="engine1mode"></span> Автоматика насоса
                                №2 <span style="margin-left: 20px"
                                         class="btn btn-sm btn-inverse-light btn-fw toolipdate interactive"
                                         data-href="btn"
                                         data-browse="DBAVl_kns1_m241_main_engine2mode" data-var="engine1mode"></span>
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
                type: 'minute',
                count: 1,
                text: '1 час'
            },
            {
                type: 'hour',
                count: 6,
                text: '6 часов'
            },
            {
                type: 'hour',
                count: 12,
                text: '12 часов '
            },

        ],
        inputEnabled: false, // it supports only days
        selected: 2
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

    function requestVerticalLineForErrorData(tag, color) {
        jQuery.ajax({
            url: '/timeline?prm=' + tag,
            type: "GET",
            dataType: "json",
            success: function (data) {
                result = [];
                $.each(data, function (i, time) {
                    result.push({
                        color: color, // Red
                        width: 10,
                        value: time
                    });
                });
                console.log(result);
                return result.concat();
            },
            cache: false
        });
    }

    var levels_errors = requestVerticalLineForErrorData('DBAVl_kns1_m241_levels_level_error', '#FF0000');
    var engine1_errors = requestVerticalLineForErrorData('DBAVl_kns1_m241_engine1_engine1_erro', '#FF0000');
    var engine2_errors = requestVerticalLineForErrorData('DBAVl_kns1_m241_engine2_engine2_erro', '#FF0000');
    // var total_engines_errors = [].concat(engine1_errors, engine2_errors);

    Highcharts.getJSON('/history?prm=DBAVl_kns1_m241_levels_level_total', function (data) {
        // Create the chart

        Highcharts.stockChart('levels', {
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
                plotLines: levels_errors
            },

            chart: {
                type: 'area',
                zoomType: 'x'
            },
            title: {
                text: 'Уровень в резервуаре',
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
                name: 'Уровень в резервуаре',
                data: data,
                step: true,
                tooltip: {
                    valueDecimals: 0
                }
            }]
        });

    });
    var MainChartOptions = [], MainChartCounter = 0,
        MainChartTags = {
            'DBAVl_kns1_m241_engine1_engine1': 'Насос №1',
            'DBAVl_kns1_m241_engine2_engine2': 'Насос №2',
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
                        Highcharts.stockChart('engines', {

                            xAxis: {
                                ordinal: false,
                                plotLines: engine1_errors,
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
                            rangeSelector: {
                                enabled: false
                            },


                            title: {
                                text: 'Работа насосов',
                                floating: true,
                                align: 'bottom',
                                x: 20,
                                y: 30
                            },
                            series: MainChartOptions

                        });
                    }
                }

            }
        });
    });



</script>