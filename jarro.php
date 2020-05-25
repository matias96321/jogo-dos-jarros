<?php

class jarro{

public $nome;
public $tamanho;
public $qnt_agua;


public function __construct($nome,$tamanho){

    $this->nome = $nome;
    $this->qnt_agua = 0;
    $this->tamanho = $tamanho;
    echo("O ".$nome." foi criado e ".$tamanho." de tamanho \n\n");

}

public function status(){

    echo($this->nome." = ".$this->qnt_agua."\n");
    echo("");
    
    } 

}
?>