<?php
 /*
 Template Name: News Template
 */
?>
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
                        <div class="news-block">
                            <?php
                                $third_query = new WP_Query('post_type=post&post_status=publish&post_per_page=-1&offset=3');

                                while ( $third_query->have_posts() ) : $third_query->the_post(); ?>
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
    <?php
        get_search_form();
    ?>
</div>
<?php wp_footer() ?>
</body>
</html>
