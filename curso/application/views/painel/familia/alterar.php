<div class="container">
<div class="jumbotron" style="padding: 10px;">
    <div style="float: left;">
        <h1>Alterar cadastro do Membro Familiar</h1>
    </div>
    <div style="float: right;">
        <a class="btn btn-primary" href="<?= base_url(); ?>painel/familia">Voltar</a>
    </div>
    <div style="clear: both;"></div>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <form action="" method="post">
            <div class="form-group">
            <label>Nome:</label>
            <input class="form-control" type="text" name="nome" value="<?= $familia->nome; ?>" required>
            </div>
            <div class="form-group">
            <label>Endereço:</label>
            <input class="form-control" type="text" name="endereco" value="<?= $familia->endereco; ?>" required>
            </div>
            <div class="form-group">
            <label>Telefone:</label>
            <input class="form-control" type="text" name="telefone" value="<?= $familia->telefone; ?>" required>
            </div>
            <div class="form-group">
           <label>Número do Cartão do SUS:</label>
            <input class="form-control" type="text" name="cartao_sus" value="<?= $familia->cartao_sus; ?>" required>
            </div>
            <div class="form-group">
            <label>Sexo:</label>
            <select class="form-control" name="sexo" value="<?= $familia->sexo; ?>" required>
            <option disabled="disabled">Selecione</option>
            <option>Masculino</option>
            <option>Feminino</option>
            <option>Outro</option>
            </select>
            </div>
            <div class="form-group">
            <label>Raça / Cor:</label>
            <select class="form-control" name="raca_cor"  value="<?= $familia->raca_cor; ?>" required>
            <option disabled="disabled">Selecione</option>
            <option>Branco</option>
            <option>Preto</option>
            <option>Pardo</option>
            <option>Indígena</option>
            </select>
            </div>
            <div class="form-group">
            <label>Data de Nascimento:</label>
            <input class="form-control" type="date" name="data_nas" min="1900-12-28" max="2002-04-30" value="<?= $familia->data_nas; ?>" required>
            </div>
            <div class="form-group">
            <label>Situação Conjungal:</label>
            <select class="form-control" name="situacao_conj" value="<?= $familia->situacao_conj; ?>" required>
            <option disabled="disabled">Selecione</option>
            <option>Solteiro</option>
            <option>Casado</option>
            <option>Separado</option>
            <option>Divorciado</option>
            <option>Viúvo</option>
            </select>
            </div>
            <div class="form-group">
            <label>SItuação Conjugal:</label>
            <input class="form-control" type="text" name="situacao_conj" value="<?= $familia->situacao_conj; ?>" required>
            </div>
            <input type="submit" name="alterar" class="btn btn-success btn-block" value="Salvar">
        </form>
    </div>
</div>