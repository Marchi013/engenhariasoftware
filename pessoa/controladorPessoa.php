<?php
    session_start();
    if(!isset($_SESSION['autenticado'])){
      header('location: ../login.php');
    }
    require_once '../classeConexao.php';

    $acao = NULL;

    if( !isset($_GET['acao']) ) $acao='listar';
    else $acao = $_GET['acao'];

    //instancia do objeto do tipo Conexao
    $con = new Conexao();
    // var_dump($con); exit;

    if($acao=='listar'){
        $consulta="SELECT * FROM pessoa";
        $dados = $con->getLista($consulta);
        require_once ('listaPessoa.php');
    }
    else if($acao=='excluir'){
        $id  = $_GET['id'];
        $sql = "DELETE FROM pessoa WHERE id = :id";
        $dados  = array('id'=>$id);
        $result = $con->executaQuery($sql, $dados);
        if($result==true) header('location: controladorPessoa.php');
        else echo "~ERRO";
    }
    else if($acao=='novo'){
        $acaoForm = "controladorPessoa.php?acao=cadastrar";
        require_once('formPessoa.php');
    }
    else if($acao=='cadastrar'){
        $dados  = $_POST;
        $sql    =  "INSERT INTO pessoa(nome, idade, telefone, interesse, obs, valor, cidade) "
                 . " VALUES(:nome, :idade, :telefone, :interesse, :obs, :valor, :cidade)";
        $result = $con->executaQuery($sql, $dados);
        if($result==true) header('location: controladorPessoa.php');
        else echo "~ERRO";
    }
    else if($acao=='buscar'){
        $id     = $_GET['id'];
        $sql    = "SELECT * FROM pessoa WHERE id = :id";
        $chave  = array('id'=>$id);
        $pessoa = $con->getRegistro($sql, $chave);

        //
        $acaoForm = "controladorPessoa.php?acao=atualizar&id=".$id;
        require_once('formPessoa.php');
    }
    else if($acao=='atualizar'){
        $pessoa = $_POST;
        $sql = "UPDATE pessoa SET nome= :nome, idade = :idade, telefone = :telefone, interesse = :interesse, obs = :obs, valor = :valor, cidade = :cidade "
               . " WHERE id = :id";
        $result = $con->executaQuery($sql, $pessoa);
        if($result==true) header('location: controladorPessoa.php');
        else echo "~ERRO";
    }

?>
