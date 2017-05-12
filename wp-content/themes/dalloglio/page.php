<?php get_header() ?>

    <div class="container">
        <h2><?php single_post_title() ?></h2>
        <article class="thumbnail">
            <?php if (has_post_thumbnail()): ?>
                <?php echo get_the_post_thumbnail($post, 'full') ?>
            <?php endif; ?>
            <?php if (have_posts()): the_post(); ?>
                <div class="caption">
                    <?php the_content() ?>
                </div>
            <?php endif; ?>
        </article>
    </div>

<?php get_footer() ?>
