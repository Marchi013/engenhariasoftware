<?php
    session_start();
    if(!isset($_SESSION['autenticado'])){
      header('location: login.php');
    }
?>
<?php require_once('header.php'); ?>

<a class="btn btn-info" href="controladorPessoa.php?acao=novo">
    <i class="glyphicon glyphicon-plus"></i> Adicionar</a>


<?php require_once('footer.php'); ?>
