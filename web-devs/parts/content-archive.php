<article>
<h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumb' ); ?></a>
<div class="meta-info">
<p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
<p>Category: <?php the_category( ' ' ); ?></p>
<p>Tags: <?php the_tags( '', ', '); ?></p>
<?php the_excerpt() ?>
</div>
</article>