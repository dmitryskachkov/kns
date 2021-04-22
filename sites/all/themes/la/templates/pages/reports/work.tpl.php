<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="float-right">
                        <?php print render($period_switch_form) ; ?>
                    </div>
                    <?php if ($units): ?>
                        <?php foreach($units as $unit): ?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5><?= $unit->title ?></h5>
                                    <p>Адрес: <?= $unit->description; ?></p>
                                    <hr>
                                    <table>
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
                                        <tr>
                                            <td colspan="4">Итого</td>
                                            <td>0.0</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>
</div>


