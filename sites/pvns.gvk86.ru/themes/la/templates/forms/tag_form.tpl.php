<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-4">
                <h4>Управляющая форма</h4>
              <?php print drupal_render($form['title']); ?>
              <?php print drupal_render($form['machine_name']); ?>
                <div class="row">
                    <div class="col-md-6">
                      <?php print drupal_render($form['register']); ?>
                    </div>
                    <div class="col-md-6">
                      <?php print drupal_render($form['length']); ?>
                    </div>
                </div>
              <?php print drupal_render($form['unit_id']); ?>

            </div>
            <div class="col-lg-8">
                <h4 style="margin-bottom: 30px">Вспомогательная информация</h4>
                <table class="table table-striped" style="margin-bottom: 30px">
                    <thead>
                    <tr>
                        <th class="text-center">Номер регистра</th>
                        <th class="text-center">Адрес регистра HEX</th>
                        <th class="text-center">Тип</th>
                        <th class="text-center">Название</th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <td>1-9999</td>
                        <td>0000 до 270E</td>
                        <td>Чтение-запись</td>
                        <td>Discrete Output Coils</td>
                    </tr>
                    <tr>
                        <td>10001-19999</td>
                        <td>0000 до 270E</td>
                        <td>Чтение</td>
                        <td>Discrete Input Contacts</td>
                    </tr>
                    <tr>
                        <td>30001-39999</td>
                        <td>0000 до 270E</td>
                        <td>Чтение</td>
                        <td>Analog Input Registers</td>
                    </tr>
                    <tr>
                        <td>40001-49999</td>
                        <td>0000 до 270E</td>
                        <td>Чтение-запись</td>
                        <td>Analog Output Holding Registers</td>
                    </tr>
                    </tbody>
                </table>

              <?php print drupal_render_children($form); ?>
            </div>

        </div>

    </div>
</div>