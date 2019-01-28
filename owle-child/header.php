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
            <a class="logo" href="<?php echo get_home_url(); ?>">Owletex</a>
            <div class="nav-wrapper">
                <nav>
                    <ul class="loged-in">
                        <li><a href="<?php echo get_home_url(); ?>"><?php pll_e('Главная'); ?></a></li>
                        <li><a href="/" class="active"><?php pll_e('Новости'); ?></a></li>
                        <li><a href=""><?php pll_e('Контакты'); ?></a></li>
                        <li><a href=""><?php pll_e('Тарифы'); ?></a></li>
                    </ul>
                </nav>
            </div>
            <div class="user-block">

            </div>
        </header>
    </div>