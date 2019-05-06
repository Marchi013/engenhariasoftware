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
        $consulta="SELECT * FROM corret WHERE privilegio = 1";
        $dados = $con->getLista($consulta);
        require_once ('listaCorretor.php');
    }
    else if($acao=='excluir'){
        $id  = $_GET['id'];
        $sql = "DELETE FROM corret WHERE id = :id";
        $dados  = array('id'=>$id);
        $result = $con->executaQuery($sql, $dados);
        if($result==true) header('location: controladorCorretor.php');
        else echo "~ERRO";
    }
    else if($acao=='novo'){
        $acaoForm = "controladorCorretor.php?acao=cadastrar";
        require_once('formCorretor.php');
    }
    else if($acao=='cadastrar'){
        $dados  = $_POST;
        $dados['privilegio'] = 1;
        $dados['senha'] = md5($_POST['senha']);
        $sql    =  "INSERT INTO corret(nome, email, senha, cidade, creci, telefone, privilegio) "
                 . " VALUES(:nome, :email, :senha, :cidade, :creci, :telefone, :privilegio)";
                 print_r($dados);
                 print_r($sql);
        $result = $con->executaQuery($sql, $dados);
        if($result==true) header('location: controladorCorretor.php');
        else echo "~ERRO";
    }
    else if($acao=='buscar'){
        $id     = $_GET['id'];
        $sql    = "SELECT * FROM corret WHERE id = :id";
        $chave  = array('id'=>$id);
        $corretor= $con->getRegistro($sql, $chave);

        //
        $acaoForm = "controladorCorretor.php?acao=atualizar&id=".$id;
        require_once('formCorretor.php');
    }
    else if($acao=='atualizar'){
        $corretor= $_POST;
        $corretor['privilegio'] = 1;
        $corretor['senha'] = md5($_POST['senha']);
        $sql = "UPDATE corret SET nome= :nome, email = :email, telefone = :telefone, senha = :senha, cidade = :cidade, creci = :creci, privilegio =:privilegio"
               . " WHERE id = :id";
        $result = $con->executaQuery($sql, $corretor);
        if($result==true) header('location: controladorCorretor.php');
        else echo "~ERRO";
    }

?>
