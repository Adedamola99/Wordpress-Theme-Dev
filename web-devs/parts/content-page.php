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