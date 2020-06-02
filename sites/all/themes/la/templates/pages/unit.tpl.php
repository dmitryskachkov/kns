<div class="row">
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <?php if ($unit) : ?>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <a class="default-text" href="/unit/<?php print $unit->id ?>">
                                    <h4><?php print $unit->title ?></h4>
                                    <p class="text-muted font-weight-light"><?php print $unit->description ?></p>
                                </a>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <button class="btn btn-inverse-light btn-fw" style="margin-bottom: 10px; margin-top: 20px" data-browse="<?php echo $unit->id; ?>" data-var="level4">4</button>
                                <button class="btn btn-inverse-light btn-fw" style="margin-bottom: 10px" data-browse="<?php echo $unit->id; ?>" data-var="level3">3</button>
                                <button class="btn btn-inverse-light btn-fw" style="margin-bottom: 10px" data-browse="<?php echo $unit->id; ?>" data-var="level2">2</button>
                                <button class="btn btn-inverse-light btn-fw" style="margin-bottom: 10px" data-browse="<?php echo $unit->id; ?>" data-var="level1">1</button>
                                <button class="btn btn-inverse-light btn-fw" style="margin-bottom: 5px" data-browse="<?php echo $unit->id; ?>" data-var="level0">0</button>

                            </div>
                            <div class="col-md-9">
                                <p class="small" style="margin-top:20px; margin-bottom: 20px">Насосы в работе:</p>
                                <p class="btn btn-outline-secondary btn-icon btn-rounded" style="margin-right: 12px;" data-browse="<?php echo $unit->id; ?>" data-var="engine1.status">1</p>
                                <p class="btn btn-outline-secondary btn-icon btn-rounded" style="margin-right: 12px;" data-browse="<?php echo $unit->id; ?>" data-var="engine2.status">2</p>
                                <p class="btn btn-outline-secondary btn-icon btn-rounded" style="margin-right: 12px;" data-browse="<?php echo $unit->id; ?>" data-var="engine3.status">3</p>
                                <hr>
                                <p style="line-height: 20px">Режим работы: <span class="float-right" data-browse="<?php echo $unit->id; ?>" data-var="unit.mode">Автомат</span> </p>
                                <p style="line-height: 20px">Температура: <span class="float-right" data-browse="<?php echo $unit->id; ?>" data-var="unit.temperature">0.00</span> </p>
                                <p style="line-height: 20px">Расход: <span class="float-right"data-browse="<?php echo $unit->id; ?>" data-var="unit.meter">0.00</span> </p>
                                <p style="line-height: 20px">Ошибка уровня: <button class="btn btn-inverse-light btn-fw btn-sm float-right" data-browse="<?php echo $unit->id; ?>" data-var="unit.error_level"></button></p>
                                <p style="line-height: 20px">Ошибка запуска насоса: <button class="btn btn-inverse-light btn-fw btn-sm float-right"data-browse="<?php echo $unit->id; ?>" data-var="unit.error_engine"></button></p>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
            <?php endif; ?>

        </div>
    </div>
    <div class="col-md-8 grid-margin stretch-card">
        <div class="card">

            <div class="card-body">
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                    google.charts.load('current', {'packages':['corechart']});
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                            ['Year', 'Sales', 'Expenses'],
                            ['2013',  1000,      400],
                            ['2014',  1170,      460],
                            ['2015',  660,       1120],
                            ['2016',  1030,      540]
                        ]);

                        var options = {
                            title: 'Company Performance',
                            hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
                            vAxis: {minValue: 0}
                        };

                        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
                        chart.draw(data, options);
                    }
                </script>
                <div id="chart_div" style="width: 100%; height: 340px;"></div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <i class="ti-lock" style="margin-right: 20px"></i>
                        <button class="btn btn-sm btn-light rounded-0" style="margin-right: 20px">Автомат / ручной</button>
                        <button class="btn btn-sm btn-outline-dark rounded-0 text-white" style="margin-right: 20px">Запустить насос 1</button>
                        <button class="btn btn-sm btn-outline-dark rounded-0 text-white" style="margin-right: 20px">Запустить насос 2</button>

                        <button class="btn btn-sm btn-outline-dark rounded-0 text-white" style="margin-right: 20px">Запустить насос 3</button>
                    </div>

                </div>

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
                        <?php if ($tags) : ?>
                          <?php foreach ($tags as $n => $tag): ?>
                                <tr>
                                    <td><?php echo $tag->title ?></td>
                                    <td class="font-weight-bold"><?php echo $tag->machine_name ?></td>
                                    <td><?php echo $tag->register ?></td>
                                    <td><?php echo $tag->length ?></td>
                                    <td><?php echo $tag->value; ?></td>
                                    <td><?php echo date('d.m.Y H:i' , $tag->changed); ?></td>
                                </tr>
                          <?php endforeach; ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="6"><p class="text-center" style="line-height: 300px">Тэгов в этом объекте пока нет</p></td>

                            </tr>
                        <?php endif ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>