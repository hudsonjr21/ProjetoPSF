
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Projeto PSF</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="<?= base_url(); ?>assets/login/images/icons/PSF.ico"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/tema/css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/tema/css/font-awesome.min.css">

    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/tema/css/elegant-fonts.css">

    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/tema/css/themify-icons.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/tema/css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/tema/style.css">
</head>


<body>
    <header class="site-header">
        <div class="top-header-bar">
            <div class="container">
                <div class="row flex-wrap justify-content-center justify-content-lg-between align-items-lg-center">
                    <div class="col-12 col-lg-8 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0">
                        <div class="header-bar-email">
                            <a href="<?= base_url(); ?>painel"></a>
                        </div><!-- .header-bar-email -->

                        <div class="header-bar-text">
                        </div><!-- .header-bar-text -->
                    </div><!-- .col -->

                    <div class="col-12 col-lg-4 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
                        <div class="donate-btn">
                            <a href="<?= base_url(); ?>principal/logout">Sair</a>
                        </div><!-- .donate-btn -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .top-header-bar -->

    <div class="nav-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="site-branding d-flex align-items-center">
                           <a class="d-block" href="<?= base_url(); ?>painel" rel="home"><img class="d-block" src="<?= base_url(); ?>assets/tema/images/psf.jpg" width="199" height="107" alt="logo"></a>
                        </div><!-- .site-branding -->
                        <nav class="site-navigation d-flex justify-content-end align-items-center">
                            <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                                <li><a href="<?= base_url(); ?>painel">Home</a></li>
                                <li><a href="<?= base_url(); ?>painel/familia">Cadastrar Família</a></li>
                                <?php if ($user->permit != '0' ) : ?>
                                <li><a href="<?= base_url(); ?>painel/agente">Agentes PSF</a></li>
                                <?php endif; ?>
                                <li><a href="<?= base_url(); ?>perfil">Perfil</a></li>
                            </ul>
                        </nav>
                        <!-- .site-navigation -->
