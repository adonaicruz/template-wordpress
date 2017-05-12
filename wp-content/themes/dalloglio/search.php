<?php get_header() ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-9">
                <h2>Resultados <small>da pesquisa por <b><u><?php echo get_search_query() ?></u></b></small></h2>
                <?php if (have_posts()): ?>
                    <div class="row">
                        <?php while(have_posts()): the_post() ?>
                            <article class="col-xs-12">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="media">
                                            <?php if (has_post_thumbnail()): ?>
                                                <div class="media-left">
                                                    <a href="<?php echo get_the_permalink() ?>" title="<?php echo get_the_title() ?>">
                                                        <?php echo get_the_post_thumbnail($post, [100, 100], ['class' => 'media-object']) ?>
                                                    </a>
                                                </div>
                                            <?php endif; ?>
                                            <div class="media-body">
                                                <h3 class="media-heading"><?php echo get_the_title() ?></h3>
                                                <p>
                                                    <small><?php the_time('d') ?> de <?php the_time('F') ?> de <?php the_time('Y') ?></small> /
                                                    <small>Por <?php the_author_posts_link() ?></small>
                                                </p>
                                                <p><?php echo get_the_content('Leia mais...') ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        <?php endwhile ?>
                    </div>

                    <?php dalloglio_paginate_links() ?>
                <?php else: ?>
                    <p>Nenhum artigo foi encontrado.</p>
                <?php endif; ?>
            </div>

            <div class="col-sm-4 col-md-3 hidden-xs">
                <?php get_sidebar() ?>
            </div>
        </div>
    </div>

<?php get_footer() ?>
