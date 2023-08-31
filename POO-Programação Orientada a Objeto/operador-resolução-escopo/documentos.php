<?php 

class Documentos{

    //private $mascara = '000.000.000-00'; //ela ficar privada faz mais sentido pois ela só precisaa ser acessada de dentro da classe.

    protected $cpf = ''; //documentos devem ser declarados como protected paaraa nao haver acesso direto
   
    const MASCARA = '000.000.000-00'; //pode utilizar uma constante no lugar da private $mascara e o numero do cpf

    public function getCpf(){
        return $this->cpf;//retorna o valor no arquivo index
    }                     //atribuindo o valor de fora  


    protected function validaCpf($cpf){ //função chamada quando for determinada a resolução de escopo
        //responsavel por validar o cpf e verificar se o valor correto foi enviado.
        if(strlen($cpf) == 14){
            return $cpf;
        }
        else{
            return 'Você digitou o seguinte CPF: '.$cpf. '<br>Esse valor é inválido. Digite o CPF da seguinte forma: '.Documentos::MASCARA.'<br>'; //portanto com a constante é só colocar no lugar de onde seria o this mascara o  DOCUMENTOS::MASCARA
        }
    }
  
    public function setCpf($cpf){ 
        //echo strlen($cpf); //serve para contar o tamanho de uma string
        $this->cpf = Documentos::validaCpf($cpf); //usa-se então o :: com o nome da classe e a função que será chamada
    }
}

//resolução de escopo define onde está determinada função 