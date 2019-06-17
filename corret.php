<?php
    session_start();
    if(!isset($_SESSION['autenticado'])){
      header('location: login.php');
    }
    elseif ($_SESSION['autenticado'] !== 'admin@gmail.com'){
header('location: index.php');

    }
?>
<?php   
        require_once 'header.php';
        $consulta="SELECT * FROM corret WHERE privilegio = 1";
        $dados = $con->getLista($consulta);
?>
          <!-- DataTales Example -->
        <div class="container">
 <h2>Lista De Corretores</h2>
  <a class="btn btn-info" href="formCorretor.php">
    <i class="glyphicon glyphicon-plus"></i>Adicionar</a>
  <table class="table table-striped table-hover">
    <th>Nome</th>
    <th>Telefone</th>
    <th>CRECI</th>
    <th></th>
    <th></th>
    <?php foreach($dados as $p){ ?>
             <tr>
                <td><?= $p['nome']; ?></td>
                <td><?= $p['telefone']; ?></td>
                <td><?= $p['creci']; ?></td>
                <td>
                       <a class="btn btn-info" href="controlador.php?acao=buscar_corretor&id=<?= $p['id']; ?>">
                    Editar
                  </a>
                </td>
                <td>
                  <a class="btn btn-danger" href="controlador.php?acao=excluir_corretor&id=<?= $p['id']; ?>">
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
