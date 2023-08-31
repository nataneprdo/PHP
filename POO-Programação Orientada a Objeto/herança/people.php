<?php 
require_once 'documentos.php';
//herança: para uma classe consiga herdar uma caracteristica de outra: altera a declaração dela. Precisa extender caracteristicas


class Pessoa extends Documentos{ //CLASSE PESSOA ESTÁ HERDENDO AS CARACTERISTICAS DA CLASSE DOCUMENTOS
    //declara a classe Pessoa com uma descrição genérica de uma pessoa

    //protected $nome = '';



    //ler o nome: vai ver o nome que foi declarado e vai fazer a alteração
    public function getNome(){ //get pega, recebe o nome
        return $this->nome; //ele retorna
    }

    //alterar o nome
    public function setNome($novo_nome){ //set altera esse nome
        $this->nome = $novo_nome;
        //echo 'Descreva o CPF da seguinte forma: '.$this->mascara;
    }





}