<?php get_header(); ?>
<div class="content-wrapper">
    <div class="content">
        <div>
            <div class="news">
                <div class="news-top-line">
                    <?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>
                        <div class="tags-wrapper">
                            <?php dynamic_sidebar( 'home_right_1' ); ?>
                        </div> <!-- #primary-sidebar -->
                    <?php endif; ?>
                    <div class="news-search">
                        <label class="ant-checkbox-wrapper">
                                <span class="ant-checkbox ant-checkbox-checked">
                                    <input type="checkbox" class="ant-checkbox-input" value="">
                                    <span class="ant-checkbox-inner"></span>
                                </span>
                            <span>По порядку</span>
                        </label>
                        <span class="ant-input-search">
                                <input placeholder="Search" class="ant-input" type="text">
                                <span class="ant-input-suffix">
                                    <button type="button" class="ant-input-search-button">
                                        <i class="anticon-search">
                                            <svg viewBox="64 64 896 896" class="" data-icon="search" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M909.6 854.5L649.9 594.8C690.2 542.7 712 479 712 412c0-80.2-31.3-155.4-87.9-212.1-56.6-56.7-132-87.9-212.1-87.9s-155.5 31.3-212.1 87.9C143.2 256.5 112 331.8 112 412c0 80.1 31.3 155.5 87.9 212.1C256.5 680.8 331.8 712 412 712c67 0 130.6-21.8 182.7-62l259.7 259.6a8.2 8.2 0 0 0 11.6 0l43.6-43.5a8.2 8.2 0 0 0 0-11.6zM570.4 570.4C528 612.7 471.8 636 412 636s-116-23.3-158.4-65.6C211.3 528 188 471.8 188 412s23.3-116.1 65.6-158.4C296 211.3 352.2 188 412 188s116.1 23.2 158.4 65.6S636 352.2 636 412s-23.3 116.1-65.6 158.4z"></path></svg>
                                        </i>
                                    </button>
                                </span>
                            </span>
                    </div>
                </div>
                <div class="news-wrapper">
                    <div class="news-top">
                        <?php
                        $first_query = new WP_Query('post_type=post&post_status=publish&posts_per_page=1');

                        while ( $first_query->have_posts() ) : $first_query->the_post();
                            ?>
                            <div class="news-card">
                                <?php the_shortlink(' ', null, '', ''); ?>
                                <div class="news-head">
                                    <div class="news-title"><?php the_title(); ?></div>
                                    <div class="views-counter">
                                        <i class="icon-eye">
                                            <svg viewBox="64 64 896 896" class="" data-icon="eye" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M942.2 486.2C847.4 286.5 704.1 186 512 186c-192.2 0-335.4 100.5-430.2 300.3a60.3 60.3 0 0 0 0 51.5C176.6 737.5 319.9 838 512 838c192.2 0 335.4-100.5 430.2-300.3 7.7-16.2 7.7-35 0-51.5zM512 766c-161.3 0-279.4-81.8-362.7-254C232.6 339.8 350.7 258 512 258c161.3 0 279.4 81.8 362.7 254C791.5 684.2 673.4 766 512 766zm-4-430c-97.2 0-176 78.8-176 176s78.8 176 176 176 176-78.8 176-176-78.8-176-176-176zm0 288c-61.9 0-112-50.1-112-112s50.1-112 112-112 112 50.1 112 112-50.1 112-112 112z"></path></svg>
                                        </i>
                                        <span><?php echo substr(the_views(), 0, strpos(the_views(), ' ')); ?></span>
                                    </div>
                                </div>
                                <div class="news-about">
                                    <div class="news-category"><?php foreach((get_the_category()) as $category) { echo $category->cat_name; } ?></div>
                                    <div class="news-date"><?php the_time("d.m.Y");  ?></div>
                                </div>
                                <div class="news-body">
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>
                        <?php
                        endwhile;

                        wp_reset_postdata();
                        ?>
                        <div class="rightside-news">
                            <?php
                            $second_query = new WP_Query('post_type=post&post_status=publish&posts_per_page=2&offset=1');

                            while ( $second_query->have_posts() ) : $second_query->the_post();
                                ?>
                                <div class="news-card">
                                    <?php the_shortlink(' ', null, '', ''); ?>
                                    <div class="news-head">
                                        <div class="news-title"><?php the_title(); ?></div>
                                        <div class="views-counter">
                                            <i class="icon-eye">
                                                <svg viewBox="64 64 896 896" class="" data-icon="eye" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M942.2 486.2C847.4 286.5 704.1 186 512 186c-192.2 0-335.4 100.5-430.2 300.3a60.3 60.3 0 0 0 0 51.5C176.6 737.5 319.9 838 512 838c192.2 0 335.4-100.5 430.2-300.3 7.7-16.2 7.7-35 0-51.5zM512 766c-161.3 0-279.4-81.8-362.7-254C232.6 339.8 350.7 258 512 258c161.3 0 279.4 81.8 362.7 254C791.5 684.2 673.4 766 512 766zm-4-430c-97.2 0-176 78.8-176 176s78.8 176 176 176 176-78.8 176-176-78.8-176-176-176zm0 288c-61.9 0-112-50.1-112-112s50.1-112 112-112 112 50.1 112 112-50.1 112-112 112z"></path></svg>
                                            </i>
                                            <span><?php echo substr(the_views(), 0, strpos(the_views(), ' ')); ?></span>
                                        </div>
                                    </div>
                                    <div class="news-about">
                                        <div class="news-category"><?php foreach((get_the_category()) as $category) { echo $category->cat_name; } ?></div>
                                        <div class="news-date"><?php the_time("d.m.Y");  ?></div>
                                    </div>
                                </div>
                            <?php
                            endwhile;

                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                    <div class="news-block" id="my_posts">
                        <?php
                            $third_query = new WP_Query('post_type=post&post_status=publish&offset=3');

                            while ( $third_query->have_posts() ) : $third_query->the_post();
                        ?>
                            <div class="news-card">
                                <?php the_shortlink(' ', null, '', ''); ?>
                                <div class="news-head">
                                    <div class="news-title"><?php the_title(); ?></div>
                                    <div class="views-counter">
                                        <i class="icon-eye">
                                            <svg viewBox="64 64 896 896" class="" data-icon="eye" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M942.2 486.2C847.4 286.5 704.1 186 512 186c-192.2 0-335.4 100.5-430.2 300.3a60.3 60.3 0 0 0 0 51.5C176.6 737.5 319.9 838 512 838c192.2 0 335.4-100.5 430.2-300.3 7.7-16.2 7.7-35 0-51.5zM512 766c-161.3 0-279.4-81.8-362.7-254C232.6 339.8 350.7 258 512 258c161.3 0 279.4 81.8 362.7 254C791.5 684.2 673.4 766 512 766zm-4-430c-97.2 0-176 78.8-176 176s78.8 176 176 176 176-78.8 176-176-78.8-176-176-176zm0 288c-61.9 0-112-50.1-112-112s50.1-112 112-112 112 50.1 112 112-50.1 112-112 112z"></path></svg>
                                        </i>
                                        <span><?php echo substr(the_views(), 0, strpos(the_views(), ' ')); ?></span>
                                    </div>
                                </div>
                                <div class="news-about">
                                    <div class="news-category"><?php foreach((get_the_category()) as $category) { echo $category->cat_name; } ?></div>
                                    <div class="news-date"><?php the_time("d.m.Y");  ?></div>
                                </div>
                                <div class="news-body">
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>
                        <?php endwhile;
                            wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer-wrapper">
    <footer>
        <div class="feedback-wrapper">
            <button name="Обратная связь" type="button" class="ant-btn ant-btn-primary">
                <span>Обратная связь</span>
            </button>
        </div>
        <div class="center-part">
            <div class="footer-links">
                <div class="link-col">
                    <ul>
                        <li>
                            <a href="/ru">Главная страница</a>
                        </li>
                        <li>
                            <a href="/ru/news">Новости</a>
                        </li>
                        <li>
                            <a href="/ru/contacts">Контакты</a>
                        </li>
                    </ul>
                </div>
                <div class="link-col">
                    <ul>
                        <li>
                            <a href="/ru/account">Аккаунт</a>
                        </li>
                        <li>
                            <a href="/ru/messages">Сообщения</a>
                        </li>
                        <li>
                            <a href="/ru/settings">Настройки аккаунта</a>
                        </li>
                    </ul>
                </div>
                <div class="link-col">
                    <ul>
                        <li>
                            <a href="/ru/summary">Сводка</a>
                        </li>
                        <li>
                            <a href="/ru/orders">Мои ордера</a>
                        </li>
                        <li>
                            <a href="/ru/exchange">Обмен</a>
                        </li>
                        <li>
                            <a href="/ru/currency">Валютные пары</a>
                        </li>
                    </ul>
                </div>
                <div class="social-icons">
                    <a href="/ru/facebook.com">
                        <i class="anticon anticon-facebook">
                            <svg viewBox="64 64 896 896" class="" data-icon="facebook" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                <path d="M880 112H144c-17.7 0-32 14.3-32 32v736c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V144c0-17.7-14.3-32-32-32zm-32 736H663.9V602.2h104l15.6-120.7H663.9v-77.1c0-35 9.7-58.8 59.8-58.8h63.9v-108c-11.1-1.5-49-4.8-93.2-4.8-92.2 0-155.3 56.3-155.3 159.6v89H434.9v120.7h104.3V848H176V176h672v672z"></path>
                            </svg>
                        </i>
                    </a>
                    <a href="/ru/twitter.com">
                        <i class="anticon anticon-twitter">
                            <svg viewBox="64 64 896 896" class="" data-icon="twitter" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                <path d="M928 254.3c-30.6 13.2-63.9 22.7-98.2 26.4a170.1 170.1 0 0 0 75-94 336.64 336.64 0 0 1-108.2 41.2A170.1 170.1 0 0 0 672 174c-94.5 0-170.5 76.6-170.5 170.6 0 13.2 1.6 26.4 4.2 39.1-141.5-7.4-267.7-75-351.6-178.5a169.32 169.32 0 0 0-23.2 86.1c0 59.2 30.1 111.4 76 142.1a172 172 0 0 1-77.1-21.7v2.1c0 82.9 58.6 151.6 136.7 167.4a180.6 180.6 0 0 1-44.9 5.8c-11.1 0-21.6-1.1-32.2-2.6C211 652 273.9 701.1 348.8 702.7c-58.6 45.9-132 72.9-211.7 72.9-14.3 0-27.5-.5-41.2-2.1C171.5 822 261.2 850 357.8 850 671.4 850 843 590.2 843 364.7c0-7.4 0-14.8-.5-22.2 33.2-24.3 62.3-54.4 85.5-88.2z"></path>
                            </svg>
                        </i>
                    </a>
                    <a href="/ru/google-plus.com">
                        <i class="anticon anticon-google-plus">
                            <svg viewBox="64 64 896 896" class="" data-icon="google-plus" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                <path d="M879.5 470.4c-.3-27-.4-54.2-.5-81.3h-80.8c-.3 27-.5 54.1-.7 81.3-27.2.1-54.2.3-81.2.6v80.9c27 .3 54.2.5 81.2.8.3 27 .3 54.1.5 81.1h80.9c.1-27 .3-54.1.5-81.3 27.2-.3 54.2-.4 81.2-.7v-80.9c-26.9-.2-54.1-.2-81.1-.5zm-530 .4c-.1 32.3 0 64.7.1 97 54.2 1.8 108.5 1 162.7 1.8-23.9 120.3-187.4 159.3-273.9 80.7-89-68.9-84.8-220 7.7-284 64.7-51.6 156.6-38.9 221.3 5.8 25.4-23.5 49.2-48.7 72.1-74.7-53.8-42.9-119.8-73.5-190-70.3-146.6-4.9-281.3 123.5-283.7 270.2-9.4 119.9 69.4 237.4 180.6 279.8 110.8 42.7 252.9 13.6 323.7-86 46.7-62.9 56.8-143.9 51.3-220-90.7-.7-181.3-.6-271.9-.3z"></path>
                            </svg>
                        </i>
                    </a>
                    <a href="/ru/linkedin.com">
                        <i class="anticon anticon-linkedin">
                            <svg viewBox="64 64 896 896" class="" data-icon="linkedin" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                <path d="M847.7 112H176.3c-35.5 0-64.3 28.8-64.3 64.3v671.4c0 35.5 28.8 64.3 64.3 64.3h671.4c35.5 0 64.3-28.8 64.3-64.3V176.3c0-35.5-28.8-64.3-64.3-64.3zm0 736c-447.8-.1-671.7-.2-671.7-.3.1-447.8.2-671.7.3-671.7 447.8.1 671.7.2 671.7.3-.1 447.8-.2 671.7-.3 671.7zM230.6 411.9h118.7v381.8H230.6zm59.4-52.2c37.9 0 68.8-30.8 68.8-68.8a68.8 68.8 0 1 0-137.6 0c-.1 38 30.7 68.8 68.8 68.8zm252.3 245.1c0-49.8 9.5-98 71.2-98 60.8 0 61.7 56.9 61.7 101.2v185.7h118.6V584.3c0-102.8-22.2-181.9-142.3-181.9-57.7 0-96.4 31.7-112.3 61.7h-1.6v-52.2H423.7v381.8h118.6V604.8z"></path>
                            </svg>
                        </i>
                    </a>
                    <a href="/ru/vk.com">
                        <i class="vk"></i>
                    </a>
                </div>
            </div>
            <div class="bottom-part">
                <div class="copyrights">
                    <div class="copy-text">Copyright © 2012 - 2018 Owletex</div>
                    <div class="copy-links">
                        - <a href="/ru/about">О нас</a>
                        - <a href="/ru/terms">Terms</a>
                        - <a href="/ru/privacy">Privacy Policy</a>
                    </div>
                </div>
                <div class="social-icons">
                    <a href="/ru/facebook.com">
                        <i class="anticon anticon-facebook">
                            <svg viewBox="64 64 896 896" class="" data-icon="facebook" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                <path d="M880 112H144c-17.7 0-32 14.3-32 32v736c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V144c0-17.7-14.3-32-32-32zm-32 736H663.9V602.2h104l15.6-120.7H663.9v-77.1c0-35 9.7-58.8 59.8-58.8h63.9v-108c-11.1-1.5-49-4.8-93.2-4.8-92.2 0-155.3 56.3-155.3 159.6v89H434.9v120.7h104.3V848H176V176h672v672z"></path>
                            </svg>
                        </i>
                    </a>
                    <a href="/ru/twitter.com">
                        <i class="anticon anticon-twitter">
                            <svg viewBox="64 64 896 896" class="" data-icon="twitter" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                <path d="M928 254.3c-30.6 13.2-63.9 22.7-98.2 26.4a170.1 170.1 0 0 0 75-94 336.64 336.64 0 0 1-108.2 41.2A170.1 170.1 0 0 0 672 174c-94.5 0-170.5 76.6-170.5 170.6 0 13.2 1.6 26.4 4.2 39.1-141.5-7.4-267.7-75-351.6-178.5a169.32 169.32 0 0 0-23.2 86.1c0 59.2 30.1 111.4 76 142.1a172 172 0 0 1-77.1-21.7v2.1c0 82.9 58.6 151.6 136.7 167.4a180.6 180.6 0 0 1-44.9 5.8c-11.1 0-21.6-1.1-32.2-2.6C211 652 273.9 701.1 348.8 702.7c-58.6 45.9-132 72.9-211.7 72.9-14.3 0-27.5-.5-41.2-2.1C171.5 822 261.2 850 357.8 850 671.4 850 843 590.2 843 364.7c0-7.4 0-14.8-.5-22.2 33.2-24.3 62.3-54.4 85.5-88.2z"></path>
                            </svg>
                        </i>
                    </a>
                    <a href="/ru/google-plus.com">
                        <i class="anticon anticon-google-plus">
                            <svg viewBox="64 64 896 896" class="" data-icon="google-plus" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                <path d="M879.5 470.4c-.3-27-.4-54.2-.5-81.3h-80.8c-.3 27-.5 54.1-.7 81.3-27.2.1-54.2.3-81.2.6v80.9c27 .3 54.2.5 81.2.8.3 27 .3 54.1.5 81.1h80.9c.1-27 .3-54.1.5-81.3 27.2-.3 54.2-.4 81.2-.7v-80.9c-26.9-.2-54.1-.2-81.1-.5zm-530 .4c-.1 32.3 0 64.7.1 97 54.2 1.8 108.5 1 162.7 1.8-23.9 120.3-187.4 159.3-273.9 80.7-89-68.9-84.8-220 7.7-284 64.7-51.6 156.6-38.9 221.3 5.8 25.4-23.5 49.2-48.7 72.1-74.7-53.8-42.9-119.8-73.5-190-70.3-146.6-4.9-281.3 123.5-283.7 270.2-9.4 119.9 69.4 237.4 180.6 279.8 110.8 42.7 252.9 13.6 323.7-86 46.7-62.9 56.8-143.9 51.3-220-90.7-.7-181.3-.6-271.9-.3z"></path>
                            </svg>
                        </i>
                    </a>
                    <a href="/ru/linkedin.com">
                        <i class="anticon anticon-linkedin">
                            <svg viewBox="64 64 896 896" class="" data-icon="linkedin" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                <path d="M847.7 112H176.3c-35.5 0-64.3 28.8-64.3 64.3v671.4c0 35.5 28.8 64.3 64.3 64.3h671.4c35.5 0 64.3-28.8 64.3-64.3V176.3c0-35.5-28.8-64.3-64.3-64.3zm0 736c-447.8-.1-671.7-.2-671.7-.3.1-447.8.2-671.7.3-671.7 447.8.1 671.7.2 671.7.3-.1 447.8-.2 671.7-.3 671.7zM230.6 411.9h118.7v381.8H230.6zm59.4-52.2c37.9 0 68.8-30.8 68.8-68.8a68.8 68.8 0 1 0-137.6 0c-.1 38 30.7 68.8 68.8 68.8zm252.3 245.1c0-49.8 9.5-98 71.2-98 60.8 0 61.7 56.9 61.7 101.2v185.7h118.6V584.3c0-102.8-22.2-181.9-142.3-181.9-57.7 0-96.4 31.7-112.3 61.7h-1.6v-52.2H423.7v381.8h118.6V604.8z"></path>
                            </svg>
                        </i>
                    </a>
                    <a href="/ru/vk.com">
                        <i class="vk">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.6802 0H8.31982C1.6001 0 0 1.6001 0 8.31982V15.6802C0 22.3999 1.6001 24 8.31982 24H15.6802C22.3999 24 24 22.3999 24 15.6802V8.31982C24 1.6001 22.3999 0 15.6802 0ZM19.125 7.625C19.6543 7.625 19.7651 7.89746 19.6543 8.26807C19.4316 9.28809 17.2993 12.2915 17.2993 12.2915C17.1143 12.5879 17.04 12.7363 17.2993 13.0703C17.3906 13.1978 17.585 13.3882 17.8076 13.6064C18.0376 13.8315 18.2974 14.0859 18.5049 14.3311C19.2563 15.1768 19.8228 15.8901 19.9805 16.3818C20.125 16.875 19.875 17.125 19.375 17.125H17.625C17.1562 17.125 16.9199 16.8623 16.4097 16.2949C16.1934 16.0542 15.9282 15.7593 15.5752 15.4062C14.5371 14.4048 14.0923 14.2754 13.8325 14.2754C13.4805 14.2754 13.375 14.375 13.375 14.875V16.4443C13.375 16.875 13.2373 17.125 12.125 17.125C10.271 17.125 8.2334 15.9995 6.7876 13.9229C4.61816 10.8823 4.0249 8.5835 4.0249 8.12012C4.0249 7.86035 4.125 7.625 4.625 7.625H6.375C6.82227 7.625 6.99023 7.8208 7.1582 8.30518C8.01416 10.7983 9.45703 12.9775 10.0503 12.9775C10.2729 12.9775 10.375 12.875 10.375 12.3101V9.73291C10.335 8.99951 10.0786 8.68213 9.88867 8.44727C9.77148 8.30225 9.67969 8.18848 9.67969 8.02734C9.67969 7.83154 9.84668 7.625 10.125 7.625H12.875C13.2456 7.625 13.375 7.82324 13.375 8.26807V11.7354C13.375 12.106 13.5361 12.2358 13.647 12.2358C13.8696 12.2358 14.0552 12.106 14.4629 11.6982C15.7236 10.2891 16.6138 8.12012 16.6138 8.12012C16.7246 7.86035 16.9302 7.625 17.375 7.625H19.125Z" fill="white"/>
                            </svg>
                        </i>
                    </a>
                </div>
            </div>
        </div>
        <div class="toTop-wrapper">
            <div class="ant-back-top">
                <button name="Наверх" type="button" class="ant-btn ant-btn-primary">
                    <span>Наверх</span>
                </button>
            </div>
        </div>
    </footer>
</div>
<?php wp_footer() ?>
</body>
</html>
