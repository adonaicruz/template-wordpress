<form action="<?php echo home_url('/') ?>">
    <div class="form-group">
        <input type="hidden" name="post_type" value="post">
        <input type="search" name="s" class="form-control" placeholder="Digite aqui..." value="<?php echo get_search_query() ?>" maxlength="255" required>
    </div>
    <button type="submit" class="btn btn-primary btn-sm text-uppercase">Pesquisar</button>
</form>
