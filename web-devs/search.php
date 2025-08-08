<?php get_header(); ?>

<div id="primary">
    <div id="main">
        <div class="container">
            <h3>Search Result for: <?php echo get_search_query(); ?>
            </h3>
            <?php
                get_search_form();
                
                while(have_posts()):
                    the_post();
                    get_template_part('parts/content', 'search')
                ?>
                <?php
            endwhile;
            the_posts_pagination();
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>