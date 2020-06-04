<script src="https://code.highcharts.com/stock/highstock.js"></script>
<script src="https://code.highcharts.com/stock/modules/data.js"></script>
<script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
<script src="https://code.highcharts.com/stock/modules/export-data.js"></script>


<div class="row">
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <a class="default-text" href="/unit/2">
                                    <h4>КНС Дорожный</h4>
                                    <p class="text-muted font-weight-light">пос. Дорожный | SE M241</p>
                                </a>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <button class="btn btn-inverse-light btn-fw" style="margin-bottom: 10px; background-color: transparent" > </button>
                                <button class="btn btn-inverse-light btn-fw interactive" style="margin-bottom: 10px; " data-href="btn" data-browse="DBAVl_kns1_m241_levels_level3" data-var="level3">3</button>
                                <button class="btn btn-inverse-light btn-fw interactive" style="margin-bottom: 10px" data-href="btn" data-browse="DBAVl_kns1_m241_levels_level2" data-var="level2">2</button>
                                <button class="btn btn-inverse-light btn-fw interactive" style="margin-bottom: 10px" data-href="btn" data-browse="DBAVl_kns1_m241_levels_level1" data-var="level1">1</button>
                                <button class="btn btn-inverse-light btn-fw interactive" style="margin-bottom: 10px" data-href="btn" data-browse="DBAVl_kns1_m241_levels_level0" data-var="level0">0</button>

                            </div>
                            <div class="col-md-9">
                                <p class="small" style="margin-top:20px; margin-bottom: 20px">Насосы в работе:</p>
                                <div style="margin-left: 10px">
                                    <p class="btn btn-outline-secondary btn-icon btn-rounded interactive" style="margin-right: 12px;" data-href="btn" data-browse="DBAVl_kns1_m241_engine1_engine1" data-var="engine1.status">1</p>
                                    <p class="btn btn-outline-secondary btn-icon btn-rounded interactive" style="margin-right: 12px;" data-href="btn" data-browse="DBAVl_kns1_m241_engine2_engine2" data-var="engine2.status">2</p>
                                </div>
                                <hr>
                                <p style="line-height: 20px">Режим работы: <span class="float-right interactive text-attr" data-browse="DBAVl_kns1_m241_main_mainmode" data-href="text" data-var="unit.mode">Автомат</span> </p>
                                <p style="line-height: 20px">Ошибка уровня: <button class="btn btn-inverse-light btn-fw btn-sm float-right error-btn interactive" data-browse="DBAVl_kns1_m241_levels_level_error" data-href="btn" data-var="unit.error_level"></button></p>
                                <p style="line-height: 20px">Ошибка насоса 1: <button class="btn btn-inverse-light btn-fw btn-sm float-right error-btn  interactive"data-browse="DBAVl_kns1_m241_engine1_engine1_erro" data-href="btn"data-var="unit.error_engine"></button></p>
                                <p style="line-height: 20px">Ошибка насоса 2: <button class="btn btn-inverse-light btn-fw btn-sm float-right error-btn  interactive"data-browse="DBAVl_kns1_m241_engine2_engine2_erro" data-href="btn" data-var="unit.error_engine"></button></p>
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
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">

            <div class="card-body">
                <div>
                    <table class="table table-striped table-borderless">
                        <thead>

                        <tr>
                            <th>Название тэга</th>
                            <th>Машинное имя</th>
                            <th>Номер регистра</th>
                            <th>Длина</th>
                            <th>Текущее значение</th>
                            <th>Последний опрос</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    Highcharts.getJSON('https://www.highcharts.com/samples/data/aapl-c.json', function (data) {
        // Create the chart
        Highcharts.stockChart('level-chart', {


            rangeSelector: {
                selected: 1
            },

            title: {
                text: 'AAPL Stock Price'
            },

            series: [{
                name: 'AAPL',
                data: data,
                tooltip: {
                    valueDecimals: 2
                }
            }]
        });
    });


</script>