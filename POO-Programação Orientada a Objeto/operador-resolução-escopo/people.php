<?php 
require_once 'documentos.php';



class Pessoa extends Documentos{ 

    public function __construct(protected $nome, protected $cpf)//METODO CONSTRUTOR
    {
        $this->nome = $nome;
        $this->cpf = Documentos::validaCpf($cpf); //coloca então o operador de escopo para verificar se foi informado o cpf corretamente.  

        echo Documentos::MASCARA;
    }

    public function getNome(){ //get pega, recebe o nome
        return $this->nome; //ele retorna
    }

    //alterar o nome
    public function setNome($novo_nome){ //set altera esse nome
        $this->nome = $novo_nome;
        
    }





}