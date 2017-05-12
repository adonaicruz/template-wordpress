<?php $postTags = wp_get_post_tags($post->ID) ?>

<?php get_header() ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-9">
                <h2><?php echo single_post_title() ?></h2>
                <article class="thumbnail">
                    <?php if (has_post_thumbnail()): ?>
                        <?php echo get_the_post_thumbnail($post, 'full') ?>
                    <?php endif; ?>
                    <?php if (have_posts()): the_post() ?>
                        <div class="caption">
                            <p>
                                <small><?php the_time('d') ?> de <?php the_time('F') ?> de <?php the_time('Y') ?></small> /
                                <small><?php the_category(', ') ?></small> /
                                <small>Por <?php the_author_posts_link() ?></small>
                            </p>

                            <?php the_content() ?>

                            <?php if (count($postTags) > 0): ?>
                                <br>
                                <p>
                                    <strong>Tags: </strong>
                                    <?php foreach ($postTags as $tag): ?>
                                        <a href="<?php echo get_tag_link($tag->term_id) ?>" class="label label-default" title="<?php echo $tag->name ?>"><?php echo $tag->name ?></a>
                                    <?php endforeach; ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </article>

                <h2>Sobre <small>o autor</small></h2>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="media">
                            <div class="media-left">
                                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>" title="<?php echo get_the_author() ?>">
                                    <?php echo get_avatar(get_the_author_meta('ID'), 100, '', false, ['class' => 'media-object']); ?>
                                </a>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">
                                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>" title="<?php echo get_the_author() ?>" class="text-uppercase text-muted">
                                        <?php echo get_the_author() ?>
                                    </a>
                                </h3>
                                <p><?php echo get_the_author_meta('description') ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <?php $latest_posts = dalloglio_lastest_posts([$post->ID]) ?>

                <?php if ($latest_posts->have_posts()): ?>
                    <h2>Últimos <small>artigos</small></h2>
                    <div class="row">
                        <?php while($latest_posts->have_posts()): $latest_posts->the_post() ?>
                            <article class="col-sm-12 col-md-4">
                                <div class="thumbnail">
                                    <?php if (has_post_thumbnail()): ?>
                                        <a href="<?php echo get_the_permalink() ?>" title="<?php echo get_the_title() ?>">
                                            <?php echo get_the_post_thumbnail(null, 'medium_large') ?>
                                        </a>
                                    <?php endif; ?>
                                    <div class="caption">
                                        <h3><?php echo get_the_title() ?></h3>
                                        <p><small><?php the_time('d') ?> de <?php the_time('F') ?> de <?php the_time('Y') ?></small></p>
                                        <p><small>Por <?php the_author_posts_link() ?></small></p>
                                        <p><?php echo get_the_content('Leia mais...') ?></p>
                                    </div>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
                <?php wp_reset_postdata() ?>

                <?php
				if (comments_open() || get_comments_number()) :
					comments_template();
				endif;
                ?>
            </div>

            <div class="col-sm-4 col-md-3">
                <?php get_sidebar() ?>
            </div>
        </div>
    </div>

<?php get_footer() ?>
