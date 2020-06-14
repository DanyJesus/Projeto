<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> 
<?php
include 'config.php';
        if((!isset ($_SESSION['nome']) == true) and (!isset ($_SESSION['tipo']) == true))
        {
            session_unset();
            echo "<script>
                alert('Esta página só pode ser acessada por usuário logado');
                window.location.href = 'index.php';
                </script>";

        }
        $logado = $_SESSION['nome'];
?>
<html class="no-js " lang="en"> <!--<![endif]-->
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Site Meta -->
    <title>Edulogy</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet"> 
    
    <!-- Custom & Default Styles -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap-select.min.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">

    <!--[if lt IE 9]>
        <script src="js/vendor/html5shiv.min.js"></script>
        <script src="js/vendor/respond.min.js"></script>
    <![endif]-->

</head>
<body>  

    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="loader.gif" alt="">
    </div><!-- end loader -->
    <!-- END LOADER -->

    <div id="wrapper">
        <!-- BEGIN # MODAL LOGIN -->
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Begin # DIV Form -->
                    <div id="div-forms">
                        <form id="login-form">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="flaticon-add" aria-hidden="true"></span>
                            </button>
                            <div class="modal-body">
                                <input class="form-control" type="text" placeholder="What you are looking for?" required>
                            </div>
                        </form><!-- End # Login Form -->
                    </div><!-- End # DIV Form -->
                </div>
            </div>
        </div>
        <!-- END # MODAL LOGIN -->

        <header class="header header-normal">
            <div class="topbar clearfix">
                <div class="container">
                    <div class="row-fluid">
                        <div class="col-md-6 col-sm-6 text-left">
                            <p>
                                <strong><i class="fa fa-phone"></i></strong> +90 543 123 45 67 &nbsp;&nbsp;
                                <strong><i class="fa fa-envelope"></i></strong> <a href="mailto:#">info@yoursite.com</a>
                            </p>
                        </div><!-- end left -->
                        <div class="col-md-6 col-sm-6 hidden-xs text-right">
                            <div class="social">
                                <a class="facebook" href="#" data-tooltip="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>              
                                <a class="twitter" href="#" data-tooltip="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                                <a class="google" href="#" data-tooltip="tooltip" data-placement="bottom" title="Google Plus"><i class="fa fa-google-plus"></i></a>
                                <a class="linkedin" href="#" data-tooltip="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                                <a class="pinterest" href="#" data-tooltip="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                            </div><!-- end social -->
                        </div><!-- end left -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end topbar -->

            <div class="container">
                <nav class="navbar navbar-default yamm">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="logo-normal">
                            <a class="navbar-brand" href="index.php"><img src="logo-dark.png" alt=""></a>
                            
                        </div>
                    </div>

                     <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php">Home</a></li>                    
                          
                            <li class="dropdown hassubmenu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Materias <span class="fa fa-angle-down"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="blog-3.php">Português</a></li>
                                    <li><a href="blog-1.php">Matemática</a></li>
                                    <li><a href="blog-2.php">Geografia</a></li>
                                    <li><a href="blog-4.php">Ciências</a></li>
                                 </ul>
                            </li>
                         <li><a href="logout.php"><img src="sai.png" class="img-responsive" style="float:right;" >Logout</a></li>
                        </ul>
                    </div>
                </nav><!-- end navbar -->
            </div><!-- end container -->
        </header>

        <section class="section lb p120">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tagline-message page-title text-center">
                            <h3>Cantinho da Leitura</h3>
                             <h4>Bem Vindo <?php echo $logado ?></h4>
                            <ul class="breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li class="active">Livros</li>
                            </ul>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

        <section class="section gb nopadtop">
            <div class="container">
                <div class="boxed boxedp4">
                    <div class="shop-top">
                        <div class="clearfix">
                            <div class="pull-left">
                                <p> livros 1–7 of 7 resultados</p>
                            </div>
                            
                        </div>
                    </div>

                    <div class="row blog-grid shop-grid">
                        <div class="col-md-3">
                            <div class="course-box shop-wrapper">
                                <div class="image-wrap entry">
                                    <img src="livro1.jpg" alt="" class="img-responsive" width="800" height="800">
                                    <div class="magnifier">
                                        <a href="https://ler.amazon.com.br/kp/embed?asin=B07D94LNWT&preview=newtab&linkCode=kpe&ref_=cm_sw_r_kb_dp_99T2EbWBCAVTN" title=""><i class="flaticon-add"></i></a>
                                    </div>
                                </div>
                                <!-- end image-wrap -->
                                <div class="course-details shop-box text-center">
                                    <h4>
                                        <a href="https://ler.amazon.com.br/kp/embed?asin=B07D94LNWT&preview=newtab&linkCode=kpe&ref_=cm_sw_r_kb_dp_99T2EbWBCAVTN" title="">O Bom Dinossauro</a>
                                        <small>e-book</small>
                                    </h4>
                                </div>
                                <!-- end details -->
                                <div class="course-footer clearfix">
                                    <div class="pull-left">
                                        <ul class="list-inline">
                                            <li><a href="https://ler.amazon.com.br/kp/embed?asin=B07D94LNWT&preview=newtab&linkCode=kpe&ref_=cm_sw_r_kb_dp_99T2EbWBCAVTN"><i class="fa fa-shopping-basket"></i> Add Cart</a></li>
                                        </ul>
                                    </div><!-- end left -->

                                    <div class="pull-right">
                                        <ul class="list-inline">
                                            <li><a href="https://ler.amazon.com.br/kp/embed?asin=B07D94LNWT&preview=newtab&linkCode=kpe&ref_=cm_sw_r_kb_dp_99T2EbWBCAVTN">Gratuito</a></li>
                                        </ul>
                                    </div><!-- end left -->
                                </div><!-- end footer -->
                            </div><!-- end box -->
                        </div><!-- end col -->

                        <div class="col-md-3">
                            <div class="course-box shop-wrapper">
                                <div class="image-wrap entry">
                                    
                                    <img src="livro2.jpg" alt="" class="img-responsive" width="800" height="800">
                                    <div class="magnifier">
                                        <a href="https://ler.amazon.com.br/kp/embed?asin=B087QQ3CT7&preview=newtab&linkCode=kpe&ref_=cm_sw_r_kb_dp_EpU2EbKV093X5" title=""><i class="flaticon-add"></i></a>
                                    </div>
                                </div>
                                <!-- end image-wrap -->
                                <div class="course-details shop-box text-center">
                                    <h4>
                                        <a href="https://ler.amazon.com.br/kp/embed?asin=B087QQ3CT7&preview=newtab&linkCode=kpe&ref_=cm_sw_r_kb_dp_EpU2EbKV093X5" title="">Clássicos da Disney</a>
                                        <small>E-book</small>
                                    </h4>
                                </div>
                                <!-- end details -->
                                <div class="course-footer clearfix">
                                    <div class="pull-left">
                                        <ul class="list-inline">
                                            <li><a href="https://ler.amazon.com.br/kp/embed?asin=B087QQ3CT7&preview=newtab&linkCode=kpe&ref_=cm_sw_r_kb_dp_EpU2EbKV093X5"><i class="fa fa-shopping-basket"></i> Add Cart</a></li>
                                        </ul>
                                    </div><!-- end left -->

                                    <div class="pull-right">
                                        <ul class="list-inline">
                                            <li><a href="https://ler.amazon.com.br/kp/embed?asin=B087QQ3CT7&preview=newtab&linkCode=kpe&ref_=cm_sw_r_kb_dp_EpU2EbKV093X5">Gratuito</a></li>
                                        </ul>
                                    </div><!-- end left -->
                                </div><!-- end footer -->
                            </div><!-- end box -->
                        </div><!-- end col -->

                        <div class="col-md-3">
                            <div class="course-box shop-wrapper">
                                <div class="image-wrap entry">
                                    <img src="livro3.jpg" alt="" class="img-responsive" width="800" height="800">
                                    <div class="magnifier">
                                        <a href="https://ler.amazon.com.br/kp/embed?asin=B07WQYQYSX&preview=newtab&linkCode=kpe&ref_=cm_sw_r_kb_dp_kwU2Eb0S0SPXE" title=""><i class="flaticon-add"></i></a>
                                    </div>
                                </div>
                                <!-- end image-wrap -->
                                <div class="course-details shop-box text-center">
                                    <h4>
                                        <a href="https://ler.amazon.com.br/kp/embed?asin=B07WQYQYSX&preview=newtab&linkCode=kpe&ref_=cm_sw_r_kb_dp_kwU2Eb0S0SPXE" title="">Heroínas em ação</a>
                                        <small>E-book</small>
                                    </h4>
                                </div>
                                <!-- end details -->
                                <div class="course-footer clearfix">
                                    <div class="pull-left">
                                        <ul class="list-inline">
                                            <li><a href="https://ler.amazon.com.br/kp/embed?asin=B07WQYQYSX&preview=newtab&linkCode=kpe&ref_=cm_sw_r_kb_dp_kwU2Eb0S0SPXE"><i class="fa fa-shopping-basket"></i> Add Cart</a></li>
                                        </ul>
                                    </div><!-- end left -->

                                    <div class="pull-right">
                                        <ul class="list-inline">
                                            <li><a href="https://ler.amazon.com.br/kp/embed?asin=B07WQYQYSX&preview=newtab&linkCode=kpe&ref_=cm_sw_r_kb_dp_kwU2Eb0S0SPXE">Gratuito</a></li>
                                        </ul>
                                    </div><!-- end left -->
                                </div><!-- end footer -->
                            </div><!-- end box -->
                        </div><!-- end col -->

                        <div class="col-md-3">
                            <div class="course-box shop-wrapper">
                                <div class="image-wrap entry">
                                    <img src="livro4.jpg" alt="" class="img-responsive" width="800" height="800">
                                    <div class="magnifier">
                                        <a href="https://ler.amazon.com.br/kp/embed?asin=B07FB1BSSC&preview=newtab&linkCode=kpe&ref_=cm_sw_r_kb_dp_dyU2EbTSWAB5E" title=""><i class="flaticon-add"></i></a>
                                    </div>
                                </div>
                                <!-- end image-wrap -->
                                <div class="course-details shop-box text-center">
                                    <h4>
                                        <a href="https://ler.amazon.com.br/kp/embed?asin=B07FB1BSSC&preview=newtab&linkCode=kpe&ref_=cm_sw_r_kb_dp_dyU2EbTSWAB5E" title="">Os Incríveis 2</a>
                                        <small>E-book</small>
                                    </h4>
                                </div>
                                <!-- end details -->
                                <div class="course-footer clearfix">
                                    <div class="pull-left">
                                        <ul class="list-inline">
                                            <li><a href="https://ler.amazon.com.br/kp/embed?asin=B07FB1BSSC&preview=newtab&linkCode=kpe&ref_=cm_sw_r_kb_dp_dyU2EbTSWAB5E"><i class="fa fa-shopping-basket"></i> Add Cart</a></li>
                                        </ul>
                                    </div><!-- end left -->

                                    <div class="pull-right">
                                        <ul class="list-inline">
                                            <li><a href="https://ler.amazon.com.br/kp/embed?asin=B07FB1BSSC&preview=newtab&linkCode=kpe&ref_=cm_sw_r_kb_dp_dyU2EbTSWAB5E">Gratuito</a></li>
                                        </ul>
                                    </div><!-- end left -->
                                </div><!-- end footer -->
                            </div><!-- end box -->
                        </div><!-- end col -->

                        <div class="col-md-3">
                            <div class="course-box shop-wrapper">
                                <div class="image-wrap entry">
                                    <img src="livro5.jpg" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <a href="https://ler.amazon.com.br/kp/embed?asin=B07D94CHR4&preview=newtab&linkCode=kpe&ref_=cm_sw_r_kb_dp_2AU2EbSDQGF4H" title=""><i class="flaticon-add"></i></a>
                                    </div>
                                </div>
                                <!-- end image-wrap -->
                                <div class="course-details shop-box text-center">
                                    <h4>
                                        <a href="https://ler.amazon.com.br/kp/embed?asin=B07D94CHR4&preview=newtab&linkCode=kpe&ref_=cm_sw_r_kb_dp_2AU2EbSDQGF4H" title="">Frozen</a>
                                        <small>E-book</small>
                                    </h4>
                                </div>
                                <!-- end details -->
                                <div class="course-footer clearfix">
                                    <div class="pull-left">
                                        <ul class="list-inline">
                                            <li><a href="https://ler.amazon.com.br/kp/embed?asin=B07D94CHR4&preview=newtab&linkCode=kpe&ref_=cm_sw_r_kb_dp_2AU2EbSDQGF4H"><i class="fa fa-shopping-basket"></i> Add Cart</a></li>
                                        </ul>
                                    </div><!-- end left -->

                                    <div class="pull-right">
                                        <ul class="list-inline">
                                            <li><a href="https://ler.amazon.com.br/kp/embed?asin=B07D94CHR4&preview=newtab&linkCode=kpe&ref_=cm_sw_r_kb_dp_2AU2EbSDQGF4H">Gratuito</a></li>
                                        </ul>
                                    </div><!-- end left -->
                                </div><!-- end footer -->
                            </div><!-- end box -->
                        </div><!-- end col -->

                       
                      

                    <hr class="invis">

                    <div class="row text-center">
                        <div class="col-md-12">
                            <ul class="pagination">
                                <li class="disabled"><a href="javascript:void(0)">&laquo;</a></li>
                                <li class="active"><a href="javascript:void(0)">1</a></li>
<!--                                <li><a href="javascript:void(0)">2</a></li>
                                <li><a href="javascript:void(0)">3</a></li>-->
<!--                                <li><a href="javascript:void(0)">...</a></li>-->
                                <li><a href="javascript:void(0)">&raquo;</a></li>
                            </ul>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div>
            </div><!-- end container -->
        </section>

        <footer class="section footer noover">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="widget clearfix">
                            <h3 class="widget-title">Quer receber novidades</h3>
                            <div class="newsletter-widget">
                                <p>Você receberá notificação de conteudo atualizado!<br> Se inscreva</p>
                                <form class="form-inline" role="search">
                                    <div class="form-1">
                                        <input type="text" class="form-control" placeholder="Enter email here..">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane-o"></i></button>
                                    </div>
                                </form>
                               
                            </div><!-- end newsletter -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    

                    <div class="col-lg-3 col-md-3">
                        <div class="widget clearfix">
                            <h3 class="widget-title">Tags Populares</h3>
                            <div class="tags-widget">   
                                <ul class="list-inline">
                                    <li><a href="#">pandemia</a></li>
                                    <li><a href="#">livros</a></li>
                                    <li><a href="#">atividades</a></li>
                                    <li><a href="#">alunos</a></li>
                                    <li><a href="#">professores</a></li>
                                    <li><a href="#">familia</a></li>
                                    <li><a href="#">material</a></li>
                                    <li><a href="#">português</a></li>
                                    <li><a href="#">matemática</a></li>
                                    <li><a href="#">ciências</a></li>
                                </ul>
                            </div><!-- end list-widget -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-lg-2 col-md-2">
                        <div class="widget clearfix">
                            <h3 class="widget-title">Support</h3>
                            <div class="list-widget">   
                                <ul>
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Copyrights</a></li>
                                    <li><a href="#">Create a Ticket</a></li>
                                    <li><a href="#">Pricing & Plans</a></li>
                                    <li><a href="#">Carrier</a></li>
                                    <li><a href="#">Trademark</a></li>
                                </ul>
                            </div><!-- end list-widget -->
                        </div><!-- end widget -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </footer><!-- end footer -->

        <div class="copyrights">
            <div class="container">
                <div class="clearfix">
                    <div class="pull-left">
                        <div class="cop-logo">
                            <a href="#"><img src="logo.png" alt=""></a>
                        </div>
                    </div>

                    <div class="pull-right">
                        <div class="footer-links">
                           
                        </div>
                    </div>
                </div>
            </div><!-- end container -->
        </div><!-- end copy -->
    </div><!-- end wrapper -->

    <!-- jQuery Files -->
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="animate.js"></script>
    <script src="bootstrap-select.min.js"></script>
    <script src="custom.js"></script>

</body>
</html>