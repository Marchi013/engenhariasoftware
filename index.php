<?php
    session_start();
    if(!isset($_SESSION['autenticado'])){
      header('location: login.php');
    }
?>
<?php require_once 'header.php' ?>


          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Painel de controle</h1>
          </div>

          <!-- Content Row -->
          <div class="row">







   <div class="col-xl-3 col-md-6 mb-4" id="myDiv"> 
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Clientes</div>
                      <div class="row no-gutters align-items-center">
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


<?php if ($_SESSION['autenticado'] === 'admin@gmail.com'){
     echo  ' <div class="col-xl-3 col-md-6 mb-4" id="myDiv2"> 
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Corretores</div>
                      <div class="row no-gutters align-items-center">
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>';
    } ?> 





        </div>
        <!-- /.container-fluid -->
<script>
  document.getElementById("myDiv").onclick = function() {
  window.location.href="clientes.php"
  };
   document.getElementById("myDiv2").onclick = function() {
  window.location.href="corret.php"
  };
</script>
  
<?php require_once 'footer.php' ?>