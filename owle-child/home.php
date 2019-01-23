<?php
/*
 Template Name: Home Owletex Landing
 */
?>
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
<div class="top-line-wrapper">
    <div class="top-line">
        <div class="top-line-inner">
            <div class="logo">
                <a href="/"></a>
            </div>
            <nav>
                <a href="/wp/news"><?php _e('Новости', 'owletex-landing'); ?></a>
                <div class="login"><?php _e('Войти', 'owletex-landing'); ?></div>
                <div class="divider"></div>
                <a href="/" class="sign-up"><?php _e('Зарегистрироваться', 'owletex-landing'); ?></a>
                <div class="dropdown-language">
                    <div class="dropdown-active">
                        <span class="arrow-down"></span>
                    </div>
                    <div class="dropdown choices">
                        <ul>
                            <li><a href="http://localhost/wp/" hreflang="ru-RU" lang="ru-RU">Ru</a></li>
                            <li><a href="http://localhost/wp/en/" hreflang="en-GB" lang="en-GB">En</a></li>
                            <li><a href="http://localhost/wp/fr/" hreflang="fr-FR" lang="fr-FR">Fr</a></li>
                            <li><a href="http://localhost/wp/de/" hreflang="de-DE" lang="de-DE">De</a></li>
                        </ul>
                    </div>
                </div>
                <div class="burger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <div class="dropdown burger-menu">
                        <a href="#adv"><?php _e('Преимущества', 'owletex-landing'); ?></a>
                        <a href="#exc"><?php _e('Биржи с которыми работает сервис', 'owletex-landing'); ?></a>
                        <a href="#sch"><?php _e('Схема работы', 'owletex-landing'); ?></a>
                        <a href="#opp"><?php _e('Основные возможности', 'owletex-landing'); ?></a>
                        <a href="#tar"><?php _e('Тарифы', 'owletex-landing'); ?></a>
                        <a href="#faq"><?php _e('FAQ', 'owletex-landing'); ?></a>
                        <a href="#new"><?php _e('Новости', 'owletex-landing'); ?></a>
                        <a href="#par"><?php _e('Партнеры', 'owletex-landing'); ?></a>
                        <a href="/"><?php _e('Войти', 'owletex-landing'); ?></a>
                        <div>
                            <a href="/" class="sign-up"><?php _e('Зарегистрироваться', 'owletex-landing'); ?></a>
                            <div class="dropdown-language">
                                <div class="dropdown-active">
                                    En
                                    <span class="arrow-down"></span>
                                </div>
                                <div class="dropdown choices">
                                    <ul>
                                        <li><a href="http://localhost/wp/" hreflang="ru-RU" lang="ru-RU">Ru</a></li>
                                        <li><a href="http://localhost/wp/en/" hreflang="en-GB" lang="en-GB">En</a></li>
                                        <li><a href="http://localhost/wp/fr/" hreflang="fr-FR" lang="fr-FR">Fr</a></li>
                                        <li><a href="http://localhost/wp/de/" hreflang="de-DE" lang="de-DE">De</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<div class="header-wrapper">
    <div class="header-background-wrapper">
        <img src="<?php bloginfo('template_url'); ?>/img/header-bg.svg" alt="header-background">
        <img src="<?php bloginfo('template_url'); ?>/img/header-greed.svg" alt="header-greed">
    </div>
    <header>
        <div class="header-main">
            <div class="header-main-left">
                <h1><?php echo pll__(get_theme_mod( 'header-h1', 'Краткое описание сервиса в одном предложении' )); ?></h1>
                <p><?php echo pll__(get_theme_mod( 'header-p', 'Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.' )); ?></p>
            </div>
            <img src="<?php bloginfo('template_url'); ?>/img/header-main-img.png" alt="App Screen">
        </div>
    </header>
</div>
<section class="advantages" id="adv">
    <h2><?php _e('Преимущества', 'owletex-landing'); ?></h2>
    <div class="head-line"></div>
    <div class="adv-desc">
        <div class="adv-desc-inner">
            <div class="adv-desc-left">
                <div>
                    <div id="b1" class="active">
                        <h3><?php echo pll__(get_theme_mod( 'advantages-h3-1', 'Работа с ведущими биржами в одном окне' )); ?></h3>
                        <p><?php echo pll__(get_theme_mod( 'advantages-p-1', 'Сервис позволяет работать одновременно с несколькими ведущими криптовалютными биржами. Вы можете подключить все свои аккаунты и производить торговые операции в одном интерфейсе как с каждой биржей в отдельности, так и производить трансфер активов между ними')); ?></p>
                    </div>
                    <div id="b2">
                        <h3><?php echo pll__(get_theme_mod( 'advantages-h3-2', 'Возможность автоматизированной торговли (боты)' )); ?></h3>
                        <p><?php echo pll__(get_theme_mod( 'advantages-p-2', 'С Owletex вы имеете возможность использования системы автоматизированной торговли, которая будет зарабатывать деньги без вашего непосредственного участия. Внутри сервиса вы можете создавать и настраивать неограниченное количество трейдинг-ботов, каждый из которых может реализовывать отдельные торговые стратегии для различных криптовалютных активов.')); ?></p>
                    </div>
                    <div id="b3">
                        <h3><?php echo pll__(get_theme_mod( 'advantages-h3-3', 'Наличие демо-аккаунта' )); ?></h3>
                        <p><?php echo pll__(get_theme_mod( 'advantages-p-3', 'Торговля криптовалютами - рискованное занятие, постоянно требующее держать обе руки на пульсе валютного рынка. Если вы не уверены в разрабатываемых стратегиях, вы можете протестировать их внутри нашего сервиса в тестовом режиме перед "боевым" запуском.')); ?></p>
                    </div>
                    <div id="b4">
                        <h3><?php echo pll__(get_theme_mod( 'advantages-h3-4', 'Сквозная аналитика портфеля' )); ?></h3>
                        <p><?php echo pll__(get_theme_mod( 'advantages-p-4', 'С помощью гибких инструментов внутри сервиса вы сможете производить ежедневную аналитику вашего заработка, расходов и состояния портфеля. Также имеется возможность слежения за состоянием криптовалютного рынка в мире. С помощью несложных действий вы сможете производить пополнение балансов бирж, перераспределять активы и осуществлять ребалансировку вашего портфеля по каждой отдельной бирже.' )); ?></p>
                    </div>
                    <div id="b5">
                        <h3><?php echo pll__(get_theme_mod( 'advantages-h3-5', 'Быстрая техподдержка' )); ?></h3>
                        <p><?php echo pll__(get_theme_mod( 'advantages-p-5', 'И, хотя система Owletex была разработана так, чтобы она была понятна даже для начинающего трейдера, мы понимаем, что в процессе работы могут возникать самые разнообразные вопросы касаемо самого сервиса и трейдинга с помощью него. Наша техподдержка готова оперативно помочь и ответить на любые интересующие вас вопросы.' )); ?></p>
                    </div>
                </div>
                <div class="adv-bar">
                    <div class="advantage active" id="a1">
                        <div>
                            <div></div>
                        </div>
                    </div>
                    <div class="advantage" id="a2">
                        <div>
                            <div></div>
                        </div>
                    </div>
                    <div class="advantage" id="a3">
                        <div>
                            <div></div>
                        </div>
                    </div>
                    <div class="advantage" id="a4">
                        <div>
                            <div></div>
                        </div>
                    </div>
                    <div class="advantage" id="a5">
                        <div>
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="adv-desc-right" id="adv-desc-right" data-aos="fade-left" data-aos-offset="300" data-aos-duration="700" data-aos-once="true">
                <div id="anim-1" class="active"></div>
                <div id="anim-2"></div>
                <div id="anim-3"></div>
                <div id="anim-4"></div>
                <div id="anim-5"></div>
            </div>
        </div>
        <div class="adv-bar">
            <div class="advantage active" id="a11">
                <div>
                    <div></div>
                </div>
            </div>
            <div class="advantage" id="a22">
                <div>
                    <div></div>
                </div>
            </div>
            <div class="advantage" id="a33">
                <div>
                    <div></div>
                </div>
            </div>
            <div class="advantage" id="a44">
                <div>
                    <div></div>
                </div>
            </div>
            <div class="advantage" id="a55">
                <div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="exchanges" id="exc">
    <img src="<?php bloginfo('template_url'); ?>/img/exchanges-greed.svg" alt="exchanges-greed">
    <h2><?php _e('Биржи с которыми работает сервис', 'owletex-landing') ?></h2>
    <div class="head-line light"></div>
    <div id="exchanges-anim"></div>
</section>
<section class="scheme-of-work" id="sch">
    <h2><?php _e('Схема работы', 'owletex-landing') ?></h2>
    <div class="head-line"></div>
    <div class="main-content">
        <img src="<?php bloginfo('template_url'); ?>/img/scheme-greed.svg" alt="scheme-greed">
        <div class="scheme-image">
            <div id="scheme-anim"></div>
        </div>
        <div class="scheme-steps">
            <ol>
                <li data-aos="fade-in" data-aos-offset="350" data-aos-duration="1000" data-aos-once="true"><?php echo pll__(get_theme_mod( 'scheme-li-1', 'Регистрируйтесь' )); ?></li>
                <p data-aos="fade-in" data-aos-offset="350" data-aos-duration="1000" data-aos-once="true"><?php echo pll__(get_theme_mod( 'scheme-p-1', 'Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.' )); ?></p>
                <li data-aos="fade-in" data-aos-offset="300" data-aos-duration="1000" data-aos-once="true"><?php echo pll__(get_theme_mod( 'scheme-li-2', 'Подключаете биржи' )); ?></li>
                <p data-aos="fade-in" data-aos-offset="300" data-aos-duration="1000" data-aos-once="true"><?php echo pll__(get_theme_mod( 'scheme-p-2', 'Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.' )); ?></p>
                <li data-aos="fade-in" data-aos-offset="250" data-aos-duration="1000" data-aos-once="true"><?php echo pll__(get_theme_mod( 'scheme-li-3', 'Выбираете тариф' )); ?></li>
                <p data-aos="fade-in" data-aos-offset="250" data-aos-duration="1000" data-aos-once="true"><?php echo pll__(get_theme_mod( 'scheme-p-3', 'Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.' )); ?></p>
                <li data-aos="fade-in" data-aos-offset="200" data-aos-duration="1000" data-aos-once="true"><?php echo pll__(get_theme_mod( 'scheme-li-4', 'Работаете с сервисом' )); ?></li>
                <p data-aos="fade-in" data-aos-offset="200" data-aos-duration="1000" data-aos-once="true"><?php echo pll__(get_theme_mod( 'scheme-p-4', 'Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.' )); ?></p>
                <li data-aos="fade-in" data-aos-offset="150" data-aos-duration="1000" data-aos-once="true"><?php echo pll__(get_theme_mod( 'scheme-li-5', 'Получаете профит' )); ?></li>
                <p data-aos="fade-in" data-aos-offset="150" data-aos-duration="1000" data-aos-once="true"><?php echo pll__(get_theme_mod( 'scheme-p-5', 'Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.' )); ?></p>
            </ol>
        </div>
    </div>
    <div class="btn-reg"><?php _e('Зарегистрироваться', 'owletex-landing') ?></div>
</section>
<section class="main-opportunities" id="opp">
    <h2><?php _e('Основные возможности', 'owletex-landing') ?></h2>
    <div class="head-line light"></div>
    <div class="main-content">
        <div class="opp-texts">
            <div class="opp-text">
                <h3><?php echo pll__(get_theme_mod( 'features-h-1', 'Первая возможность' )); ?></h3>
                <p><?php echo pll__(get_theme_mod( 'features-p-1', 'Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития. Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития. Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития. Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.' )); ?></p>
                <img src="<?php bloginfo('template_url'); ?>/img/opportunities/opportunity1.png" alt="Opportunity 1">
            </div>
            <div class="opp-imgs-mobile">
                <img src="<?php bloginfo('template_url'); ?>/img/opportunities/opportunity1.png" alt="Opportunity 1">
            </div>
            <div class="opp-text">
                <h3><?php echo pll__(get_theme_mod( 'features-h-2', 'Вторая возможность' )); ?></h3>
                <p><?php echo pll__(get_theme_mod( 'features-p-2', 'Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития. Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития. Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития. Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.' )); ?></p>
                <img src="<?php bloginfo('template_url'); ?>/img/opportunities/opportunity2.png" alt="Opportunity 2">
                <img src="<?php bloginfo('template_url'); ?>/img/opportunities/opportunity1.png" alt="Opportunity 1">
            </div>
            <div class="opp-imgs-mobile">
                <img src="<?php bloginfo('template_url'); ?>/img/opportunities/opportunity2.png" alt="Opportunity 2">
                <img src="<?php bloginfo('template_url'); ?>/img/opportunities/opportunity1.png" alt="Opportunity 1">
            </div>
            <div class="opp-text">
                <h3><?php echo pll__(get_theme_mod( 'features-h-3', 'Третья возможность' )); ?></h3>
                <p><?php echo pll__(get_theme_mod( 'features-p-3', 'Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития. Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития. Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития. Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.' )); ?></p>
                <img src="<?php bloginfo('template_url'); ?>/img/opportunities/opportunity3.png" alt="Opportunity 3">
                <img src="<?php bloginfo('template_url'); ?>/img/opportunities/opportunity2.png" alt="Opportunity 2">
                <img src="<?php bloginfo('template_url'); ?>/img/opportunities/opportunity1.png" alt="Opportunity 1">
            </div>
            <div class="opp-imgs-mobile">
                <img src="<?php bloginfo('template_url'); ?>/img/opportunities/opportunity3.png" alt="Opportunity 3">
                <img src="<?php bloginfo('template_url'); ?>/img/opportunities/opportunity2.png" alt="Opportunity 2">
                <img src="<?php bloginfo('template_url'); ?>/img/opportunities/opportunity1.png" alt="Opportunity 1">
            </div>
        </div>
        <div class="opp-imgs">
            <div class="opp-img-back-wrapp">
                <div class="opp-img-back"></div>
            </div>
            <div class="opp-img fir" data-aos="fade-down" data-aos-offset="300" data-aos-anchor-placement="top-center">
                <img src="<?php bloginfo('template_url'); ?>/img/opportunities/opportunity1.png" alt="Opportunity 1">
            </div>
            <div class="opp-img" data-aos="fade-down" data-aos-offset="400" data-aos-anchor-placement="top-center">
                <img src="<?php bloginfo('template_url'); ?>/img/opportunities/opportunity2.png" alt="Opportunity 2">
            </div>
            <div class="opp-img" data-aos="fade-down" data-aos-offset="700" data-aos-anchor-placement="top-center">
                <img src="<?php bloginfo('template_url'); ?>/img/opportunities/opportunity3.png" alt="Opportunity 3">
            </div>
        </div>
    </div>
    <div class="opp-imgs-mobile">
        <img src="<?php bloginfo('template_url'); ?>/img/opportunities/opportunity1.png" alt="Opportunity 1">
        <img src="<?php bloginfo('template_url'); ?>/img/opportunities/opportunity2.png" alt="Opportunity 2">
        <img src="<?php bloginfo('template_url'); ?>/img/opportunities/opportunity3.png" alt="Opportunity 3">
    </div>
    <div class="want-to-try">
        <h2><?php _e('Хотите попробовать в действии эти и другие возможности Owletex?', 'owletex-landing') ?></h2>
        <div class="btn-reg"><?php _e('Зарегистрироваться', 'owletex-landing') ?></div>
    </div>
</section>
<section class="tariffs" id="tar">
    <img src="<?php bloginfo('template_url'); ?>/img/tarrifs-greed.svg" alt="tariffs-greed">
    <h2><?php _e('Тарифы', 'owletex-landing'); ?></h2>
    <div class="head-line"></div>
    <div class="cards-tariffs">
        <div class="card-tariffs" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="600" data-aos-offset="300" data-aos-once="true">
            <div class="card-head">
                <h3><?php _e('Бесплатно', 'owletex-landing') ?></h3>
            </div>
            <div class="card-body">
                <div class="opps">
                    <div class="opp"><?php _e('Преимущество', 'owletex-landing') ?></div>
                    <div class="opp"><?php _e('Преимущество', 'owletex-landing') ?></div>
                </div>
                <div class="buy">
                    <div class="price">$0</div>
                    <div class="btn-buy reg"><?php _e('Зарегистрироваться', 'owletex-landing') ?></div>
                </div>
            </div>
        </div>
        <div class="card-tariffs best-choice" data-aos="fade-down" data-aos-delay="600" data-aos-easing="linear" data-aos-duration="600" data-aos-offset="325"  data-aos-once="true">
            <div class="card-head">
                <h3><?php _e('Эксперт', 'owletex-landing') ?></h3>
            </div>
            <div class="card-body">
                <div class="opps">
                    <div class="opp"><?php _e('Преимущество', 'owletex-landing') ?></div>
                    <div class="opp"><?php _e('Преимущество', 'owletex-landing') ?></div>
                    <div class="opp"><?php _e('Преимущество', 'owletex-landing') ?></div>
                    <div class="opp"><?php _e('Преимущество', 'owletex-landing') ?></div>
                    <div class="opp"><?php _e('Преимущество', 'owletex-landing') ?></div>
                </div>
                <div class="buy">
                    <div class="discount">$800</div>
                    <div class="price best">$500</div>
                    <div class="btn-buy best"><?php _e('Купить', 'owletex-landing') ?></div>
                </div>
            </div>
        </div>
        <div class="card-tariffs" data-aos="fade-down" data-aos-delay="1200" data-aos-easing="linear" data-aos-duration="600" data-aos-offset="300" data-aos-once="true">
            <div class="card-head">
                <h3><?php _e('Стандарт', 'owletex-landing') ?></h3>
            </div>
            <div class="card-body">
                <div class="opps">
                    <div class="opp"><?php _e('Преимущество', 'owletex-landing') ?></div>
                    <div class="opp"><?php _e('Преимущество', 'owletex-landing') ?></div>
                    <div class="opp"><?php _e('Преимущество', 'owletex-landing') ?></div>
                </div>
                <div class="buy">
                    <div class="price">$500</div>
                    <div class="btn-buy"><?php _e('Купить', 'owletex-landing') ?></div>
                </div>
            </div>
        </div>
        <div class="card-tariffs" data-aos="fade-down" data-aos-delay="1800" data-aos-easing="linear" data-aos-duration="600" data-aos-offset="300" data-aos-once="true">
            <div class="card-head">
                <h3><?php _e('Тариф 4', 'owletex-landing') ?></h3>
            </div>
            <div class="card-body">
                <div class="opps">
                    <div class="opp"><?php _e('Преимущество', 'owletex-landing') ?></div>
                    <div class="opp"><?php _e('Преимущество', 'owletex-landing') ?></div>
                    <div class="opp"><?php _e('Преимущество', 'owletex-landing') ?></div>
                </div>
                <div class="buy">
                    <div class="price">$500</div>
                    <div class="btn-buy"><?php _e('Купить', 'owletex-landing') ?></div>
                </div>
            </div>
        </div>
        <div class="card-tariffs">
            <div class="card-head">
                <h3><?php _e('Бесплатно', 'owletex-landing') ?></h3>
            </div>
            <div class="card-body">
                <div class="opps">
                    <div class="opp"><?php _e('Преимущество', 'owletex-landing') ?></div>
                    <div class="opp"><?php _e('Преимущество', 'owletex-landing') ?></div>
                </div>
                <div class="buy">
                    <div class="price">$0</div>
                    <div class="btn-buy reg"><?php _e('Зарегистрироваться', 'owletex-landing') ?></div>
                </div>
            </div>
        </div>
        <div class="card-tariffs">
            <div class="card-head">
                <h3><?php _e('Бесплатно', 'owletex-landing') ?></h3>
            </div>
            <div class="card-body">
                <div class="opps">
                    <div class="opp"><?php _e('Преимущество', 'owletex-landing') ?></div>
                    <div class="opp"><?php _e('Преимущество', 'owletex-landing') ?></div>
                </div>
                <div class="buy">
                    <div class="price">$0</div>
                    <div class="btn-buy reg"><?php _e('Зарегистрироваться', 'owletex-landing') ?></div>
                </div>
            </div>
        </div>
    </div>
    <h2><?php _e('Способы оплаты', 'owletex-landing') ?></h2>
    <div class="methods">
        <img src="<?php bloginfo('template_url'); ?>/img/payment-methods/bitcoin.png" alt="Bitcoin">
        <img src="<?php bloginfo('template_url'); ?>/img/payment-methods/visa.png" alt="Visa">
        <img src="<?php bloginfo('template_url'); ?>/img/payment-methods/mastercard.png" alt="Master Card">
        <img src="<?php bloginfo('template_url'); ?>/img/payment-methods/paypal.png" alt="PayPal">
    </div>
</section>
<section class="faq" id="faq">
    <img src="<?php bloginfo('template_url'); ?>/img/faq-bg.svg" alt="faq-background">
    <img src="<?php bloginfo('template_url'); ?>/img/faq-greed.svg" alt="faq-greed">
    <h2>FAQ</h2>
    <div class="head-line light"></div>
    <div class="faq-inner">
        <?php
            switch (get_locale()) {
                case 'ru_RU':
                    //echo do_shortcode("[WPSM_AC id=211]");

                    echo do_shortcode("[accordions id='116']");
                    break;
                case 'en_GB':
                    echo do_shortcode("[accordions id='206']");
                    break;
                case 'fr_FR':
                    echo "3";
                    break;
                case 'de_DE':
                    echo "4";
                    break;
            }
        ?>
        <div class="ask" data-aos="fade-left" data-aos-offset="300" data-aos-duration="700" data-aos-once="true">
            <div class="ask-info"><?php _e('Все равно ничего не поняли? Отправьте любой интересующий вас вопрос и мы ответим Вам в самое кратчайшее время.', 'owletex-landing') ?></div>
            <div class="ask-form">
                <div class="ask-form-head"><?php _e('Форма обратной связи', 'owletex-landing') ?></div>
                <div class="ask-form-body">
                    <form action="" method="post">
                        <input type="text" placeholder="Имя" name="name" id="name" required>
                        <input type="email" placeholder="Email" name="name" id="email" required>
                        <textarea name="question" id="question" cols="30" rows="10" placeholder="<?php _e('Вопрос', 'owletex-landing') ?>" required></textarea>
                        <div class="ask-send">
<!--                            <div class="captcha"></div>-->
                            <input type="submit" value="<?php _e('Отправить', 'owletex-landing') ?>"></input>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="news" id="new">
    <h2><?php _e('Новости', 'owletex-landing') ?></h2>
    <div class="head-line"></div>
    <div class="news-cards">
    <?php
        // the query
        $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1));
        if ( $wpb_all_query->have_posts() ) :
            while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                <div class="news-card">
                    <div class="card-head"><?php echo get_the_post_thumbnail(); ?></div>
                    <div class="card-body">
                        <div class="news-header"><?php the_title(); ?></div>
                        <div class="news-content"><?php the_excerpt(); ?></div>
                    </div>
                </div>
            <?php endwhile;
        endif;

        wp_reset_postdata();
    ?>
    </div>
    <div class="btn-all-news"><?php _e('Все новости', 'owletex-landing') ?></div>
</section>
<section class="partners" id="par">
    <h2><?php _e('Партнёры', 'owletex-landing') ?></h2>
    <div class="partners-logos">
        <div class="partners-logo">
            <img src="<?php bloginfo('template_url'); ?>/img/partners/neuronx.io.png" alt="Neurox.io">
        </div>
        <div class="partners-logo">
            <img src="<?php bloginfo('template_url'); ?>/img/partners/foundico.png" alt="Foundico">
        </div>
    </div>
</section>
<footer>
    <div class="social-links">
        <a href="/" class="fb"></a>
        <a href="/" class="gp"></a>
        <a href="/" class="li"></a>
        <a href="/" class="vk"></a>
    </div>
    <div class="main-content">
        <div class="company-info">
            <a href="/" class="logo"></a>
            <div><?php _e('Юридические данные', 'owletex-landing') ?>: ООО “Текст-Рыба”</div>
            <div><?php _e('Юридический адрес', 'owletex-landing') ?>: Юр. адрес: 101000 г. Москва, Чистопрудный б-р, д.11, стр.1</div>
            <div><?php _e('УНП компании', 'owletex-landing') ?>:</div>
        </div>
        <div class="menu">
            <div class="menu-head"><?php _e('Меню', 'owletex-landing') ?></div>
            <a href="/"><?php _e('Новости', 'owletex-landing') ?></a>
            <a href="/"><?php _e('Войти', 'owletex-landing') ?></a>
            <a href="/"><?php _e('Зарегистрироваться', 'owletex-landing') ?></a>
        </div>
        <div class="subscribe">
            <div class="menu-head"><?php _e('Подпишись на нас', 'owletex-landing') ?></div>
            <div>
                <div><?php _e('Получай последние новости об обновлениях сервиса.', 'owletex-landing') ?></div>
                <div>
                    <input type="text" placeholder="Email">
                    <input type="button" value="<?php _e('Подписаться', 'owletex-landing') ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="copyrights">
        <div class="copyrights-text"><?php echo pll__(get_theme_mod( 'footer-1', 'Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.' )); ?></div>
        <div class="copyright"><?php echo pll__(get_theme_mod( 'footer-2', '@2018 Owletex. Все права защищены' )); ?></div>
    </div>
</footer>
<?php wp_footer() ?>
</body>
</html>
