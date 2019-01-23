<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <script type="text/javascript">
        var templateUrl = '<?= get_bloginfo("template_url"); ?>';
    </script>
    <?php wp_head() ?>
</head>
<body>
<div class="news-main">
    <div class="header-wrapper">
        <header>
            <a class="logo" href="/ru">Owletex</a>
            <div class="nav-wrapper">
                <nav>
                    <ul class="loged-in">
                        <li><a href="">Новости</a></li>
                        <li><a href="">Сводка</a></li>
                        <li><a href="">Создать ордер</a></li>
                        <li><a href="">Мои ордера</a></li>
                        <li><a href="">Валютные пары</a></li>
                        <li><a href="">Обмен</a></li>
                        <li><a href="">Контакты</a></li>
                        <li><a href="">Тарифы</a></li>
                    </ul>
                </nav>
            </div>
            <div class="user-block">

            </div>
        </header>
    </div>