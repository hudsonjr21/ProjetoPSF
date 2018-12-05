<div class="container">
<div class="jumbotron" style="padding: 10px;">
    <div style="float: left;">
        <h1>Inserir dados Agente PSF</h1>
    </div>
    <div style="float: right;">
        <a class="btn btn-primary" href="<?= base_url(); ?>painel/agente">Voltar</a>
    </div>
    <div style="clear: both;"></div>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <form action="" method="post" onsubmit="VerificaCPF();">
            <div class="form-group">
            <label>Nome:</label>
            <input class="form-control" type="text" name="nome_ag" required>
            </div>
            <div class="form-group">
            <label>CPF:</label>
            <input class="form-control" type="text" name="cpf_ag" placeholder="Ex: 123.345.321-67"  required>
            </div>
             <div class="form-group">
            <label>Bairro que Trabalha:</label>
            <input class="form-control" type="text" name="bairro_tra" required>
            </div>
            <div class="form-group">
            <label>Telefone:</label>
            <input class="form-control" type="text" name="telefone" placeholder="Ex: (00) 00000-0000" required>
            </div>
            <input type="submit" name="inserir" class="btn btn-success btn-block" value="Salvar">
        </form>
    </div>
</div>