<?php
    session_start();
    if(!isset($_SESSION['autenticado'])){
      header('location: login.php');
    }
?>
<?php require_once('header.php'); ?>

<div class="container">
  <h2>Cadastro de Clientes</h2>
  <form action="<?php if(!isset($acaoForm)){
      echo 'controlador.php?acao=cadastrar_cliente'; 
    }
    else {echo $acaoForm;}

  ?>"method="POST">
    <?php if(isset($pessoa)){ ?>
      <div class="form-group">
        <label for="id">Id:</label>
        <input type="text" class="form-control" id="id" readonly
         name="id" value="<?php if(isset($pessoa['id'])) echo $pessoa['id']; ?>" required>
      </div>
    <?php    } ?>
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" id="nome" placeholder="Informe o nome do cliente"
       name="nome" value="<?php if(isset($pessoa['nome'])) echo $pessoa['nome']; ?>" required>
    </div>
    <div class="form-group">
      <label for="idade">Idade:</label>
      <input type="number" class="form-control" id="idade" placeholder="30" name="idade" min='18' max='90'
         value="<?php if(isset($pessoa['idade'])) echo $pessoa['idade']; ?>" required>
    </div>
    <div class="form-group">
      <label for="Cidade">Cidade:</label>
      <input type="text" class="form-control" id="cidade" placeholder="Passo Fundo" name="cidade"
         value="<?php if(isset($pessoa['cidade'])) echo $pessoa['cidade']; ?>" required>
    </div>
    <div class="form-group">
      <label for="telefone">Telefone:</label>
      <input type="tel" class="form-control" id="telefone" placeholder="(54) 9 9999-9999" name="telefone"
              value="<?php if(isset($pessoa['telefone'])) echo $pessoa['telefone']; ?>" required>
    </div>
      <div class="form-group">
      <label for="interesse">Interesse:</label>
      <input type="text" class="form-control" id="interesse" placeholder="Casa, apartamento, sala comercial.." name="interesse"
              value="<?php if(isset($pessoa['interesse'])) echo $pessoa['interesse']; ?>" required>
    </div>
    <div class="form-group">
      <label for="obs">Obs:</label>
      <input type="text" class="form-control" id="obs" placeholder="Informe alguma observação" name="obs"
              value="<?php if(isset($pessoa['obs'])) echo $pessoa['obs']; ?>" required>
    </div>
     <div class="form-group">
      <label for="valor">Valor:</label>
      <input type="text"  class="form-control" id="valor" placeholder="Valor do imóvel" name="valor"
              value="<?php if(isset($pessoa['valor'])) echo $pessoa['valor']; ?>" required>
    </div>

    <button type="submit" class="btn btn-info">Enviar Dados</button>
  </form>
</div>
<script type="text/javascript">$("#telefone").mask("(00) 00000-0000");</script>
<script type="text/javascript">$("#valor").mask("000.000,00");</script>
<?php require_once('footer.php'); ?>
