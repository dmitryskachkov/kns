<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">

                <div id="main-chart" style="width: 100%; height: 340px;"></div>
            </div>
        </div>
    </div>
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <a class="default-text" href="/unit/2">
                                    <h4>КНС №22 Дорожный</h4>
                                    <p class="text-muted font-weight-light">пос. Дорожный | SE M241</p>
                                </a>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <button class="btn btn-inverse-light btn-fw hiddex-xs"
                                        style="margin-bottom: 10px; background-color: transparent"></button>
                                <button class="btn btn-inverse-light btn-fw toolipdate interactive"
                                        style="margin-bottom: 10px; " data-href="btn"
                                        data-browse="DBAVl_kns1_m241_levels_level3" data-var="level3">3
                                </button>
                                <button class="btn btn-inverse-light btn-fw toolipdate interactive"
                                        style="margin-bottom: 10px" data-href="btn"
                                        data-browse="DBAVl_kns1_m241_levels_level2" data-var="level2">2
                                </button>
                                <button class="btn btn-inverse-light btn-fw toolipdate interactive"
                                        style="margin-bottom: 10px" data-href="btn"
                                        data-browse="DBAVl_kns1_m241_levels_level1" data-var="level1">1
                                </button>
                                <button class="btn btn-inverse-light btn-fw toolipdate interactive"
                                        style="margin-bottom: 10px" data-href="btn"
                                        data-browse="DBAVl_kns1_m241_levels_level0" data-var="level0">0
                                </button>

                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                                <p class="small" style="margin-top:20px; margin-bottom: 20px">Насосы в работе:</p>
                                <div style="margin-left: 10px">
                                    <p class="btn btn-outline-secondary btn-icon btn-rounded toolipdate interactive"
                                       style="margin-right: 12px;" data-href="btn"
                                       data-browse="DBAVl_kns1_m241_engine1_engine1" data-var="engine1.status">1</p>
                                    <p class="btn btn-outline-secondary btn-icon btn-rounded toolipdate interactive"
                                       style="margin-right: 12px;" data-href="btn"
                                       data-browse="DBAVl_kns1_m241_engine2_engine2" data-var="engine2.status">2</p>
                                </div>
                                <hr>
                                <p style="line-height: 20px">Режим работы: <span
                                            class="float-right interactive toolipdate text-attr"
                                            data-browse="DBAVl_kns1_m241_main_mainmode" data-href="text"
                                            data-var="unit.mode">Автомат</span></p>
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
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <button class="btn btn-inverse-light btn-fw toolipdate interactive"
                                        style="margin-bottom: 10px; " data-href="btn"
                                        data-browse="DBAVl_kns1_m241_main_voltage1" data-var="voltage1"><i
                                            class="fa fa-bolt"></i></button>
                                <p class="small">Ввод №1</p>
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-inverse-light btn-fw toolipdate interactive"
                                        style="margin-bottom: 10px; " data-href="btn"
                                        data-browse="DBAVl_kns1_m241_main_voltage2" data-var="voltage2"><i
                                            class="fa fa-bolt"></i></button>
                                <p class="small">Ввод №2</p>
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-inverse-light btn-fw toolipdate interactive"
                                        style="margin-bottom: 10px; " data-href="btn"
                                        data-browse="DBAVl_kns1_m241_main_cold" data-var="voltage2"><i
                                            class="fa fa-snowflake-o" aria-hidden="true"></i></button>
                                <p class="small">Температ.</p>
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-inverse-light btn-fw toolipdate interactive"
                                        style="margin-bottom: 10px; " data-href="btn"
                                        data-browse="DBAVl_kns1_m241_main_door" data-var="door"><i class="fa fa-sign-in"
                                                                                                   aria-hidden="true"></i>
                                </button>
                                <p class="small">Вход</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
    <div class="col-md-8 grid-margin stretch-card">
        <div class="card">

            <div class="card-body">
                <div id="level-chart" style="width: 100%; height: 340px;"></div>
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
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">

            <div class="card-body">
                <div id="engine1-chart" style="width: 100%; height: 260px;"></div>
            </div>
        </div>
    </div>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">

            <div class="card-body">
                <div id="engine2-chart" style="width: 100%; height: 260px;"></div>
            </div>
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
                count: 1,
                text: '1h'
            },
            {
                type: 'hour',
                count: 3,
                text: '3h'
            },

        ],
        inputEnabled: false, // it supports only days
        selected: 2
    };
    var xAxisTemplate = {
        type: 'datetime',
        minRange: 300 * 1000
    };

    Highcharts.setOptions({
        global: {
            useUTC: false
        }
    });

    Highcharts.getJSON('/history?prm=DBAVl_kns1_m241_levels_level_total', function (data) {
        // Create the chart

        Highcharts.stockChart('level-chart', {

            xAxis: xAxisTemplate,
            rangeSelector: RangeSelectorTemplate,
            // rangeSelector: {
            //   selected: 1
            // },
            title: {
                text: 'Уровень в резервуаре'
            },

            series: [{
                type: 'area',
                name: 'Уровень',
                data: data,
                tooltip: {
                    valueDecimals: 0
                }
            }]
        });

    });

    Highcharts.getJSON('/history?prm=DBAVl_kns1_m241_engine1_engine1', function (data) {


        // Create the chart
        Highcharts.stockChart('engine1-chart', {

            xAxis: xAxisTemplate,
            rangeSelector: RangeSelectorTemplate,


            title: {
                text: 'Работа насоса №1'
            },

            series: [{
                name: 'Статус насоса',
                data: data,
                step: true,
                tooltip: {
                    valueDecimals: 0
                }
            }]
        });

    });

    Highcharts.getJSON('/history?prm=DBAVl_kns1_m241_engine2_engine2', function (data) {


        // Create the chart
        Highcharts.stockChart('engine2-chart', {

            xAxis: xAxisTemplate,
            rangeSelector: RangeSelectorTemplate,


            title: {
                text: 'Работа насоса №2'
            },

            series: [{
                name: 'Статус насоса',
                data: data,
                step: true,
                tooltip: {
                    valueDecimals: 0
                }
            }]
        });

    });


   // test = {'tag1':'привет1', 'tag2':'привет2'};

    var MainChartOptions = [], MainChartCounter = 0,
    MainChartTags = {
      'DBAVl_kns1_m241_engine1_engine1': 'Насос №1',
      'DBAVl_kns1_m241_engine2_engine2': 'Насос №2',
      'DBAVl_kns1_m241_levels_level_total':'Уровень в резервуаре',
      'DBAVl_kns1_m241_main_door':'Датчик движения',
      'DBAVl_kns1_m241_main_voltage1':'Ввод №1',
      'DBAVl_kns1_m241_main_voltage2':'Ввод №2',
    };

    $('#main-chart').append('<p class="chart-loader"> Загружаю данные ...</p>');

    $.each(MainChartTags, function (tag, name) {
      $.ajax({
        url: '/history?prm=' + tag,
        type: 'GET',
        dataType: 'json',
        success: function (data) {
          if (data) {
            MainChartOptions[MainChartCounter] = {name: name, data: data};

            MainChartCounter += 1;
            if (MainChartCounter === 6) {
              Highcharts.chart('main-chart',{
                xAxis: xAxisTemplate,
                rangeSelector: RangeSelectorTemplate,
                title: {text: 'Общая статистика по объекту'},
                series: MainChartOptions

              });
            }
          }

        }
      });
    });



</script>