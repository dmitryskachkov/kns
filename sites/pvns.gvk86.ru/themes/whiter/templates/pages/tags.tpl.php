<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <img src="/sites/all/themes/la/images/logo.svg" style="width: 100%; height: auto">
                    </div>
                    <div class="col-md-10">
                        <h4><?php print $unit->title; ?></h4>
                        <p><?php print $unit->description; ?></p>
                        <p><?php print $unit->ip_address; ?></p>
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
                <button style="float: right; margin-left: 20px" class="btn btn-sm btn-outline-behance rounded-0 text-white">
                    Опросить сейчас
                </button></a>
                <a style="float: right" href="/create/tag"> <button class="btn btn-sm btn-warning rounded-0 text-white">
                        + Добавить тэг
                    </button></a>
                <h5>Список опрашиваемых узлов</h5>
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