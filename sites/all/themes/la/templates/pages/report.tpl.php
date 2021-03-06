<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <?php if ($unit) : ?>
                    <div class="row">
                        <div class="col-lg-8">
                            <h3><?php print $unit->title; ?></h3>
                            <p><?php print $unit->description; ?></p>
                        </div>
                        <div class="col-lg-4">
                          <?php print render($unit_switch_form) ; ?>
                        </div>
                    </div>
                    <div class="row">
                        <hr>
                        <div class="col-lg-6">
                            <h4>Информация об объекте</h4>
                            <p>Наименование <span class="float-right"> </span></p>
                            <p>Оборудование: <span class="float-right"> </span></p>
                            <hr>
                            <p>PLC VPN  Local IP: <span class="float-right">192.168.88.2</span></p>
                            <p>Router VPN  Local IP: <span class="float-right">192.168.88.1</span></p>
                            <p>Router VPN Public IP: <span class="float-right">192.168.22.51</span></p>

                        </div>
                        <div class="col-lg-6">

                            <fieldset>
                                <h4>Отчет по работе насосов</h4>
                                <p>Количество насосов  <span class="float-right"><?php print core_tag_get($unit->field_tag_engine_count['und'][0]['value']); ?></span></p>
                                <p>Количество аварий уровня  <span class="float-right"><?php print core_tag_get($unit->field_tag_level_error['und'][0]['value']); ?></span></p>
                                <p>Количество аварий насосов  <span class="float-right"><?php print core_tag_get($unit->field_tag_engine_error['und'][0]['value']); ?></span></p>
                                <?php $engines_t = explode(',',$unit->field_tag_engines_time['und'][0]['value']); ?>
                                <?php $e=0; ?>
                                <?php for($i=1; $i<=core_tag_get($unit->field_tag_engine_count['und'][0]['value']); $i++): ?>

                                    <p>Время работы насоса №<?php print $i; ?>  <span class="float-right"><?php print core_tag_get($engines_t[$e]); ?> секунд (<?php print number_format(core_tag_get($engines_t[$e])/60, 1); ?> мин.)</span></p>
                                    <?php $e++; ?>
                                <?php endfor; ?>
                            </fieldset>
                            <hr>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <hr>
                            <h4>Журнал работы станции:</h4>
                            <table class="table" id="journal">
                                <thead>
                                <tr>
                                    <td>№</td>
                                    <td>Событие</td>
                                    <td>Статус</td>
                                    <td>Дата и время</td>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if ($history): ?>
                                <?php foreach ($history as $i =>$log_line): ?>
                                <tr>
                                    <td><?php print $i; ?></td>
                                    <td>
                                        <?php print $log_line->tag_name; ?> : <?php print $log_line->state; ?>
                                        <p class="small">Старое значение: <?php print $log_line->oldcnlval; ?>. Новое значение: <?php print $log_line->newcnlval; ?> . Тэг <?php print $log_line->cnlnum; ?></p>
                                    </td>
                                    <td><?php print ($log_line->checked == 1 ? 'Квитировано пользователем': 'В журнале'); ?></td>
                                    <td><?php print $log_line->created; ?></td>
                                </tr>
                                <?php endforeach; ?>
                                <?php endif; ?>
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
