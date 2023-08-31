<?php 

class Documentos{

    private $mascara = '000.000.000-00'; //elaa ficar privada faz mais sentido pois ela só precisaa ser acessada de dentro da classe.

    protected $cpf = ''; //documentos devem ser declarados como protected paaraa nao haver acesso direto
   
    public function getCpf(){
        return $this->cpf;//retorna o valor no arquivo index
    }                     //atribuindo o valor de fora
    public function setCpf($cpf){ 
        //echo strlen($cpf); //serve para contar o tamanho de uma string
        if(strlen($cpf) == 14){
            $this->cpf = $cpf; //alterando pro valor de cpf 
        }
        else{
            echo 'Você digitou o seguinte CPF: '.$cpf. '<br>Esse valor é inválido. Digite o CPF da seguinte forma: '.$this->mascara.'<br>'; //aparece essa mensagem caso o cpf sejaaa digitado errado (aarquivo index onde fica $pessoa1->setCpf('000.000.000-0'))
        }
        
    }
}