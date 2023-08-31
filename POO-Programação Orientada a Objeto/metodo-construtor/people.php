<?php 
require_once 'documentos.php';

//METODO CONSTRUTOR

class Pessoa extends Documentos{ 

    public function __construct(protected $nome, protected $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getNome(){ //get pega, recebe o nome
        return $this->nome; //ele retorna
    }

    //alterar o nome
    public function setNome($novo_nome){ //set altera esse nome
        $this->nome = $novo_nome;
        ;
    }





}