<div class="container">
<div class="row">
    <div class="col-md-12">
        <?= $this->conf->get_alertas(); ?>
    </div>
</div>
</div>
<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div style="float: right;">
                    <a href="<?= base_url(); ?>perfil/editar/" class="btn btn-primary">Editar meu perfil</a>
                </div>
            </div>
            </div>
            <div class="card-body">
                <b>Login:</b> <?= $user->login; ?><br>
                <b>Nome:</b> <?= $user->nome; ?><br>
                <b>Bairro:</b> <?= $user->bairro; ?><br>
            </div>
        </div>
    </div>
</div>