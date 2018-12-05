<div class="container">
<div class="jumbotron" style="padding: 10px;">
    <div style="float: left;">
        <h1>Alterar cadastro do Agente PSF</h1>
    </div>
    <div style="float: right;">
        <a class="btn btn-primary" href="<?= base_url(); ?>painel/agente">Voltar</a>
    </div>
    <div style="clear: both;"></div>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <form action="" method="post">
            <div class="form-group">
            <label>Nome:</label>
            <input class="form-control" type="text" name="nome_ag" value="<?= $agente->nome_ag; ?>" required>
            </div>
            <div class="form-group">
            <label>CPF:</label>
            <input class="form-control" type="text" name="cpf_ag" value="<?= $agente->cpf_ag; ?>" required>
            </div>
            <div class="form-group">
            <label>Bairro que Trabalha:</label>
            <input class="form-control" type="text" name="bairro_tra" value="<?= $agente->bairro_tra; ?>" required>
            </div>
            <div class="form-group">
            <label>Telefone:</label>
            <input class="form-control" type="text" name="telefone" value="<?= $agente->telefone; ?>" required>
            </div>
            <input type="submit" name="alterar" class="btn btn-success btn-block" value="Salvar">
        </form>
    </div>
</div>