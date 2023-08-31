<?php 

class Pessoa{
    // declara a classe pessoa com um descrição generica de uma pessoas
    public $nome = '';
    public $a = 'a';
    private $b = 'b';//quando há uma propriedade private nao é possivel acessar, só pode ser acessada de dentro da propria classe
    protected $c = 'c'; //só pode ser acessada de dentro da propria classe, ou seja, n é possivel alterar

    public function saudar(){
        echo 'Olá '.$this->nome.'<br>';
    }
    //para acessr uma propriedade privada ou protegida:
    public function ler_b(){
        echo $this->b;
        $this->ler_c();//lendo e acessando uma propriedade privada de dentro da classe da função abaixo:
    }

    protected function ler_c(){
        echo $this->c;

    }
    //public function ler_c(){
        //echo $this->c;
    //}
}