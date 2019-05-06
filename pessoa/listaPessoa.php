
?> 

<?php require_once('../header.php'); ?>
<div class="container">
  <h2>Lista De Clientes</h2>
  <a class="btn btn-info" href="controladorPessoa.php?acao=novo">
    <i class="glyphicon glyphicon-plus"></i> Adicionar</a>
  <table class="table table-striped table-hover">
    <th>Nome</th>
    <th>Idade</th>
   <th>Cidade</th>
    <th>Telefone</th>
    <th>Interesse</th>
    <th>Obs</th>
    <th>Valor</th>
    <th></th>
    <th></th>
    <?php foreach($dados as $p){ ?>
             <tr>
                <td><?= $p['nome']; ?></td>
                <td><?= $p['idade']; ?></td>
                <td><?= $p['cidade']; ?></td>
                <td><?= $p['telefone']; ?></td>
                <td><?= $p['interesse']; ?></td>
                <td><?= $p['obs']; ?></td>
                <td><?= Mask($p['valor'],'###.###'); ?></td>
                <td>
                  <a class="btn btn-info" href="controladorPessoa.php?acao=buscar&id=<?= $p['id']; ?>">
                    <i class="glyphicon glyphicon-pencil"></i>
                  </a>
                </td>
                <td>
                  <a class="btn btn-danger" href="controladorPessoa.php?acao=excluir&id=<?= $p['id']; ?>">
                    <i class="glyphicon glyphicon-remove"></i>
                  </a>
                </td>
             </tr>
    <?php } ?>
  </table>
</div>
<?php require_once('../footer.php'); ?>

<?php 


function mask($val, $mask)
{
 $maskared = '';
 $k = 0;
 for($i = 0; $i<=strlen($mask)-1; $i++)
 {
 if($mask[$i] == '#')
 {
 if(isset($val[$k]))
 $maskared .= $val[$k++];
 }
 else
 {
 if(isset($mask[$i]))
 $maskared .= $mask[$i];
 }
 }
 return $maskared;
}

?>