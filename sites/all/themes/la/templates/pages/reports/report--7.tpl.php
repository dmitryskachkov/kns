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
                        <p>Router VPN Public IP: <span class="float-right">192.168.22.53</span></p>

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
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">

            <div class="card-body">
              <?php print render($date_form); ?>
                <h4>Дневной календарь событий ( в разработке)</h4>
                <p>Кликните на нужную почасовку, чтобы получить подробную информацию</p>
                <hr>
                <table class="table table-bordered table-hover" id="table-daily" data-time="<?php print $date; ?>">
                    <thead>
                    <tr style="text-align: center">
                        <th><p>Часы суток:</p></th>
                        <th>00</th>
                        <th>01</th>
                        <th>02</th>
                        <th>03</th>
                        <th>04</th>
                        <th>05</th>
                        <th>06</th>
                        <th>07</th>
                        <th>09</th>
                        <th>10</th>
                        <th>11</th>
                        <th>12</th>
                        <th>13</th>
                        <th>14</th>
                        <th>15</th>
                        <th>16</th>
                        <th>17</th>
                        <th>18</th>
                        <th>19</th>
                        <th>20</th>
                        <th>21</th>
                        <th>22</th>
                        <th>23</th>
                        <th>ИТОГО</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr data-browse="309" class="color-interactive">
                        <th><p>Аварии уровня</p></th>
                        <td data-start-time="<?php print $date; ?>" data-end-time="<?php print $date + (3600*1); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*1); ?>" data-end-time="<?php print $date + (3600*2); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*2); ?>" data-end-time="<?php print $date + (3600*3); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*3); ?>" data-end-time="<?php print $date + (3600*4); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*4); ?>" data-end-time="<?php print $date + (3600*5); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*5); ?>" data-end-time="<?php print $date + (3600*6); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*6); ?>" data-end-time="<?php print $date + (3600*7); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*7); ?>" data-end-time="<?php print $date + (3600*8); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*8); ?>" data-end-time="<?php print $date + (3600*9); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*9); ?>" data-end-time="<?php print $date + (3600*10); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*10); ?>" data-end-time="<?php print $date + (3600*11); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*11); ?>" data-end-time="<?php print $date + (3600*12); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*12); ?>" data-end-time="<?php print $date + (3600*13); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*13); ?>" data-end-time="<?php print $date + (3600*14); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*14); ?>" data-end-time="<?php print $date + (3600*15); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*15); ?>" data-end-time="<?php print $date + (3600*16); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*16); ?>" data-end-time="<?php print $date + (3600*17); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*17); ?>" data-end-time="<?php print $date + (3600*18); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*18); ?>" data-end-time="<?php print $date + (3600*19); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*19); ?>" data-end-time="<?php print $date + (3600*20); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*20); ?>" data-end-time="<?php print $date + (3600*21); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*21); ?>" data-end-time="<?php print $date + (3600*22); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*22); ?>" data-end-time="<?php print $date + (3600*23); ?>"></td>
                        <td class="total" data-start-time="<?php print $date + (3600); ?>" data-end-time="<?php print $date + (3600*23); ?>"></td>
                    </tr>
                    <tr data-browse="310" class="color-interactive">
                        <th><p>Авария насоса №1</p></th>
                        <td data-start-time="<?php print $date; ?>" data-end-time="<?php print $date + (3600*1); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*1); ?>" data-end-time="<?php print $date + (3600*2); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*2); ?>" data-end-time="<?php print $date + (3600*3); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*3); ?>" data-end-time="<?php print $date + (3600*4); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*4); ?>" data-end-time="<?php print $date + (3600*5); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*5); ?>" data-end-time="<?php print $date + (3600*6); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*6); ?>" data-end-time="<?php print $date + (3600*7); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*7); ?>" data-end-time="<?php print $date + (3600*8); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*8); ?>" data-end-time="<?php print $date + (3600*9); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*9); ?>" data-end-time="<?php print $date + (3600*10); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*10); ?>" data-end-time="<?php print $date + (3600*11); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*11); ?>" data-end-time="<?php print $date + (3600*12); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*12); ?>" data-end-time="<?php print $date + (3600*13); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*13); ?>" data-end-time="<?php print $date + (3600*14); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*14); ?>" data-end-time="<?php print $date + (3600*15); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*15); ?>" data-end-time="<?php print $date + (3600*16); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*16); ?>" data-end-time="<?php print $date + (3600*17); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*17); ?>" data-end-time="<?php print $date + (3600*18); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*18); ?>" data-end-time="<?php print $date + (3600*19); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*19); ?>" data-end-time="<?php print $date + (3600*20); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*20); ?>" data-end-time="<?php print $date + (3600*21); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*21); ?>" data-end-time="<?php print $date + (3600*22); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*22); ?>" data-end-time="<?php print $date + (3600*23); ?>"></td>
                        <td class="total" data-start-time="<?php print $date + (3600); ?>" data-end-time="<?php print $date + (3600*23); ?>"></td>
                    </tr>
                    <tr data-browse="311" class="color-interactive">
                        <th><p>Авария насоса №2</p></th>
                        <td data-start-time="<?php print $date; ?>" data-end-time="<?php print $date + (3600*1); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*1); ?>" data-end-time="<?php print $date + (3600*2); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*2); ?>" data-end-time="<?php print $date + (3600*3); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*3); ?>" data-end-time="<?php print $date + (3600*4); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*4); ?>" data-end-time="<?php print $date + (3600*5); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*5); ?>" data-end-time="<?php print $date + (3600*6); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*6); ?>" data-end-time="<?php print $date + (3600*7); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*7); ?>" data-end-time="<?php print $date + (3600*8); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*8); ?>" data-end-time="<?php print $date + (3600*9); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*9); ?>" data-end-time="<?php print $date + (3600*10); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*10); ?>" data-end-time="<?php print $date + (3600*11); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*11); ?>" data-end-time="<?php print $date + (3600*12); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*12); ?>" data-end-time="<?php print $date + (3600*13); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*13); ?>" data-end-time="<?php print $date + (3600*14); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*14); ?>" data-end-time="<?php print $date + (3600*15); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*15); ?>" data-end-time="<?php print $date + (3600*16); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*16); ?>" data-end-time="<?php print $date + (3600*17); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*17); ?>" data-end-time="<?php print $date + (3600*18); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*18); ?>" data-end-time="<?php print $date + (3600*19); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*19); ?>" data-end-time="<?php print $date + (3600*20); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*20); ?>" data-end-time="<?php print $date + (3600*21); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*21); ?>" data-end-time="<?php print $date + (3600*22); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*22); ?>" data-end-time="<?php print $date + (3600*23); ?>"></td>
                        <td class="total" data-start-time="<?php print $date + (3600); ?>" data-end-time="<?php print $date + (3600*23); ?>"></td>
                    </tr>
                    <tr data-browse="316" class="color-interactive">
                        <th><p>Отключение автоматики насоса №1</p></th>
                        <td data-start-time="<?php print $date; ?>" data-end-time="<?php print $date + (3600*1); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*1); ?>" data-end-time="<?php print $date + (3600*2); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*2); ?>" data-end-time="<?php print $date + (3600*3); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*3); ?>" data-end-time="<?php print $date + (3600*4); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*4); ?>" data-end-time="<?php print $date + (3600*5); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*5); ?>" data-end-time="<?php print $date + (3600*6); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*6); ?>" data-end-time="<?php print $date + (3600*7); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*7); ?>" data-end-time="<?php print $date + (3600*8); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*8); ?>" data-end-time="<?php print $date + (3600*9); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*9); ?>" data-end-time="<?php print $date + (3600*10); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*10); ?>" data-end-time="<?php print $date + (3600*11); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*11); ?>" data-end-time="<?php print $date + (3600*12); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*12); ?>" data-end-time="<?php print $date + (3600*13); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*13); ?>" data-end-time="<?php print $date + (3600*14); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*14); ?>" data-end-time="<?php print $date + (3600*15); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*15); ?>" data-end-time="<?php print $date + (3600*16); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*16); ?>" data-end-time="<?php print $date + (3600*17); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*17); ?>" data-end-time="<?php print $date + (3600*18); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*18); ?>" data-end-time="<?php print $date + (3600*19); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*19); ?>" data-end-time="<?php print $date + (3600*20); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*20); ?>" data-end-time="<?php print $date + (3600*21); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*21); ?>" data-end-time="<?php print $date + (3600*22); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*22); ?>" data-end-time="<?php print $date + (3600*23); ?>"></td>
                        <td class="total" data-start-time="<?php print $date + (3600); ?>" data-end-time="<?php print $date + (3600*23); ?>"></td>
                    </tr>
                    <tr data-browse="317" class="color-interactive">
                        <th><p>Отключение автоматики насоса №2</p></th>
                        <td data-start-time="<?php print $date; ?>" data-end-time="<?php print $date + (3600*1); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*1); ?>" data-end-time="<?php print $date + (3600*2); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*2); ?>" data-end-time="<?php print $date + (3600*3); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*3); ?>" data-end-time="<?php print $date + (3600*4); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*4); ?>" data-end-time="<?php print $date + (3600*5); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*5); ?>" data-end-time="<?php print $date + (3600*6); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*6); ?>" data-end-time="<?php print $date + (3600*7); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*7); ?>" data-end-time="<?php print $date + (3600*8); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*8); ?>" data-end-time="<?php print $date + (3600*9); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*9); ?>" data-end-time="<?php print $date + (3600*10); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*10); ?>" data-end-time="<?php print $date + (3600*11); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*11); ?>" data-end-time="<?php print $date + (3600*12); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*12); ?>" data-end-time="<?php print $date + (3600*13); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*13); ?>" data-end-time="<?php print $date + (3600*14); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*14); ?>" data-end-time="<?php print $date + (3600*15); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*15); ?>" data-end-time="<?php print $date + (3600*16); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*16); ?>" data-end-time="<?php print $date + (3600*17); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*17); ?>" data-end-time="<?php print $date + (3600*18); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*18); ?>" data-end-time="<?php print $date + (3600*19); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*19); ?>" data-end-time="<?php print $date + (3600*20); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*20); ?>" data-end-time="<?php print $date + (3600*21); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*21); ?>" data-end-time="<?php print $date + (3600*22); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*22); ?>" data-end-time="<?php print $date + (3600*23); ?>"></td>
                        <td class="total" data-start-time="<?php print $date + (3600); ?>" data-end-time="<?php print $date + (3600*23); ?>"></td>
                    </tr>
                    <tr data-browse="312" class="color-interactive">
                        <th><p>Датчик движения</p></th>
                        <td data-start-time="<?php print $date; ?>" data-end-time="<?php print $date + (3600*1); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*1); ?>" data-end-time="<?php print $date + (3600*2); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*2); ?>" data-end-time="<?php print $date + (3600*3); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*3); ?>" data-end-time="<?php print $date + (3600*4); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*4); ?>" data-end-time="<?php print $date + (3600*5); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*5); ?>" data-end-time="<?php print $date + (3600*6); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*6); ?>" data-end-time="<?php print $date + (3600*7); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*7); ?>" data-end-time="<?php print $date + (3600*8); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*8); ?>" data-end-time="<?php print $date + (3600*9); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*9); ?>" data-end-time="<?php print $date + (3600*10); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*10); ?>" data-end-time="<?php print $date + (3600*11); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*11); ?>" data-end-time="<?php print $date + (3600*12); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*12); ?>" data-end-time="<?php print $date + (3600*13); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*13); ?>" data-end-time="<?php print $date + (3600*14); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*14); ?>" data-end-time="<?php print $date + (3600*15); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*15); ?>" data-end-time="<?php print $date + (3600*16); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*16); ?>" data-end-time="<?php print $date + (3600*17); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*17); ?>" data-end-time="<?php print $date + (3600*18); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*18); ?>" data-end-time="<?php print $date + (3600*19); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*19); ?>" data-end-time="<?php print $date + (3600*20); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*20); ?>" data-end-time="<?php print $date + (3600*21); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*21); ?>" data-end-time="<?php print $date + (3600*22); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*22); ?>" data-end-time="<?php print $date + (3600*23); ?>"></td>
                        <td class="total" data-start-time="<?php print $date + (3600); ?>" data-end-time="<?php print $date + (3600*23); ?>"></td>
                    </tr>
                    <tr data-browse="314" class="color-interactive">
                        <th><p>Проблемы с электроснабжением. Ввод №1</p></th>
                        <td data-start-time="<?php print $date; ?>" data-end-time="<?php print $date + (3600*1); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*1); ?>" data-end-time="<?php print $date + (3600*2); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*2); ?>" data-end-time="<?php print $date + (3600*3); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*3); ?>" data-end-time="<?php print $date + (3600*4); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*4); ?>" data-end-time="<?php print $date + (3600*5); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*5); ?>" data-end-time="<?php print $date + (3600*6); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*6); ?>" data-end-time="<?php print $date + (3600*7); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*7); ?>" data-end-time="<?php print $date + (3600*8); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*8); ?>" data-end-time="<?php print $date + (3600*9); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*9); ?>" data-end-time="<?php print $date + (3600*10); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*10); ?>" data-end-time="<?php print $date + (3600*11); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*11); ?>" data-end-time="<?php print $date + (3600*12); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*12); ?>" data-end-time="<?php print $date + (3600*13); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*13); ?>" data-end-time="<?php print $date + (3600*14); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*14); ?>" data-end-time="<?php print $date + (3600*15); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*15); ?>" data-end-time="<?php print $date + (3600*16); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*16); ?>" data-end-time="<?php print $date + (3600*17); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*17); ?>" data-end-time="<?php print $date + (3600*18); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*18); ?>" data-end-time="<?php print $date + (3600*19); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*19); ?>" data-end-time="<?php print $date + (3600*20); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*20); ?>" data-end-time="<?php print $date + (3600*21); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*21); ?>" data-end-time="<?php print $date + (3600*22); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*22); ?>" data-end-time="<?php print $date + (3600*23); ?>"></td>
                        <td class="total" data-start-time="<?php print $date + (3600); ?>" data-end-time="<?php print $date + (3600*23); ?>"></td>
                    </tr>
                    <tr data-browse="315" class="color-interactive">
                        <th><p>Проблемы с электроснабжением. Ввод №2</p></th>
                        <td data-start-time="<?php print $date; ?>" data-end-time="<?php print $date + (3600*1); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*1); ?>" data-end-time="<?php print $date + (3600*2); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*2); ?>" data-end-time="<?php print $date + (3600*3); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*3); ?>" data-end-time="<?php print $date + (3600*4); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*4); ?>" data-end-time="<?php print $date + (3600*5); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*5); ?>" data-end-time="<?php print $date + (3600*6); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*6); ?>" data-end-time="<?php print $date + (3600*7); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*7); ?>" data-end-time="<?php print $date + (3600*8); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*8); ?>" data-end-time="<?php print $date + (3600*9); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*9); ?>" data-end-time="<?php print $date + (3600*10); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*10); ?>" data-end-time="<?php print $date + (3600*11); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*11); ?>" data-end-time="<?php print $date + (3600*12); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*12); ?>" data-end-time="<?php print $date + (3600*13); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*13); ?>" data-end-time="<?php print $date + (3600*14); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*14); ?>" data-end-time="<?php print $date + (3600*15); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*15); ?>" data-end-time="<?php print $date + (3600*16); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*16); ?>" data-end-time="<?php print $date + (3600*17); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*17); ?>" data-end-time="<?php print $date + (3600*18); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*18); ?>" data-end-time="<?php print $date + (3600*19); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*19); ?>" data-end-time="<?php print $date + (3600*20); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*20); ?>" data-end-time="<?php print $date + (3600*21); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*21); ?>" data-end-time="<?php print $date + (3600*22); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*22); ?>" data-end-time="<?php print $date + (3600*23); ?>"></td>
                        <td class="total" data-start-time="<?php print $date + (3600); ?>" data-end-time="<?php print $date + (3600*23); ?>"></td>
                    </tr>
                    <tr data-browse="313" class="color-interactive">
                        <th><p>Замерзание станции</p></th>
                        <td data-start-time="<?php print $date; ?>" data-end-time="<?php print $date + (3600*1); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*1); ?>" data-end-time="<?php print $date + (3600*2); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*2); ?>" data-end-time="<?php print $date + (3600*3); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*3); ?>" data-end-time="<?php print $date + (3600*4); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*4); ?>" data-end-time="<?php print $date + (3600*5); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*5); ?>" data-end-time="<?php print $date + (3600*6); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*6); ?>" data-end-time="<?php print $date + (3600*7); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*7); ?>" data-end-time="<?php print $date + (3600*8); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*8); ?>" data-end-time="<?php print $date + (3600*9); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*9); ?>" data-end-time="<?php print $date + (3600*10); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*10); ?>" data-end-time="<?php print $date + (3600*11); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*11); ?>" data-end-time="<?php print $date + (3600*12); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*12); ?>" data-end-time="<?php print $date + (3600*13); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*13); ?>" data-end-time="<?php print $date + (3600*14); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*14); ?>" data-end-time="<?php print $date + (3600*15); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*15); ?>" data-end-time="<?php print $date + (3600*16); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*16); ?>" data-end-time="<?php print $date + (3600*17); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*17); ?>" data-end-time="<?php print $date + (3600*18); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*18); ?>" data-end-time="<?php print $date + (3600*19); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*19); ?>" data-end-time="<?php print $date + (3600*20); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*20); ?>" data-end-time="<?php print $date + (3600*21); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*21); ?>" data-end-time="<?php print $date + (3600*22); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*22); ?>" data-end-time="<?php print $date + (3600*23); ?>"></td>
                        <td class="total" data-start-time="<?php print $date + (3600); ?>" data-end-time="<?php print $date + (3600*23); ?>"></td>
                    </tr>
                    <tr style="border-top: 3px solid #333333" data-browse="303" class="color-interactive">
                        <th><p>Включения/отключения насоса №1</p></th>
                        <td data-start-time="<?php print $date; ?>" data-end-time="<?php print $date + (3600*1); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*1); ?>" data-end-time="<?php print $date + (3600*2); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*2); ?>" data-end-time="<?php print $date + (3600*3); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*3); ?>" data-end-time="<?php print $date + (3600*4); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*4); ?>" data-end-time="<?php print $date + (3600*5); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*5); ?>" data-end-time="<?php print $date + (3600*6); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*6); ?>" data-end-time="<?php print $date + (3600*7); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*7); ?>" data-end-time="<?php print $date + (3600*8); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*8); ?>" data-end-time="<?php print $date + (3600*9); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*9); ?>" data-end-time="<?php print $date + (3600*10); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*10); ?>" data-end-time="<?php print $date + (3600*11); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*11); ?>" data-end-time="<?php print $date + (3600*12); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*12); ?>" data-end-time="<?php print $date + (3600*13); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*13); ?>" data-end-time="<?php print $date + (3600*14); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*14); ?>" data-end-time="<?php print $date + (3600*15); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*15); ?>" data-end-time="<?php print $date + (3600*16); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*16); ?>" data-end-time="<?php print $date + (3600*17); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*17); ?>" data-end-time="<?php print $date + (3600*18); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*18); ?>" data-end-time="<?php print $date + (3600*19); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*19); ?>" data-end-time="<?php print $date + (3600*20); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*20); ?>" data-end-time="<?php print $date + (3600*21); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*21); ?>" data-end-time="<?php print $date + (3600*22); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*22); ?>" data-end-time="<?php print $date + (3600*23); ?>"></td>
                        <td class="total" data-start-time="<?php print $date + (3600); ?>" data-end-time="<?php print $date + (3600*23); ?>"></td>
                    </tr>
                    <tr data-browse="304" class="color-interactive">
                        <th><p>Включения/отключения насоса №2</p></th>
                        <td data-start-time="<?php print $date; ?>" data-end-time="<?php print $date + (3600*1); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*1); ?>" data-end-time="<?php print $date + (3600*2); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*2); ?>" data-end-time="<?php print $date + (3600*3); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*3); ?>" data-end-time="<?php print $date + (3600*4); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*4); ?>" data-end-time="<?php print $date + (3600*5); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*5); ?>" data-end-time="<?php print $date + (3600*6); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*6); ?>" data-end-time="<?php print $date + (3600*7); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*7); ?>" data-end-time="<?php print $date + (3600*8); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*8); ?>" data-end-time="<?php print $date + (3600*9); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*9); ?>" data-end-time="<?php print $date + (3600*10); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*10); ?>" data-end-time="<?php print $date + (3600*11); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*11); ?>" data-end-time="<?php print $date + (3600*12); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*12); ?>" data-end-time="<?php print $date + (3600*13); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*13); ?>" data-end-time="<?php print $date + (3600*14); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*14); ?>" data-end-time="<?php print $date + (3600*15); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*15); ?>" data-end-time="<?php print $date + (3600*16); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*16); ?>" data-end-time="<?php print $date + (3600*17); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*17); ?>" data-end-time="<?php print $date + (3600*18); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*18); ?>" data-end-time="<?php print $date + (3600*19); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*19); ?>" data-end-time="<?php print $date + (3600*20); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*20); ?>" data-end-time="<?php print $date + (3600*21); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*21); ?>" data-end-time="<?php print $date + (3600*22); ?>"></td>
                        <td data-start-time="<?php print $date + (3600*22); ?>" data-end-time="<?php print $date + (3600*23); ?>"></td>
                        <td class="total" data-start-time="<?php print $date + (3600); ?>" data-end-time="<?php print $date + (3600*23); ?>"></td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
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

