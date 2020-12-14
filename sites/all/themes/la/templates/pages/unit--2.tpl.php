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
                                            class="fa fa-bolt"></i> 1</button>
                                <button class="btn btn-inverse-light btn-fw toolipdate interactive"
                                        style="margin-bottom: 10px; " data-href="btn"
                                        data-browse="DBAVl_kns1_m241_main_voltage2" data-var="voltage2"><i
                                            class="fa fa-bolt"></i> 2</button>
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
                                <p style="margin-top: 20px">Автоматика насоса №1 <span style="margin-left: 20px; margin-right: 20px"
                                                                                       class="btn btn-sm btn-inverse-light btn-fw toolipdate interactive"
                                                                                       data-href="btn"
                                                                                       data-browse="DBAVl_kns1_m241_main_engine1mode"
                                                                                       data-var="engine1mode"></span> Автоматика насоса
                                    №2 <span style="margin-left: 20px"
                                             class="btn btn-sm btn-inverse-light btn-fw toolipdate interactive" data-href="btn"
                                             data-browse="DBAVl_kns1_m241_main_engine2mode" data-var="engine1mode"></span></p>

                                <p style="margin-top: 20px"><i class="fa fa-mouse-pointer"></i> * Кликните на интерактивный элемент,
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

            <div class="card-body" id="charts">
                <div id="levels" style="width: 100%; height: 250px "></div>
                <div id="engines" style="width: 100%;height: 250px  "></div>
                <div id="engine2" style="width: 100%; "></div>
            </div>

        </div>
    </div>


<script type="text/javascript" src="/sites/all/modules/jquery_update/replace/jquery/1.8/jquery.min.js?v=1.8.3"></script>
<script type="text/javascript">
    Highcharts.theme = {
        colors: ['#f5a623', '#90ee7e', '#f45b5b', '#7798BF', '#aaeeee', '#ff0066',
            '#eeaaee', '#b1b1b5', '#DF5353', '#7798BF', '#aaeeee'],
        chart: {
            backgroundColor: {
                linearGradient: {x1: 0, y1: 0, x2: 1, y2: 1},
                stops: [
                    [0, '#27293d'],
                    [1, '#27293d']
                ]
            },
            style: {
                fontFamily: '\'Unica One\', sans-serif'
            },
            plotBorderColor: '#606063'
        },
        title: {
            style: {
                color: '#E0E0E3',
                textTransform: 'uppercase',
                fontSize: '20px'
            }
        },
        subtitle: {
            style: {
                color: '#E0E0E3',
                textTransform: 'uppercase'
            }
        },
        xAxis: {
            gridLineColor: '#707073',
            labels: {
                style: {
                    color: '#E0E0E3'
                }
            },
            lineColor: '#707073',
            minorGridLineColor: '#505053',
            tickColor: '#707073',
            title: {
                style: {
                    color: '#A0A0A3'
                }
            }
        },
        yAxis: {
            gridLineColor: '#707073',
            labels: {
                style: {
                    color: '#E0E0E3'
                }
            },
            lineColor: '#707073',
            minorGridLineColor: '#505053',
            tickColor: '#707073',
            tickWidth: 1,
            title: {
                style: {
                    color: '#A0A0A3'
                }
            }
        },
        tooltip: {
            backgroundColor: 'rgba(0, 0, 0, 0.85)',
            style: {
                color: '#F0F0F0'
            }
        },
        plotOptions: {
            series: {
                dataLabels: {
                    color: '#F0F0F3',
                    style: {
                        fontSize: '13px'
                    }
                },
                marker: {
                    lineColor: '#333'
                }
            },
            boxplot: {
                fillColor: '#505053'
            },
            candlestick: {
                lineColor: 'white'
            },
            errorbar: {
                color: 'white'
            }
        },
        legend: {
            backgroundColor: 'rgba(0, 0, 0, 0.5)',
            itemStyle: {
                color: '#E0E0E3'
            },
            itemHoverStyle: {
                color: '#FFF'
            },
            itemHiddenStyle: {
                color: '#606063'
            },
            title: {
                style: {
                    color: '#C0C0C0'
                }
            }
        },
        credits: {
            style: {
                color: '#666'
            }
        },
        labels: {
            style: {
                color: '#707073'
            }
        },
        drilldown: {
            activeAxisLabelStyle: {
                color: '#F0F0F3'
            },
            activeDataLabelStyle: {
                color: '#F0F0F3'
            }
        },
        navigation: {
            buttonOptions: {
                symbolStroke: '#DDDDDD',
                theme: {
                    fill: '#27293d'
                }
            }
        },
        // scroll charts
        rangeSelector: {
            buttonTheme: {
                fill: '#505053',
                stroke: '#000000',
                style: {
                    color: '#CCC'
                },
                states: {
                    hover: {
                        fill: '#707073',
                        stroke: '#000000',
                        style: {
                            color: 'white'
                        }
                    },
                    select: {
                        fill: '#000003',
                        stroke: '#000000',
                        style: {
                            color: 'white'
                        }
                    }
                }
            },
            inputBoxBorderColor: '#27293d',
            inputStyle: {
                backgroundColor: '#333',
                color: 'silver'
            },
            labelStyle: {
                color: 'silver'
            }
        },
        navigator: {
            handles: {
                backgroundColor: '#666',
                borderColor: '#AAA'
            },
            outlineColor: '#CCC',
            maskFill: 'rgba(255,255,255,0.1)',
            series: {
                color: '#7798BF',
                lineColor: '#A6C7ED'
            },
            xAxis: {
                gridLineColor: '#505053'
            }
        },
        scrollbar: {
            barBackgroundColor: '#808083',
            barBorderColor: '#808083',
            buttonArrowColor: '#CCC',
            buttonBackgroundColor: '#606063',
            buttonBorderColor: '#606063',
            rifleColor: '#FFF',
            trackBackgroundColor: '#404043',
            trackBorderColor: '#404043'
        }
    };
    // Apply the theme
    Highcharts.setOptions(Highcharts.theme);
    Highcharts.setOptions({
        time: {
            timezoneOffset: +5 * 60
        }
    });
    var RangeSelectorTemplate = {
        buttons: [
            {
                type: 'minute',
                count: 1,
                text: '1m'
            },
            {
                type: 'minute',
                count: 5,
                text: '5m'
            },
            {
                type: 'hour',
                count: 3,
                text: '3h'
            },
            {
                type: 'hour',
                count: 12,
                text: '12h'
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
                if (x - range < pointX && pointX < x + range ) {
                    return points[i];
                }
            }
        }

        $('#charts').bind('mousemove touchmove touchstart', function(e) {
            var chart,
                point,
                i,
                event;

            for (i = 0; i < Highcharts.charts.length; i = i + 1) {
                chart = Highcharts.charts[i];
                event = chart.pointer.normalize(e.originalEvent); // Find coordinates within the chart

                // point = chart.series[0].searchPoint(event, true); // Get the hovered point
                point = searchPoint(event, chart);

                if (point) {
                    point.highlight(e);
                }
            }
        });
        /**
         * Override the reset function, we don't need to hide the tooltips and crosshairs.
         */
        Highcharts.Pointer.prototype.reset = function() {
            return undefined;
        };

        /**
         * Highlight a point by showing tooltip, setting hover state and draw crosshair
         */
        Highcharts.Point.prototype.highlight = function(event) {
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
                Highcharts.each(Highcharts.charts, function(chart) {
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
    var day = (Date.now()/ 1000) - 86400;

    function requestVerticalLineForErrorData(tag, color) {
        jQuery.ajax({
            url: '/timeline?prm=' + tag,
            type: "GET",
            dataType: "json",
            success: function (data) {
                result = [];
                $.each(data, function (i,time) {
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

    var levels_errors = requestVerticalLineForErrorData('DBAVl_kns1_m241_levels_level_error','#FF0000');
    var engine1_errors = requestVerticalLineForErrorData('DBAVl_kns1_m241_engine1_engine1_erro','#FF0000');
    var engine2_errors = requestVerticalLineForErrorData('DBAVl_kns1_m241_engine2_engine2_erro','#FF0000');
   // var total_engines_errors = [].concat(engine1_errors, engine2_errors);

    Highcharts.getJSON('/history?prm=DBAVl_kns1_m241_levels_level_total' + '&start=' + day , function (data) {
        // Create the chart

        Highcharts.chart('levels', {
            xAxis: {
                type: 'datetime',
                minRange: 300 * 1000,
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
                text: 'Уровень в резервуаре'
            },
            plotOptions: {
                area: {
                    marker: {
                        enabled: false,
                        symbol: 'circle',
                        radius: 2,
                        states: {
                            hover: {
                                enabled: true
                            }
                        }
                    }
                }
            },
            series: [{
                type: 'area',
                name: 'Уровень в резервуаре',
                data: data,
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
        url: '/history?prm=' + tag + '&start=' + day ,
        type: 'GET',
        dataType: 'json',
        success: function (data) {
          if (data) {
            MainChartOptions[MainChartCounter] = {name: name, data: data};

            MainChartCounter += 1;
            if (MainChartCounter === 2) {
              Highcharts.chart('engines',{

                xAxis: {
                    plotLines: engine1_errors,
                    type: 'datetime',
                    minRange: 300 * 1000,
                    events: {
                        setExtremes: syncExtremes
                    },
                },
                chart: {
                  type: 'area',
                  zoomType: 'x'
                },
                rangeSelector: RangeSelectorTemplate,
                  plotOptions: {
                      area: {
                          marker: {
                              enabled: false,
                              symbol: 'circle',
                              radius: 2,
                              states: {
                                  hover: {
                                      enabled: true
                                  }
                              }
                          }
                      }
                  },

                title: {text: 'Работа насосов'},
                series: MainChartOptions

              });
            }
          }

        }
      });
    });
    // Highcharts.getJSON('/history?prm=DBAVl_kns1_m241_engine1_engine1', function (data) {
    //
    //
    //     // Create the chart
    //     Highcharts.chart('engine1', {
    //
    //         xAxis: {
    //             type: 'datetime',
    //             minRange: 300 * 1000,
    //             events: {
    //                 setExtremes: syncExtremes
    //             },
    //         },
    //
    //
    //         title: {
    //             text: 'Работа насоса №1'
    //         },
    //
    //         series: [{
    //             name: 'Статус насоса',
    //             data: data,
    //             step: true,
    //             tooltip: {
    //                 valueDecimals: 0
    //             }
    //         }]
    //     });
    //
    // });
    //
    // Highcharts.getJSON('/history?prm=DBAVl_kns1_m241_engine2_engine2', function (data) {
    //
    //
    //     // Create the chart
    //     Highcharts.chart('engine2', {
    //
    //         xAxis: {
    //             type: 'datetime',
    //             minRange: 300 * 1000,
    //             events: {
    //                 setExtremes: syncExtremes
    //             },
    //         },
    //
    //
    //         title: {
    //             text: 'Работа насоса №2'
    //         },
    //
    //         series: [{
    //             name: 'Статус насоса',
    //             data: data,
    //             step: true,
    //             tooltip: {
    //                 valueDecimals: 0
    //             }
    //         }]
    //     });
    //
    // });
    // Highcharts.chart('main-chart',{
    //
    //             xAxis: {
    //                 events: {
    //                     setExtremes: syncExtremes
    //                 },
    //                 labels: {
    //                     format: '{value} km'
    //                 }
    //             },
    //
    //             tooltip: {
    //                 positioner: function() {
    //                     return {
    //                         x: this.chart.chartWidth - this.label.width, // right aligned
    //                         y: -1 // align to title
    //                     };
    //                 },
    //                 borderWidth: 0,
    //                 backgroundColor: 'none',
    //                 pointFormat: '{point.y}',
    //                 headerFormat: '',
    //                 shadow: false,
    //                 style: {
    //                     fontSize: '18px'
    //                 }
    //             },
    //             series: [{
    //                 lineWidth:1,
    //                 data: [0.35,0.33,0.54,0.47,0.24,0.35,0.48,0.21,0.5,0.35,0.06,0.53, 0.3],
    //                 type: 'line'
    //             }]
    //       s  });
    //








</script>