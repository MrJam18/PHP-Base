<head>
    <meta charset="UTF-8">
    <link
            href="./views/menu/menu.css"
            rel="stylesheet"
            >
</head>
<body>
<header>
<ul class="main" >
    <div class="element_left" >
        <a href="security/?action=logout" class="link <?= $this->checkActive('security') ?>">
            <?= $this->isAuth ? 'Выйти' : 'Войти'  ?>
        </a>
    </div>
    <div class="element">
        <a href="/" class="link <?= $this->checkActive('') ?>" >
            Главная
        </a>

    </div>
    <div class="element">
        <a href="task" class="link <?= $this->checkActive('task')?>">
            Задачи
        </a>
    </div>

</ul>
</header>
</body>