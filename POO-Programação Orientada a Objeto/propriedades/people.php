<?php 

//propriedades

class Pessoa{
    //declara a classe Pessoa com uma descrição genérica de uma pessoa

    private $nome = '';

    //ler o nome: vai ver o nome que foi declarado e vai fazer a alteração
    public function getNome(){ //get pega, recebe o nome
        return $this->nome; //ele retorna
    }

    //alterar o nome
    public function setNome($novo_nome){ //set altera esse nome
        $this->nome = $novo_nome;
    }





}