<div class="container">
<div class="col-md-12">
    <div class="card">
        <div class="card-header">Editar perfil
            <div style="float: right;">
                <a href="<?= base_url(); ?>perfil/" class="btn btn-primary">Voltar</a>
            </div>
        </div>
        <div class="card-body">
            <form action="" method="post" accept-charset="utf-8">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label>Login</label>
                            <input class="form-control" type="text" name="login" value="<?= $user->login; ?>" required>
                        </div>
                        <div class="col-md-6">
                            <label>Nome</label>
                            <input class="form-control" type="text" name="nome" value="<?= $user->nome; ?>" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-12">
                            <label>Bairro</label>
                            <input class="form-control" type="text" name="bairro" value="<?= $user->bairro; ?>" required> 
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary btn-block" name="alterar" value="Salvar">
            </form>
        </div>
    </div>
</div>
<div class="container">