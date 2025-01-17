<?php get_header(); ?>
<main id="main">
    <div class="container">
        <div class="row">
            <?php if (have_posts()):
                while (have_posts()):
                    the_post(); ?>
                    <article class="col-md-4">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php the_excerpt(); ?></p>
                    </article>
                <?php endwhile; else: ?>
                <p><?php _e('No posts found.', 'casagrande'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>