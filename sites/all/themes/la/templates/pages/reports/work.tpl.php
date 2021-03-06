<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                        <div>
                            <p>Выбранный период: <?= $period . '.' . date('Y'); ?></p>
                            <div style="float: right">

                              <?php print render($period_switch_form) ; ?>
                            </div>
                        </div>


                    <?php if ($units): ?>


                        <?php foreach($units as $unit): ?>

                                <div class="col-lg-12">
                                    <h4><?= $unit->title ?></h4>
                                    <p>Адрес: <?= $unit->description; ?></p>
                                    <hr>
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <td>№</td>
                                            <td>Название агрегата</td>
                                            <td>Наработка</td>
                                            <td>Производительность</td>
                                            <td>Объём стоков</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php if (isset($unit->engines)) : ?>

                                            <?php foreach ($unit->engines as $n => $engine): ?>
                                                <?php
                                                $engine_q = core_perfomance_engine_stat($engine->field_tag_id['und'][0]['value'], $period, 'second') / 3600  * $engine->field_performance_q['und'][0]['value'];
                                                $unit->total_q = $unit->total_q + $engine_q;
                                                ?>
                                                <tr>
                                                    <td><?= $n ?></td>
                                                    <td><?= $engine->title; ?></td>
                                                    <td><?= core_perfomance_engine_stat($engine->field_tag_id['und'][0]['value'], $period, 'time') ?></td>
                                                    <td><?= $engine->field_performance_q['und'][0]['value'] ?> м3/час</td>
                                                    <td><?= number_format($engine_q, 2) ?> м3</td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                        <tr>
                                            <td colspan="4" style="text-align: right; font-weight: bold">Итого</td>
                                            <td><?= number_format($unit->total_q, 2) ?> м3</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <hr style="margin-bottom: 30px">
                                </div>


                        <?php endforeach; ?>
                        </div>
                    <?php endif; ?>


            </div>
        </div>
    </div>
</div>


