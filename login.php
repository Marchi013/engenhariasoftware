<?php
    session_start(); //comando para utilizar sessão, stater

    if(isset($_GET['acao']) && $_GET['acao']=='logout'){
        unset($_SESSION['autenticado']);
    }

    require_once('classeConexao.php');
    if(isset($_POST) && $_POST!=NULL){
        $con = new Conexao();
        $dados['email'] = $_POST['email'];
        $dados['senha'] = md5($_POST['senha']);
        $sql = "SELECT email FROM corret WHERE email=:email AND senha=:senha";
        $registro = $con->getRegistro($sql, $dados);
        if($registro == NULL);
        else{
          $_SESSION['autenticado']=$registro['email'];
          header('location: index.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Idealizar Imóveis</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-3 d-lg-block"><img src="capa.png" width=1000 height=500>
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                <form class="form-signin" action="login.php" method="POST">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control form-control-user" id="inputEmail" aria-describedby="email" placeholder="Informe seu e-mail" required autofocus>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="inputPassword" placeholder="Informe sua senha" name="senha">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox strong">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Lembrar</label>
                      </div>
                    </div>
                     <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
                    <hr>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="strong" href="senha_perdida.php">Esqueceu sua senha?</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
