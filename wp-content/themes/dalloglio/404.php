<?php get_header() ?>

    <div class="container">
        <h2>Erro 404 <small>Página não encontrada</small></h2>
        <div class="row">
            <div class="col-xs-12">
                <p>
                    Ops!! A página que você acessou não foi encontrada.<br>
                    Pesquise no formulário abaixo o que você procura ou <a href="<?php echo home_url('/') ?>" title="Voltar para a página principal">clique aqui</a> e volte para a página principal.
                </p>
            </div>
            <div class="col-md-3">
                <?php get_search_form() ?>
            </div>
        </div>
    </div>

<?php get_footer() ?>
