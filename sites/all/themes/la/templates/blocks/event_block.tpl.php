<div class="row">
    <div class="col-lg-12">
        <div id="event-header">
            <a id="event-resize"> <i class="fa fa-eye float-right fa-2x" style="margin:  5px 30px"></i></a>
            <button id="remove_button" class="btn btn-sm btn-default float-right" style="margin-left: 20px">Квитировать
                событие
            </button>
            <button id="remove_all_button" class="btn btn-sm btn-default float-right">Квитировать всё</button>

            <h5>Оперативный журнал событий (<?php echo $event_count; ?>)</h5>
            <p class="small">Список событий по всем объектам системы мониторинга</p>
        </div>
        <div id="event-body" class="hidden">
            <table id="basic" class="table nowrap table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Дата и в ремя</th>
                    <th>Объект</th>
                    <th>Событие</th>
                    <th>Состояние</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>