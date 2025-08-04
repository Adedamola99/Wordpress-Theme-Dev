<?php get_header(); ?>
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

        <!--  -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="container">
                        <div class="page-item">
                            <?php
                                while( have_posts() ) : the_post();
                                ?>
                                <article>
                                    <h2><?php the_title() ?></h2>
                                    <div class="meta-info">
                                        <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                                        <p>Category: <?php the_category( ' ' ); ?></p>
                                        <p>Tags: <?php the_tags( '', ', '); ?></p>
                                        <?php the_content() ?>
                                        <?php wp_link_pages(); ?>
                                    </div>
                                </article>
                                <?php
                                if ( comments_open() || get_comments_number()) {
                                    comments_template();
                                }
                                endwhile;
                            ?>

                        </div>
                    </div>
                </main>
            </div>
        </div>
        <!--  -->
<?php get_footer(); ?>
