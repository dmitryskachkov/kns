<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <?php if ($unit) : ?>
                    <div class="row">
                        <div class="col-lg-8">
                            <h3><?php print $unit->title; ?></h3>
                        </div>
                        <div class="col-lg-4">
                          <?php print render($unit_switch_form) ; ?>
                        </div>
                    </div>
                    <div class="row">
                        <hr>
                        <div class="col-lg-6">
                            <h4>Информация об объекте</h4>
                            <p>Наименование <span class="float-right"><?php print $unit->title; ?></span></p>
                            <p>Оборудование: <span class="float-right"><?php print $unit->field_device['und'][0]['value']; ?></span></p>
                            <hr>
                            <fieldset>
                                <h4>Отчет по работе уровней резервуара</h4>
                                <p>Количество уровней  <span class="float-right">0</span></p>
                                <p>Максимальный уровень за выбранный период  <span class="float-right">0</span></p>
                            </fieldset>
                        </div>
                        <div class="col-lg-6">

                            <fieldset>
                                <h4>Отчет по работе насосов</h4>
                                <p>Количество насосов  <span class="float-right"><?php print count($unit->engines); ?></span></p>
                              <?php foreach ($unit->engines as $n => $engine) : ?>
                                <?php $n++; ?>
                                  <p>Насос №<?php print $n ?>. Время работы  <span class="float-right"><?php print $engine['working'] ?> ч.</span></p>
                                  <p class="small">TAG: <?php print $engine['name']; ?></p>
                              <?php endforeach; ?>
                            </fieldset>
                            <hr>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <h5>Архивы за периоды:</h5>
                            <table class="table table-striped" style="width: 100%">
                                <thead>
                                <tr>
                                    <td>Период для просмотра истории</td>
                                    <td>Действия</td>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($history as $data): ?>
                                    <tr>
                                        <td>
                                          <?php print $data ; ?>
                                            <p class="small"><?php print $unit->title; ?> | <?php print $unit->field_device['und'][0]['value']; ?></p>
                                        </td>
                                        <td>
                                            <a href="/report/<?php print $unit->nid ; ?>/<?php print $data ; ?>">Открыть тренды</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php else: ?>
                <div class="row">
                    <div class="col-lg-12">
                        <h4>Добро пожаловать в панель отчётов по объектам.</h4>
                        <p>Выберите нужный объект в выпадающем списке и откроется страница просмотра отчёта</p>
                      <?php print render($unit_switch_form) ; ?>
                    </div>
                </div>
                <?php endif; ?>

            </div>

        </div>
    </div>
</div>