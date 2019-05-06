
?> 

<?php require_once('../header.php'); ?>
<div class="container">
  <h2>Lista De Corretores</h2>
  <a class="btn btn-info" href="controladorCorretor.php?acao=novo">
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
                  <a class="btn btn-info" href="controladorCorretor.php?acao=buscar&id=<?= $p['id']; ?>">
                    <i class="glyphicon glyphicon-pencil"></i>
                  </a>
                </td>
                <td>
                  <a class="btn btn-danger" href="controladorCorretor.php?acao=excluir&id=<?= $p['id']; ?>">
                    <i class="glyphicon glyphicon-remove"></i>
                  </a>
                </td>
             </tr>
    <?php } ?>
  </table>
</div>
<?php require_once('../footer.php'); ?>

<?php 