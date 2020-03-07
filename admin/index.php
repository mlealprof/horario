<?php
    require ("verifica_login.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <link href="img/favicon.png" rel="icon">


    <title>Time Table</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- Barra de Navegação -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.php">TimeTable</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                      <?php echo $_SESSION['nome_escola'], ", ", $_SESSION['usuario'], ", ", $_SESSION['tipo_usuario']; ?>
                    </ul>
                </div>
                  <div >

                <button type="submit" class="btn tamanho_button" ><a href="sair.php">Sair</button>

              </div>
            </nav>

           
        </div>
        <!-- ============================================================== -->
        <!-- Final Barra Navegaçao -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Barra Lateral -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Painel de Controle</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Perfil <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="?tela=dadosusuario"><i class="fa fa-fw fa-bars"></i>Dados Usuário</a>
                                        </li>
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-1" aria-controls="submenu-1-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-fw fa-university"></i>Escola</a>
                                            <div id="submenu-1-1" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="?tela=turmas">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-fw fa-users"></i>Turmas</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="?tela=disciplina">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-fw fa-book"></i>Disciplinas</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="?tela=professores">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-fw fa-graduation-cap"></i>Professores</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="?tela=horarios">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-fw fa-clock"></i>Horários</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Cadastros</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="?tela=usuario"><i class="fa fa-fw fa-user-plus"></i>Cadastrar Usuários<span class="badge badge-secondary">New</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="?tela=curso"><i class="fa fa-fw fa-bookmark"></i>Cadastrar Cursos</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="?tela=caddisciplina"><i class="fa fa-fw fa-book"></i>Cadastrar Disciplinas</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="?tela=turma"><i class="fa fa-fw fa-users"></i>Cadastrar Turmas</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="?tela=horario"><i class="fa fa-fw fa-clock"></i>Cadastrar Horários</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="?tela=turno"><i class="fa fa-fw fa-clock"></i>Cadastrar Turno</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="?tela=professor"><i class="fa fa-fw fa-graduation-cap"></i>Cadastrar Professores</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="?tela=disciplina_turma"><i class="fa fa-fw fa-graduation-cap"></i>Disciplina por Turma</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Horários</a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/chart-c3.html"><i class="fa fa-fw fa-table"></i>Quadro de Horários</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/chart-c3.html"><i class="fa fa-fw fa-calendar-plus"></i>Gerar Horário</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/chart-chartist.html"><i class="fa fa-fw fa-search"></i>Buscar Horários</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/chart-charts.html"><i class="fa fa-fw fa-edit"></i>Editar Horários</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/chart-morris.html"><i class="fa fa-fw fa-trash"></i>Excluir Horários</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Final Barra Lateral -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <?php
                        if (isset($_GET['tela'])) {
                            $tela = $_GET['tela'];
                            switch ($tela) {
                                case 'usuario':
                                    include 'cadastro_usuario.php';
                                    break;
                                     case 'turmas':
                                    include 'turmas.php';
                                    break;
                                       case 'disciplina':
                                    include 'disciplina.php';
                                    break;
                                       case 'professores':
                                    include 'professores.php';
                                    break;
                                        case 'horarios':
                                    include 'horarios.php';
                                    break;
                                    case 'dadosusuario':
                                    include 'dados_usuario.php';
                                    break;
                                case 'curso':
                                    include 'cadastro_curso.php';
                                    break;
                                case 'caddisciplina':
                                    include 'cadastro_disciplina.php';
                                    break;
                                case 'turma':
                                    include 'cadastro_turma.php';
                                    break;
                                case 'horario':
                                    include 'cadastro_horario.php';
                                    break;
                                case 'professor':
                                    include 'cadastro_professor.php';
                                    break;
                                case 'disciplina_turma':
                                    include 'disciplina_por_turma.php';
                                    break;
                                case 'indisponibilidades':
                                    include 'cadastro_indisponibilidade.php';
                                    break;
                                case 'turno':

                                    include 'cadastro_turno.php';

                                    break;
                                default:
                                    include 'cadastro_usuario.php';
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                         &copy; Copyright <strong>TimeTable</strong>. Todos os Direitos Reservados</a>.
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="text-md-right footer-links d-none d-sm-block">
                            <a href="javascript: void(0);">About</a>
                            <a href="javascript: void(0);">Support</a>
                            <a href="javascript: void(0);">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- final footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end wrapper  -->
    <!-- ============================================================== -->

    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
</body>
</html>
