<div class="container" >
<div class="jumbotron" style="padding: 10px;">
    <div style="float: left;">
        <h1>Cadastro Agente PSF</h1>
    </div>
    <div style="float: right;">
        <a class="btn btn-success" href="<?= base_url(); ?>painel/agente/inserir">Inserir</a>
    </div>
    <div style="clear: both;"></div>
</div>
</div>

<?= $this->conf->get_alertas(); ?>
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>CPF</th>
      <th>Bairro que Trabalha</th>
      <th>Operação</th>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>CPF</th>
      <th>Bairro que Trabalha</th>
      <th>Operação</th>
    </tr>
  </tfoot>
  <tbody>
    <?php foreach ($agente as $n) { ?>
        <tr>
            <td><?= $n->id_ag; ?></td>
            <td><?= $n->nome_ag; ?></td>
            <td><?= $n->cpf_ag; ?></td>
            <td><?= $n->bairro_tra; ?></td>
            <td>
                <a class="btn btn-warning" href="<?= base_url(); ?>painel/agente/alterar/<?= $n->id_ag; ?>">Alterar</a>
                <a class="btn btn-danger" href="<?= base_url(); ?>painel/agente/apagar/<?= $n->id_ag; ?>">Apagar</a>
            </td>
        </tr>
    <?php } ?>


  </tbody>
</table>
</div>