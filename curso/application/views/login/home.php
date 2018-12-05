<div class="limiter">
	<div class="container-login100" style="background-image: url(<?=base_url('assets/cadastro/images/saude.jpg')?>);">
		<div class="wrap-login100">
			<div class="login100-form-title" style="background-image: url(<?=base_url('assets/login/images/psf_lo.jpg')?>);">
				<span class="login100-form-title-1">
					
				</span>
			</div>


<div class="container">
<div class="card card-login mx-auto mt-5">
  <div class="card-header"><h4>Fazer Login</div>
  <div class="card-body">
	<?php
		if(isset($this->session->userdata['avisos'])){
			$avisos = $this->session->userdata['avisos'];
			foreach ($avisos as $a) { ?>
				<div class="alert alert-<?= $a['type']; ?> alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<strong>Aviso!</strong> <?= $a['message']; ?>
				</div>
			<?php
			}
			$this->session->set_userdata('avisos', null);
		} 
		if (isset($aviso)) {
			?>
			<div class="alert alert-<?php echo $tipo; ?> alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<?php echo $aviso; ?>
			</div>
			<?php
		}
	?>
	<form action="<?= base_url(); ?>principal/login" id="formlogin" method="post" accept-charset="utf-8">
	  <div class="form-group">
		<label for="exampleInputEmail1">Login</label>
		<input class="form-control" id="exampleInputEmail1" type="text" placeholder="Login" name="login">
	  </div>
	  <div class="form-group">
		<label for="exampleInputPassword1">Senha</label>
		<input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password" name="senha">
	  </div>
	  <input type="submit" name="entrar" class="btn btn-success btn-block" value="Entrar">
	</form>
	<div class="text-center">
	  <a class="d-block small mt-3" href="<?= base_url(); ?>principal/cadastro">
		  <input type="submit" name="cadastrar" class="btn btn-primary btn-block" value="Cadastrar">
	  </a>
	</div>
  </div>
</div>
</div>




