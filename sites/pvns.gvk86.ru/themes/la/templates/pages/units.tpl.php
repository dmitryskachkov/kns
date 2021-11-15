<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <a href="/create/unit"> <button class="btn btn-sm btn-warning rounded-0 text-white" style="float: right">Добавить узел</button></a>
                <p class="card-title mb-0">Список опрашиваемых узлов</p>
                <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                        <thead>
                        <tr>
                            <th>Название объекта</th>
                            <th>IP адрес</th>
                            <th>Порт</th>
                            <th>Статус</th>
                            <th>Операции</th>
                            <th> </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if ($units) : ?>
                            <?php foreach ($units as $n => $unit): ?>
                            <tr>
                                <td><?php echo $unit->title ?> <br><p class="small"><?php echo $unit->description ?></p></td>
                                <td class="font-weight-bold"><?php echo $unit->ip_address ?></td>
                                <td><?php echo $unit->port ?></td>
                                <td><?php echo $unit->status ?></td>
                                <td><a href="unit/<?php echo $unit->id; ?>/tags"> Список тэгов </a></td>
                                <td><a href="unit/<?php echo $unit->id; ?>/edit"> Редактор узла</a></td>
                            </tr>
                            <?php endforeach; ?>
                        <?php endif ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>