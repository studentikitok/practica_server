<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Pop it MVC</title>
</head>

<body>
    <header>
        <nav class="nav">
            <a href="<?= app()->route->getUrl('/hello') ?>">Главная</a>
            <?php if (app()->auth::check()): ?>
                <a href="<?= app()->route->getUrl('/logout') ?>">Выход (<?= app()->auth::user()->login ?>)</a>
                <?php if (app()->auth::role() == "admin"): ?>
                    <a href="<?= app()->route->getUrl('/employee') ?>">Создать сотрудника отдела</a>
                <?php elseif (app()->auth::role() == "hr"): ?>
                    <a href="<?= app()->route->getUrl('/emp') ?>">Создать сотрудника</a>
                    <a href="<?= app()->route->getUrl('/subunit') ?>">Создать подразделение</a>
                    <a href="<?= app()->route->getUrl('/calculate') ?>">Подсчет среднего возраста</a>
                    <a href="<?= app()->route->getUrl('/subunit_sel') ?>">Выбор по подразделениям</a>
                <?php endif; ?>
            <?php else: ?>
                <a href="<?= app()->route->getUrl('/login') ?>">Войти</a>
            <?php endif; ?>
        </nav>
    </header>
    <main>
        <?= $content ?? '' ?>
    </main>

</body>

</html>