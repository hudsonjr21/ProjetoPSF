<div class="jumbotron" style="padding: 10px;">
    <div style="float: left;">
        <h1>Inserir dados do membro da Família</h1>
    </div>
    <div style="float: right;">
        <a class="btn btn-primary" href="<?= base_url(); ?>painel/familia">Voltar</a>
    </div>
    <div style="clear: both;"></div>
</div>
<div class="row">
    <div class="col-md-12">
        <form action="" method="post">
            <div class="form-group">
            <label>Nome:</label>
            <input class="form-control" type="text" name="nome" required>
            </div>
            <div class="form-group">
            <label>Endereco:</label>
            <input class="form-control" type="text" name="endereco" required>
            </div>
            <div class="form-group">
            <label>Telefone:</label>
            <input class="form-control" type="text" name="telefone" placeholder="Ex: (00) 00000-0000" required>
            </div>
            <div class="form-group">
            <label>Número do Cartão do SUS:</label>
            <input class="form-control" type="text" name="cartao_sus" required>
            </div>
            <div class="form-group">
            <label>Sexo:</label>
            <select class="form-control" name="sexo" required>
            <option disabled="disabled" selected="selected">Selecione</option>
            <option>Masculino</option>
            <option>Feminino</option>
            <option>Outro</option>
            </select>
            </div>
            <div class="form-group">
            <label>Raça / Cor:</label>
            <select class="form-control" name="raca_cor" required>
            <option disabled="disabled" selected="selected">Selecione</option>
            <option>Branco</option>
            <option>Preto</option>
            <option>Pardo</option>
            <option>Indígena</option>
            </select>
            </div>
            <div class="form-group">
            <label>Data de Nascimento:</label>
            <input class="form-control" type="date" name="data_nas" min="1900-12-28" max="2002-04-30" required>
            </div>
            <div class="form-group">
            <label>Situação Conjungal:</label>
            <select class="form-control" name="situacao_conj" required>
            <option disabled="disabled" selected="selected">Selecione</option>
            <option>Solteiro</option>
            <option>Casado</option>
            <option>Separado</option>
            <option>Divorciado</option>
            <option>Viúvo</option>
            </select>
            </div>
            <input type="submit" name="inserir" class="btn btn-success btn-block" value="Salvar">
        </form>
    </div>
</div>