<?php
    session_start();
    if(!isset($_SESSION['autenticado'])){
      header('location: login.php');
    }
?>
<?php 
         require_once 'header.php';
        $con = new Conexao();
        $consulta="SELECT * FROM pessoa ORDER BY id DESC";
        $dados = $con->getLista($consulta);  
?>
          <!-- DataTales Example -->
        <div class="container">
  <h2>Lista De Clientes</h2>
  <a class="btn btn-info" href="FormCliente.php">
    <i class="glyphicon glyphicon-plus"></i> Adicionar</a>
  <table class="table table-striped table-hover">
    <th>#</th>
    <th>Nome</th>
    <th>Idade</th>
    <th>Telefone</th>
    <th>Interesse</th>
    <th>Obs</th>
    <th>Valor</th>
    <th></th>
     <th></th>
    <?php foreach($dados as $p){ ?>
             <tr>
                <td><?= $p['id']; ?></td>
                <td><?= $p['nome']; ?></td>
                <td><?= $p['idade']; ?></td>
                <td><?= $p['telefone']; ?></td>
                <td><?= $p['interesse']; ?></td>
                <td><?= $p['obs']; ?></td>
                <td><?= $p['valor']; ?></td>
                <td>
                  <a class="btn btn-info" href="controlador.php?acao=buscar_cliente&id=<?= $p['id']; ?>">
                    Editar
                  </a>
                </td>
                <td>
                  <a class="btn btn-danger" href="controlador.php?acao=excluir_cliente&id=<?= $p['id']; ?>">
                    Remover
                  </a>
                </td>
             </tr>
    <?php } ?>
  </table>
</div>



  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

<?php require_once 'footer.php' ?>
</body>

</html>

<!-- Confirmar Exclusão-->
  <div class="modal fade" id="apagarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tem certeza que seja sair?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Selecione "Sair" abaixo para você terminar sua sessão atual</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="<?= APP_PATH ?>/login.php?acao=logout"">Sair</a>
        </div>
      </div>
    </div>
  </div>
<!-- Confirmar Exclusão-->