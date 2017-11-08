<?php

require_once "../conexao/Conexao.php";

class Produto{

    private $codigo;
    private $titulo;
    private $preco;
    private $categoria;
    private $conexao;

    public function __construct($titulo, $preco, $categoria){

        $this->$titulo = $titulo;
        $this->$preco = $preco;
        $this->$categoria = $categoria;

        //Usar a classe Conexao já criada
        $this->conexao = new Conexao();
    }

    public function cadastrarProduto(){
        $sql = "INSERT INTO tb_produtos (titulo, preco, categoria) VALUES ()"
    }
}