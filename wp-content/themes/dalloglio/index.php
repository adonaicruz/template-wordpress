<?php get_header() ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-9">
                <?php if (have_posts()): ?>
                    <h2>Últimos <small>artigos</small></h2>
                    <div class="row">
                        <?php while(have_posts()) : the_post() ?>
                            <article class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <?php if (has_post_thumbnail()): ?>
                                        <a href="<?php echo get_the_permalink() ?>" title="<?php echo get_the_title() ?>">
                                            <?php echo get_the_post_thumbnail(null, 'medium_large') ?>
                                        </a>
                                    <?php endif; ?>
                                    <div class="caption">
                                        <h3><?php echo get_the_title() ?></h3>
                                        <p>
                                            <small><?php the_time('d') ?> de <?php the_time('F') ?> de <?php the_time('Y') ?></small><br>
                                            <small>Por <?php the_author_posts_link() ?></small>
                                        </p>
                                        <p><?php echo get_the_content('Leia mais...') ?></p>
                                    </div>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    </div>

                    <?php dalloglio_paginate_links() ?>
                <?php endif; ?>
            </div>

            <div class="col-sm-4 col-md-3">
                <?php get_sidebar() ?>
            </div>
        </div>
    </div>

<?php get_footer() ?>
