<?php 

class Pessoa{
    // declara a classe pessoa com um descrição generica de uma pessoas
    public $nome = '';
    public function saudar(){
        echo 'Olá '.$this->nome.'<br>';
    }

}


//foi declarado um varivel publica e qulquer pessoa pode alterar qualquer parte do codigo 



?>