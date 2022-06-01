    <div class="tasks">
        <h1 class="tasks__header">Мои задачи</h1>
        <div class="table-container">
        <a class="tasks__addButton" href="task/?action=addTask">Добавить задачу </a>
        <table class='table'>
            <thead>
            <tr class='table__headers'>
                <?php foreach($this->data['headers'] as $header) : ?>
                <th class='table__header'><?= $header->name ?></th>
                <?php endforeach ?>
                <th class="table__header"></th>
            </tr>
            </thead>
            <tbody>
            <?php if($this->data['tasks']) : ?>
            <?php foreach ($this->data['tasks'] as $key => $task) : ?>
                <tr class='table__row'>
                    <?php foreach($this->data['headers'] as $header) : ?>
                <td class='table__cell'>
                    <div class='table__cellContainer'>
                        <?php
                        echo $task->{'get'.$header->key}();
                        ?>
                        </div>
                </td>
                <?php endforeach ?>
            <td><a href="task/?action=doTaskDone&key=<?=$key?>"><img class="done-button" src="/images/done.png"></a></td>
            </tr>
                <?php endforeach ?>
            </tbody>
        </table>
            <?php else : ?>
                </table>
            <div class='center table__emptyText' >Нет ни одной записи</div>
            <?php endif ?>
    </div>
    </div>
