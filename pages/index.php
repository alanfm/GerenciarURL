<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <base href="<?php echo BASE_SITE;?>" />
        <title><?php echo TITLE_SITE;?></title>

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="assets/css/sticky-footer-navbar.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <!-- Wrap all page content here -->
        <div id="wrap">
            <!-- Fixed navbar -->
            <div class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><abbr title="Sistema de Gestão Escolar">SGE</abbr> - Painel Administrativo</a><br>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Nav header</li>
                                    <li><a href="#">Separated link</a></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>

            <!-- Begin page content -->
            <div class="container">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <p>Sistema de Teste</p>
                        </div>
                        <div class="col-md-3">
                            <p>Sistema de Teste</p>
                        </div>
                        <div class="col-md-3">
                            <p>Sistema de Teste</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <table class="table table-hover">
                        <thead>
                            <th>Sala</th>
                            <th>Turmas</th>
                            <th>Opções</th>
                        </thead>
                        <tr>
                            <td>Sala 01</td>
                            <td>6º A | 6º E</td>
                            <td><a href="#">Editar</a> | <a href="#">Exibir</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div id="footer">
            <div class="container">
                <p class="text-muted credit">Copyright &copy; 2013 | <a href="#" target="_blank">Astherisco Informática</a></p>
            </div>
        </div>


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </body>
</html>
