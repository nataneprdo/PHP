<?php 

//Programação Orientada a Objetos

//classes - algo generalizado sobre uma coisa
class NomeDaClasse{
    // visibilidade - public, private e protected
    //propriedades - é uma variavel declarada dentro dessa classe;
    
    public $propriedade = '';

    //métodos - o método é uma função;
    public function metodo(){
        echo $this->propriedade; //quando for utilizado uma variaavel que está dentro de uma classe, deve ser colocado o $THIS antes, para fazer referencia a ela. 
    }

}
//objeto - algo especifico da classe, é como se fosse um exemplo da classe
$objeto = new NomeDaClasse(); // NEW é utilizado para instaanciar uma classe

//Ou seja, descrição generica do que é os principios de orientação ao objeto
//toda vez que for declarada uma propriedade e um metodo, é necessario atribuir a ela a sua visibilidade.


 