<?php
    session_start();
    if(!isset($_SESSION['autenticado'])){
      header('location: login.php');
    }
?>
<?php require_once('header.php'); ?>
<div class="container">
  <h2>Cadastro de Corretores</h2>
    <form action="<?php if(!isset($acaoForm)){
      echo 'controlador.php?acao=cadastrar_corretor'; 
    }
    else {echo $acaoForm;}

  ?>"method="POST">
    <?php if(isset($corretor)){ ?>
      <div class="form-group">
        <label for="id">Id:</label>
        <input type="text" class="form-control" id="id" readonly
         name="id" value="<?php if(isset($corretor['id'])) echo $corretor['id']; ?>" required>
      </div>
    <?php    } ?>
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" id="nome" placeholder="Informe o nome do Corretor"
       name="nome" value="<?php if(isset($corretor['nome'])) echo $corretor['nome']; ?>" required>
    </div>
     <div class="form-group">
      <label for="telefone">Telefone:</label>
      <input type="text" class="form-control" id="telefone" placeholder="Informe o telefone do Corretor" name="telefone"
         value="<?php if(isset($corretor['telefone'])) echo $corretor['telefone']; ?>" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Informe o e-mail do Corretor" name="email"
         value="<?php if(isset($corretor['email'])) echo $corretor['email']; ?>" required>
    </div>
    <div class="form-group">
      <label for="Cidade">Senha:</label>
      <input type="password" class="form-control" id="senha" placeholder="Informe uma senha para acesso" name="senha"
         value="<?php if(isset($corretor['senha'])) echo $corretor['senha']; ?>" required>
    </div>
      <div class="form-group">
      <label for="cidade">Cidade:</label>
      <input type="text" class="form-control" id="cidade" placeholder="Informe a cidade do Corretor" name="cidade"
              value="<?php if(isset($corretor['cidade'])) echo $corretor['cidade']; ?>" required>
    </div>
    <div class="form-group">
      <label for="creci">CRECI:</label>
      <input type="text" class="form-control" id="creci" placeholder="Informe CRECI do Corretor" name="creci"
              value="<?php if(isset($corretor['creci'])) echo $corretor['creci']; ?>" required>
    </div>
   

    <button type="submit" class="btn btn-info">Enviar Dados</button>
  </form>
</div>
<script type="text/javascript">$("#telefone").mask("(00) 00000-0000");</script>
<?php require_once('footer.php'); ?>

