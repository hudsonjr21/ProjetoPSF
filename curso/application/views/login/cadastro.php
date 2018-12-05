<body>
    <div class="page-wrapper bg-orange p-t-100 p-b-100 font-robo" style="background-image: url(<?=base_url('assets/cadastro/images/saude.jpg')?>);">
        <div class="wrapper wrapper--w680">
            <div class="card card-1" >
                <div class="card-heading" style="background-image: url(<?=base_url('assets/login/images/psf_lo.jpg')?>);"></div>
                <div class="card-body">
                    <h2 class="title">Cadastre-se</h2>
        <div class="card-body">
            <form action="" method="post" accept-charset="utf-8">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="exampleInputName">Login</label>
                            <input class="form-control" type="text" name="login">
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputLastName">Senha</label>
                            <input class="form-control" type="password" name="senha">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="exampleInputPassword1">Nome</label>
                            <input class="form-control" type="text" name="nome">
                        </div>
                        <div class="col-md-6">
                            <label for="exampleConfirmPassword">Bairro</label>
                            <input class="form-control" type="text" name="bairro">
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary btn-block" name="cadastrar" value="Cadastrar">
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="<?= base_url(); ?>principal/logar">
                <input type="submit" class="btn btn-danger btn-block" name="voltar" value="Voltar">
                </a>
            </div>
        </div>
    </div>
</div>