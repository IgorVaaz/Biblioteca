
<?php

   session_start(); // colocar em toda pag
   if (!isset($_SESSION['user']))
      Header("Location: ./login.html");

?>

<!DOCTYPE html>
<html>

    <head>
  
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
  
  
      <title>Biblioteca - Dashboard</title>
  
      <!-- Bootstrap core CSS-->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
      <!-- Custom fonts for this template-->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  
      <!-- Page level plugin CSS-->
      <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  
      <!-- Custom styles for this template-->
      <link href="css/sb-admin.css" rel="stylesheet">
  
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  
    </head>
  
    <body id="page-top">
  
      <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
  
        <a class="navbar-brand mr-1" href="index.html">Biblioteca</a>
  
        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
          <i class="fas fa-bars"></i>
        </button>
  
        <!-- Navbar Search -->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
          <div class="input-group">
           
          </div>
        </form> 

        <!-- Navbar -->
       <ul class="navbar-nav ml-auto ml-md-0">
        <!--    <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-bell fa-fw"></i>
              
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-envelope fa-fw"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li> -->
          
          <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  >
                <i class="float-right"></i>
               <i class="fas fa-power-off"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
              <!--<a class="dropdown-item" href="#">Configurações</a>
              <a class="dropdown-item" href="#">Registro de atividade</a> -->
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Sair</a>
            </div>
          </li>
        </ul>
  
      </nav>
  
      <div id="wrapper">
  
        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">
               <i class="fas fa-grip-vertical"></i> 
               <span>Menu</span>

            </th>
             
            </a>
          </li>


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-play"></i>
              
              <span> Ações</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
              <h6 class="dropdown-header"> Opções:</h6>
              <a class="dropdown-item" href="pendente.html">
                  <i class="fas fa-bell"></i> Pendentes</a>
              <a class="dropdown-item" href="register.html">
                  <i class="fas fa-edit"></i> Emprestimo</a>
              <a class="dropdown-item" href="forgot-password.html">
                  <i class="fas fa-folder-open"></i> Devolução</a> 
                  <a class="dropdown-item" href="register.html">
                    <i class="fas fa-user-plus"></i> Novo Usuário </a>
                <a class="dropdown-item" href="register.html">
                    <i class="fas fa-user-times"></i> Excluir Usuário </a>
            </div>
          
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="far fa-list-alt"></i>
                    <span>Relatórios</span>
                  </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header"> Opções:</h6>
            <a class="dropdown-item" href="lstLivro.php">
                <i class="fas fa-book"></i>  Acervo</a>
            <a class="dropdown-item" href="lstLivro.php">
                <i class="fas fa-user-graduate"></i>  Alunos</a>
            <a class="dropdown-item" href="lstLivro.php">
            <i class="fas fa-chalkboard-teacher"></i> Professores</a>
            </li>

            
           

         
        </ul>
  
        <div id="content-wrapper">
  
          <div class="container-fluid">
  
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Visão Geral</li>
            </ol>
  
            <!-- Icon Cards-->
            <div class="row">
              <div class="col-xl-4 col-sm-6 mb-1">
                <div class="card text-white bg-primary o-hidden h-100">
                  <div class="card-body">
                    <div class="card-body-icon">
                      <i class="fas fa-user-graduate"></i>
                    </div>
                    <div class="mr-5">Alunos</div>
                  </div>
                  <a class="card-footer text-white clearfix small z-1" href="#">
                    <span class="float-left">Ver Detalhes</span>
                    <span class="float-right">
                      <i class="fas fa-angle-right"></i>
                    </span>
                  </a>
                </div>
              </div>
              <div class="col-xl-4  col-sm-6 mb-1">
                <div class="card text-white bg-warning o-hidden h-100">
                  <div class="card-body">
                    <div class="card-body-icon">
                      <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <div class="mr-5">Professores</div>
                  </div>
                  <a class="card-footer text-white clearfix small z-1" href="#">
                    <span class="float-left">Ver Detalhes</span>
                    <span class="float-right">
                      <i class="fas fa-angle-right"></i>
                    </span>
                  </a>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 mb-1">
                <div class="card text-white bg-success o-hidden h-100">
                  <div class="card-body">
                    <div class="card-body-icon">
                      <i class="fas fa-book"></i>
                    </div>
                    <div class="mr-5">Livros</div>
                  </div>
                  <a class="card-footer text-white clearfix small z-1" href="#">
                    <span class="float-left">Ver Detalhes</span>
                    <span class="float-right">
                      <i class="fas fa-angle-right"></i>
                    </span>
                  </a>
                </div>
              </div>
              
            </div>
  
            
            
          <!-- /.container-fluid -->
  
          <!-- Sticky Footer -->
          <footer class="sticky-footer">
            <div class="container my-auto">
              <div class="copyright text-center my-auto">
                <span>Copyright © Fema Library 2018</span>
              </div>
            </div>
          </footer>
  
        </div>
        <!-- /.content-wrapper -->
  
      </div>
      <!-- /#wrapper -->
  
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
      </a>
  
      <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Pronto para partir?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Selecione "Sair" abaixo se você estiver pronto para terminar sua sessão atual.</div>
            <div class="modal-footer">
              <button class="btn btn-primary" type="button" data-dismiss="modal">Cancelar</button>
              <a class="btn btn-danger" href="logout.php">Sair</a> <!-- PAREI AQUI LOGOUT PRONTO -->
            </div>
          </div>
        </div>
      </div>
  
      <!-- Bootstrap core JavaScript-->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
      <!-- Core plugin JavaScript-->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  
      <!-- Page level plugin JavaScript-->
      <script src="vendor/chart.js/Chart.min.js"></script>
      <script src="vendor/datatables/jquery.dataTables.js"></script>
      <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
  
      <!-- Custom scripts for all pages-->
      <script src="js/sb-admin.min.js"></script>
  
      <!-- Demo scripts for this page-->
      <script src="js/demo/datatables-demo.js"></script>
      <script src="js/demo/chart-area-demo.js"></script>
  
    </body>
  
  </html>
  