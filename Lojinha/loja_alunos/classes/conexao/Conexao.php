<?php

/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 08/11/17
 * Time: 10:33
 */

require_once "../../config/config.php";

class Conexao{

    public function getConexao(){

        try{
        $conexao = new PDO("mysql:host=".HOST.";dbname=".BANCO, USUARIO, SENHA);
    }catch (Exception $e) {
            echo "ERROR, STOP: {$e->getMessage()} na linha {$e->getLine()}";
        }
    }
}

$conexao = new Conexao();
$conexao->getConexao();