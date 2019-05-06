<?php

define('USUARIO', 'root');
define('SENHA',   '');
define('BD_NOME', 'banco_teste');

Class Conexao{

    private $con;

    function __construct(){
        $this->conectar();
    }

    private function conectar(){
        try{
            $this->con = new PDO("mysql:host=localhost;dbname=".BD_NOME,
            USUARIO, SENHA);
        }catch(PDOException $e){
            echo 'Falha na COnexão: ' . $e->getMessage();
        }
    }

    public function executaQuery($sql, $dados){
        $query = $this->con->prepare($sql); //prepare do SQL
        return $query->execute($dados);
    }

    public function getLista($consulta){
        $query = $this->con->query($consulta);
        $lista = $query->fetchAll();
        return $lista;
    }

    public function getRegistro($consulta, $chave){
        $query  = $this->con->prepare($consulta);
        $result = $query->execute($chave);
        $registro = $query->fetch();
        return $registro;
    }
}
?>
