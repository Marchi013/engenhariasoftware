<?php require_once('../header.php'); ?>
<div class="container">
  <h2>Cadastro de Clientes</h2>
  <form action="<?php echo $acaoForm; ?>" method="POST">
    <?php if(isset($pessoa)){ ?>
      <div class="form-group">
        <label for="id">Id:</label>
        <input type="text" class="form-control" id="id" readonly
         name="id" value="<?php if(isset($pessoa['id'])) echo $pessoa['id']; ?>" required>
      </div>
    <?php    } ?>
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" id="nome" placeholder="Entre o nome"
       name="nome" value="<?php if(isset($pessoa['nome'])) echo $pessoa['nome']; ?>" required>
    </div>
    <div class="form-group">
      <label for="idade">Idade:</label>
      <input type="number" class="form-control" id="idade" placeholder="Informe Idade" name="idade" min='0' max='120'
         value="<?php if(isset($pessoa['idade'])) echo $pessoa['idade']; ?>" required>
    </div>
    <div class="form-group">
      <label for="Cidade">Cidade:</label>
      <input type="text" class="form-control" id="cidade" placeholder="Informe a cidade" name="cidade"
         value="<?php if(isset($pessoa['cidade'])) echo $pessoa['cidade']; ?>" required>
    </div>
    <div class="form-group">
      <label for="telefone">Telefone:</label>
      <input type="text" class="form-control phone-mask" id="telefone" placeholder="Informe telefone" name="telefone"
              value="<?php if(isset($pessoa['telefone'])) echo $pessoa['telefone']; ?>" required>
    </div>
      <div class="form-group">
      <label for="interesse">Interesse:</label>
      <input type="text" class="form-control" id="interesse" placeholder="Informe interesse" name="interesse"
              value="<?php if(isset($pessoa['interesse'])) echo $pessoa['interesse']; ?>" required>
    </div>
    <div class="form-group">
      <label for="obs">Obs:</label>
      <input type="text" class="form-control" id="obs" placeholder="Informe obs" name="obs"
              value="<?php if(isset($pessoa['obs'])) echo $pessoa['obs']; ?>" required>
    </div>
     <div class="form-group">
      <label for="valor">Valor:</label>
      <input type="number" class="form-control" id="valor" placeholder="Informe valor" name="valor"
              value="<?php if(isset($pessoa['valor'])) echo $pessoa['valor']; ?>" required>
    </div>

    <button type="submit" class="btn btn-default">Enviar Dados</button>
  </form>
</div>
<?php require_once('../footer.php'); ?>
