
<!--<head>-->
<!--    <script src="https://kit.fontawesome.com/a85a04e757.js" crossorigin="anonymous"></script>-->
<!--</head>-->
 <div class='modal__back'>
    <div class='modal__fixed'>
        <div class='modal__contentBox'>
            <div class='modal__closingButton'>
                <i class="fa-solid fa-xmark modal__xmark">x</i>
            </div>
            <h3 class="text__center">Укажите данные задачи</h3>
            <form action="task/?action=submitAddTask" method="post">
            <textarea required placeholder="Описание задачи" rows="3" name="description" type="text" class="tasks__input tasks__input_full" align="top"></textarea>
            <div class="tasks__small-inputs">
                <div class="small-input-container">
                    <label for="date" class="tasks__small-label">Дата исполнения</label>
                    <input required type='date' name="desiredDateDone" class="tasks__input tasks__small-input tasks__input_full" id="date">
                </div>
                <div class="small-input-container">
                    <label for="user" class="tasks__small-label">Исполнитель</label>
                    <input required type='text' name="user" class="tasks__input tasks__small-input tasks__input_full" id="user">
                </div>

            </div>
            <h4 class="text__center header_small">
                Укажите приоритет
            </h4>

            <div class="tasks__radiogroup">
                <input required type="radio" checked name="priority" value="1" id="priority1">
                <label for="priority1">Высший</label>
                <input required type="radio" name="priority" value="2">
                <label for="priority2">Средний</label>
                <input required type="radio" name="priority" value="3">
                <label for="priority3">Низкий</label>
            </div>
            <div class="submit-field">
                <button class="submit-button" type="submit">ПОДТВЕРДИТЬ</button>
            </div>
                <?php if(isset($this->data['error'])) : ?>
                <div class="error"><?=$this->data['error'] ?></div>
                <?php endif ?>
            </form>
        </div>
    </div>
</div>
