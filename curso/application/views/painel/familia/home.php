<div class="container">
<div class="jumbotron" style="padding: 10px;">
    <div style="float: left;">
        <h1>Cadastro Membro Familiar </h1>
    </div>
    <div style="float: right;">
        <a class="btn btn-success" href="<?= base_url(); ?>painel/familia/inserir">Inserir</a>
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
      <th>Endereço</th>
      <th>Telefone</th>
      <th>Operação</th>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Endereço</th>
      <th>Telefone</th>
      <th>Operação</th>
    </tr>
  </tfoot>
  <tbody>
    <?php foreach ($familia as $n) { ?>
        <tr>
            <td><?= $n->id_fam; ?></td>
            <td><?= $n->nome; ?></td>
            <td><?= $n->endereco; ?></td>
            <td><?= $n->telefone; ?></td>
            <td>
                <a class="btn btn-warning" href="<?= base_url(); ?>painel/familia/alterar/<?= $n->id_fam; ?>">Alterar</a>
                <a class="btn btn-danger" href="<?= base_url(); ?>painel/familia/apagar/<?= $n->id_fam; ?>">Apagar</a>
            </td>
        </tr>
    <?php } ?>


  </tbody>
</table>
</div>