<?php
if (post_password_required()) {
	return;
}
?>

<?php if (have_comments()): ?>
    <h2>Comentários <small>dos leitores</small></h2>
    <?php foreach (get_comments(array('post_id' => $post->ID, 'status' => 'approve')) as $comment): ?>
        <div class="panel panel-default" id="comment-<?php echo $comment->comment_ID ?>">
            <div class="panel-body">
                <div class="media">
                    <div class="media-left">
                        <?php echo get_avatar($comment->comment_author_email, 100, '', $comment->comment_author, ['class' => 'media-object']) ?>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">
                            <?php echo $comment->comment_author ?>
                        </h3>
                        <p>
                            <small class="text-muted">
                                <?php echo get_comment_date('d/m/Y, H:i', $comment->comment_ID) ?>
                            </small><br>
                            <?php echo $comment->comment_content ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach ?>
<?php endif; ?>

<?php

$commenter = wp_get_current_commenter();
$req = get_option( 'require_name_email' );
$aria_req = ( $req ? "required aria-required='true'" : '' );
$required_text = 'Os campos marcados com * são obrigatórios. ';

$fields =  array(
    'author' =>
        '<div class="col-sm-6 form-group comment-form-author"><label for="author">Nome:</label> ' .
        ( $req ? '<span class="required">*</span>' : '' ) .
        '<input class="form-control" placeholder="Seu nome..." id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
        '" size="30"' . $aria_req . '></div>',

    'email' =>
        '<div class="col-sm-6 form-group comment-form-email"><label for="email">Email:</label> ' .
        ( $req ? '<span class="required">*</span>' : '' ) .
        '<input class="form-control" placeholder="Seu email..." id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
        '" size="30"' . $aria_req . '></div>',
);

$args = array(
    'id_form' => 'commentform',
    'class_form' => 'row comment-form',
    'id_submit' => 'submit',
    'class_submit' => 'btn btn-primary btn-sm text-uppercase submit',
    'name_submit' => 'submit',
    'title_reply' => __( 'Deixe seu comentário' ),
    'title_reply_to' => __( 'Deixe uma resposta para %s' ),
    'cancel_reply_link' => __( 'Cancelar resposta' ),
    'label_submit' => __( 'Enviar' ),
    'format' => 'xhtml',

    'comment_field' =>  '<div class="col-xs-12 form-group comment-form-comment"><label for="comment">Comentário:</label> ' .
        ( $req ? '<span class="required">*</span>' : '' ) .
        '<textarea class="form-control" placeholder="Escreva seu comentário aqui..." id="comment" name="comment" rows="10"' . $aria_req . '></textarea></div>',

    'comment_notes_before' => '<p class="col-xs-12 comment-notes">' .
        __( 'Your email address will not be published.' ) . ( $req ? $required_text : '' ) .
        '</p>',

    'comment_notes_after' => '<p class="col-xs-12 form-allowed-tags">' .
        sprintf(
        __( 'Você pode usar essas tags e atributos <abbr title="HyperText Markup Language">HTML</abbr>: %s' ),
        ' <code>' . allowed_tags() . '</code>'
        ) . '</p>',

    'fields' => apply_filters('comment_form_default_fields', $fields),
);
?>

<div class="panel panel-default">
    <div class="panel-body">
        <?php comment_form($args) ?>
    </div>
</div>
