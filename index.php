<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> 
<?php include 'config.php';
     

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
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="font-awesome.min.css">
        <link rel="stylesheet" href="carousel.css">
        <link rel="stylesheet" href="animate.css">


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

            <header class="header">
                <div class="topbar clearfix">
                    <div class="container"> 
                        <div class="row-fluid">
                            <div class="col-md-6 col-sm-6 text-left">
                                <p>
                                    <strong><i class="fa fa-phone"></i></strong> +90 555 123 45 67 &nbsp;&nbsp;
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
                                <a class="navbar-brand" href="index.php"><img src="logo.png" alt=""></a>
                                                              
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
                                <li><a href="gerenciar.php">Área Admim</a></li>
                                <li><a href="logout.php"><img src="sai.png" class="img-responsive" style="float:right;" >Logout</a></li>
                                
                            </ul>
                        </div>
                    </nav><!-- end navbar -->
                </div><!-- end container -->
            </header>

            <section id="home" class="video-section js-height-full">
                <div class="overlay"></div>
                <div class="home-text-wrapper relative container">
                    <div class="home-message">
                        <p>Homeschooling: Educação em casa</p>
                        <!--                    <small>A educação domiciliar ou homeschooling é a substituição integral da frequência à escola pela educação doméstica, onde a responsabilidade pela educação formal dos filhos é atribuída aos próprios pais ou responsáveis. </small>-->
                        <div class="btn-wrapper">
                            <div class="text-center section-btn">
                                <a href="#" class="btn btn-primary wow slideInLeft"  data-toggle="modal" data-target="#modal-form">Cadastre-se/ Login</a> &nbsp;&nbsp;&nbsp;
                            </div>
                        </div><!-- end row -->
                    </div>
                </div>
                <div class="slider-bottom">
                    <span> <?php 
                               if(!empty($_SESSION['nome'])){
                                    $logado = $_SESSION['nome'];
                                   echo "<h4>Bem Vindo: $logado </h4>";
                               }
                                   ?>  </span>
                </div>
            </section>
            

            <section class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 hidden-sm hidden-xs">
                            <div class="custom-module">
                                <img src="11a.jpg" alt="" class="img-responsive wow slideInLeft">
                            </div><!-- end module -->
                        </div><!-- end col -->
                        <div class="col-md-8">
                            <div class="custom-module p40l">
                                <h2><mark>EDUCAÇÃO NA PANDEMIA:</mark> ENSINO A DISTÂNCIA DÁ <br> IMPORTANTE
                                    SOLUÇÃO EMERGENCIAL, MAS<br> RESPOSTA  À ALTURA EXIGE PLANO PARA <br>VOLTA ÀS AULAS <br></h2>

                                <p>Nota técnica do Todos Pela Educação traz panorama de dados e evidências científicas mais recentes sobre ensino a distância e dos desafios desse período.</p>

                                <hr class="invis">

                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 first">
                                        <ul class="check">
                                            <li>Impacto emocional nos alunos e profissionais da Educação</li>
                                            <li>Abandono e evasão escolar</li>
                                            <li>Retorno gradual com precauções com a saúde </li>
                                            <li>Cumprimento da carga horária exigida por Lei</li>
                                            <li>Avaliação diagnóstica e recuperação da aprendizagem </li>
                                        </ul><!-- end check -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <ul class="check">
                                            <li>Comunicação frequente com os pais e responsáveis</li>
                                            <li>Articulação entre instituições locais que impactam a política educacional</li>
                                            <li>Contextualização das ações no nível da escola</li>
                                            <li>Atendimento intersetorial como esforço perene</li>
                                            <li>Institucionalização de políticas de recuperação da aprendizagem</li>
                                        </ul><!-- end check -->    
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 last">
                                        <ul class="check">
                                            <li>Fortalecimento da relação família-escola</li>
                                            <li>Tecnologia como aliada contínua</li>

                                        </ul><!-- end check -->
                                    </div><!-- end col-lg-4 --> 
                                </div><!-- end row -->   

                                <hr class="invis">

                                <div class="btn-wrapper">
                                    <a href="#" class="btn btn-primary">Topo da Página</a>
                                </div>

                            </div><!-- end module -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </section>

            <section class="section gb">
                <div class="container">
                    <div class="section-title text-center">
                        <h3>Matérial de Aula</h3>
                        <p>Aliar a tecnologia educacional à prática pedagógica é uma ambição das melhores e mais modernas no Brasil e no mundo.
                            A tecnologia educacional fala a linguagem das novas gerações, por isso contribui para encantar os alunos e as famílias, que se tornam cada vez mais envolvidos com o processo educacional.</p>
                    </div><!-- end title -->

                    <div id="owl-01" class="owl-carousel owl-theme owl-theme-01">
                        <div class="caro-item">
                            <div class="course-box">
                                <div class="image-wrap entry">
                                    <img src="pot.png" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <a href="blog-3.php" title=""><i class="flaticon-add"></i></a>
                                    </div>
                                </div><!-- end image-wrap -->
                                <div class="course-details">
                                    <h4>
                                        <small>Português</small>
                                        <a href="blog-3.php" title="">Atividades e Vídeo Aulas</a>
                                    </h4>
                                    <p>Plano de aula de Língua Portuguesa com atividades para 3º ano do Ensino Fundamental sobre leitura/escuta.</p>
                                </div><!-- end details -->
                                <div class="course-footer clearfix">
                                    <div class="pull-left">
                                        <ul class="list-inline">
                                            <li><a href="blog-3.php"><i class="fa fa-user"></i> 21</a></li>
                                            <li><a href="blog-3.php"><i class="fa fa-clock-o"></i>Conteúdo</a></li>
                                        </ul>
                                    </div><!-- end left -->


                                </div><!-- end footer -->
                            </div><!-- end box -->
                        </div><!-- end col -->

                        <div class="caro-item">
                            <div class="course-box">
                                <div class="image-wrap entry">
                                    <img src="mat.png" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <a href="blog-1.php" title=""><i class="flaticon-add"></i></a>
                                    </div>
                                </div><!-- end image-wrap -->
                                <div class="course-details">
                                    <h4>
                                        <small>Matemática</small>
                                        <a href="blog-1.php" title="">Atividades e Vídeo aulas</a>
                                    </h4>
                                    <p>Plano de aula de Matemática com atividades para 3ºano do Fundamental sobre Identificação de padrões de uma sequência.</p>
                                </div><!-- end details -->
                                <div class="course-footer clearfix">
                                    <div class="pull-left">
                                        <ul class="list-inline">
                                            <li><a href="blog-1.php"><i class="fa fa-user"></i> 41</a></li>
                                            <li><a href="blog-1.php"><i class="fa fa-clock-o"></i>Conteúdo</a></li>
                                        </ul>
                                    </div><!-- end left -->


                                </div><!-- end footer -->
                            </div><!-- end box -->
                        </div><!-- end col -->

                        <div class="caro-item">
                            <div class="course-box">
                                <div class="image-wrap entry">
                                    <img src="geo.png" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <a href="blog-2.php" title=""><i class="flaticon-add"></i></a>
                                    </div>
                                </div><!-- end image-wrap -->
                                <div class="course-details">
                                    <h4>
                                        <small>Geografia</small>
                                        <a href="blog-2.php" title="">Atividades e Vídeo aulas</a>
                                    </h4>
                                    <p>Plano de aula de Geografia com atividades para 3º ano do Fundamental sobre identificar e comparar características da vida no campo e na cidade.</p>
                                </div><!-- end details -->
                                <div class="course-footer clearfix">
                                    <div class="pull-left">
                                        <ul class="list-inline">
                                            <li><a href="blog-2.php"><i class="fa fa-user"></i> 35</a></li>
                                            <li><a href="blog-2.php"><i class="fa fa-clock-o"></i> Conteúdo</a></li>
                                        </ul>
                                    </div><!-- end left -->


                                </div><!-- end footer -->
                            </div><!-- end box -->
                        </div><!-- end col -->
                        <div class="caro-item">
                            <div class="course-box">
                                <div class="image-wrap entry">
                                    <img src="cie.png" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <a href="blog-4.php" title=""><i class="flaticon-add"></i></a>
                                    </div>
                                </div><!-- end image-wrap -->
                                <div class="course-details">
                                    <h4>
                                        <small>Ciências</small>
                                        <a href="blog-4.php" title="">Atividades e Vídeo aulas</a>
                                    </h4>
                                    <p>Plano de aula de Ciências com atividades para 3º ano do Fundamental .</p>
                                </div><!-- end details -->
                                <div class="course-footer clearfix">
                                    <div class="pull-left">
                                        <ul class="list-inline">
                                            <li><a href="blog-4.php"><i class="fa fa-user"></i> 35</a></li>
                                            <li><a href="blog-4.php"><i class="fa fa-clock-o"></i> Conteúdo</a></li>
                                        </ul>
                                    </div><!-- end left -->


                                </div><!-- end footer -->
                            </div><!-- end box -->
                        </div><!-- end col -->            
                    </div><!-- end row -->

                    <hr class="invis">

                    <div class="section-button text-center">
                        <a href="#" class="btn btn-primary">Topo da página</a>
                    </div>
                </div><!-- end container -->
            </section>

            <section class="section db p120">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tagline-message text-center">
                                <h3>Complementar</h3>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </section><!-- end section -->

            <section class="section gb nopadtop">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="box m30">
                                <img src="book2.png" alt="" class="img-responsive">
                                <h4>Livros on-line e gratuitos para as crianças na quarentena</h4>
                                <p>Que tal recorrer à literatura para atravessar os tempos difíceis? Conheça sites e editoras que disponibilizam acesso gratuito a livros infantis.</p>
                                <a href="shop.php" class="readmore">Saiba mais..</a>
                            </div>
                        </div><!-- end col -->

                        <div class="col-md-6">
                            <div class="box m30">
                                <img src="cabeca.png" alt="" class="img-responsive" >
                                <h4>Psicologa Online</h4>
                                <p>Atendimento psicológico online gratuito para ajudar a população brasileira a vencer a pandemia do Coronavírus.</p>
                                <a href="events.php" class="readmore">Saiba mais...</a>
                            </div>
                        </div><!-- end col -->                  
                    </div><!-- end row -->
                    <hr class="invis">           
                </div><!-- end container -->
            </section>

            <section class="section db">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="stat-count">
                                <h4 class="stat-timer">1230</h4>
                                <h3><i class="flaticon-black-graduation-cap-tool-of-university-student-for-head"></i> Estudantes</h3>
                                <p>Estudantes Satisfeitos</p>
                            </div><!-- stat-count -->
                        </div><!-- end col -->

                        <div class="col-lg-4 col-md-4">
                            <div class="stat-count">
                                <h4 class="stat-timer">331</h4>
                                <h3><i class="flaticon-online-course"></i> Docentes</h3>
                                <p>Professores Beneficiados </p>
                            </div><!-- stat-count -->
                        </div><!-- end col -->

                        <div class="col-lg-4 col-md-4">
                            <div class="stat-count">
                                <h4 class="stat-timer">8901</h4>
                                <h3><i class="flaticon-coffee-cup"></i> Usuário Comum</h3>
                                <p>Todos tem acesso a plataforma </p>
                            </div><!-- stat-count -->
                        </div><!-- end col -->
                    </div><!-- end row -->
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
        <!-- MODAL -->
        <section class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content modal-popup">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">

                                <div class="col-md-12 col-sm-12">
                                    <div class="modal-title">
                                        <h2>Edulogy</h2>
                                    </div>

                                    <!-- NAV TABS -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="active"><a href="#sign_up" aria-controls="sign_up" role="tab" data-toggle="tab">Create an account</a></li>
                                        <li><a href="#sign_in" aria-controls="sign_in" role="tab" data-toggle="tab">Sign In</a></li>
                                    </ul>

                                    <!-- TAB PANES -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="sign_up">
                                            <form action="#" method="post">
                                                <input type="text" class="form-control" name="nome" placeholder="Name" required>
                                                <select id="tipo" class="form-control" name="tipo" >
                                                    <option  selected>Tipo</option>
                                                    <option  value="Admin">Professsor</option>
                                                    <option  value="Comum">Aluno</option>                                                                                                   
                                                </select>
                                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                                                <input type="password" class="form-control" name="senha" placeholder="Password" required>
                                                <input type="submit" class="form-control" name="enviar" value="Cadastrar">
                                            </form>
                                        </div>

                                        <div role="tabpanel" class="tab-pane fade in" id="sign_in">
                                            <form action="#" method="post">
                                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                                                <input type="password" class="form-control" name="senha" placeholder="Password" required>
                                                <input type="submit" class="form-control" name="submit" value="Submit Button">
                                                
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- jQuery Files -->
        <script src="jquery.min.js"></script>

        <script src="bootstrap.min.js"></script>
        <script src="carousel.js"></script>
        <script src="animate.js"></script>
        <script src="custom.js"></script>
        <!-- VIDEO BG PLUGINS -->
        <script src="videobg.js"></script>

    </body>
</html>