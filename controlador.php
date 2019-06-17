<?php 
        require_once 'classeConexao.php'; 
        $con = new Conexao();
       $acao = NULL;
       if( !isset($_GET['acao']) ) $acao='index';
       else $acao = $_GET['acao'];

       if($acao=='cadastrar_corretor'){
        $dados  = $_POST;
        $dados['privilegio'] = 1;
        $dados['senha'] = md5($_POST['senha']);
        $sql    =  "INSERT INTO corret(nome, email, senha, cidade, creci, telefone, privilegio) "
                 . " VALUES (:nome, :email, :senha, :cidade, :creci, :telefone, :privilegio)";
                 print_r($dados);
                 print_r($sql);
        $result = $con->executaQuery($sql, $dados);
        if($result==true)  header('location: corret.php');
        else echo "~ERRO"; 
        }

        else if($acao=='excluir_corretor'){
        $id  = $_GET['id'];
        $sql = "DELETE FROM corret WHERE id = :id";
        $dados  = array('id'=>$id);
        $result = $con->executaQuery($sql, $dados);
        if($result==true) header('location: corret.php');
        else echo "~ERRO";
    }
 else if($acao=='buscar_corretor'){
        $id     = $_GET['id'];
        $sql    = "SELECT * FROM corret WHERE id = :id";
        $chave  = array('id'=>$id);
        $corretor= $con->getRegistro($sql, $chave);

        //
        $acaoForm = "controlador.php?acao=atualizar_corretor&id=".$id;
        require_once('formCorretor.php');
    }
    else if($acao=='atualizar_corretor'){
        $corretor= $_POST;
        $corretor['privilegio'] = 1;
        $corretor['senha'] = md5($_POST['senha']);
        $sql = "UPDATE corret SET nome= :nome, email = :email, telefone = :telefone, senha = :senha, cidade = :cidade, creci = :creci, privilegio =:privilegio"
               . " WHERE id = :id";
        $result = $con->executaQuery($sql, $corretor);
        if($result==true) header('location: corret.php');
        else echo "~ERRO";
    }



       
        else if($acao=='cadastrar_cliente'){
        $dados  = $_POST;
        $sql    =  "INSERT INTO pessoa(nome, idade, telefone, interesse, obs, valor, cidade) "
                 . " VALUES(:nome, :idade, :telefone, :interesse, :obs, :valor, :cidade)";
        $result = $con->executaQuery($sql, $dados);
        if($result==true)  header('location: clientes.php');
        else echo "~ERRO";
    }

    else if($acao=='excluir_cliente'){
        $id  = $_GET['id'];
        $sql = "DELETE FROM pessoa WHERE id = :id";
        $dados  = array('id'=>$id);
        $result = $con->executaQuery($sql, $dados);
       if($result==true)  header('location: clientes.php');
        else echo "~ERRO";
     }
     
       else if($acao=='buscar_cliente'){
        $id     = $_GET['id'];
        $sql    = "SELECT * FROM pessoa WHERE id = :id";
        $chave  = array('id'=>$id);
        $pessoa = $con->getRegistro($sql, $chave);

        //
        $acaoForm = "controlador.php?acao=atualizar_cliente&id=".$id;
        require_once('formCliente.php');
    }
    else if($acao=='atualizar_cliente'){
        $pessoa = $_POST;
        $sql = "UPDATE pessoa SET nome= :nome, idade = :idade, telefone = :telefone, interesse = :interesse, obs = :obs, valor = :valor, cidade = :cidade "
               . " WHERE id = :id";
        $result = $con->executaQuery($sql, $pessoa);
        if($result==true) header('location: clientes.php');
        else echo "~ERRO";
    }

    else if($acao=='index'){
        header('index.php');
    }
     
    ?>