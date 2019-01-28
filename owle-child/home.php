<?php get_header(); ?>
<div class="content-wrapper">
    <div class="content">
        <div>
            <div class="news">
                <div class="news-top-line">
                    <?php if ( is_active_sidebar( 'home_left_1' ) ) : ?>
                        <div class="tags-wrapper">
                            <?php dynamic_sidebar( 'home_left_1' ); ?>
                        </div> <!-- #primary-sidebar -->
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>
                        <div class="news-search">
                            <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
                        </div>
                    <?php endif; ?>
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
                                <div class="news-card-inner">
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
<?php wp_footer(); ?>
<?php get_footer(); ?>