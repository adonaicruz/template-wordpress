<?php
$categories = get_categories();
$tags = get_tags();
?>

<aside>
    <h2>Buscas</h2>
    <div class="panel panel-default">
        <div class="panel-body">
            <?php get_search_form() ?>
        </div>
    </div>

    <?php if ($categories): ?>
        <h2>Categorias</h2>
        <div class="panel panel-default">
            <ul class="list-group">
                <?php foreach ($categories as $value): ?>
                    <li class="list-group-item"><a href="<?php echo get_category_link($value->term_id) ?>" title="<?php echo $value->name ?>"><?php echo $value->name ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>



    <?php if ($tags): ?>
        <h2>Tags</h2>
        <div class="panel panel-default">
            <ul class="list-group">
                <?php foreach ($tags as $value): ?>
                    <li class="list-group-item"><a href="<?php echo get_tag_link($value->term_id) ?>" title="<?php echo $value->name ?>"><?php echo $value->name ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
</aside>
