<?php
  class jogador{
    
  public $nome;
  
  

  public function __construct($nome){
    $this->movimentos = 0;
    $this->nome = $nome;
    echo("Seja Bem-vindo ".$nome."\n\n");

  }
 
  public function encher($jarro){
    $jarro->qnt_agua = $jarro->tamanho;

      echo("\nEnchendo o ".$jarro->nome."...\n\n");
     
  }
  public function esvaziar($jarro){
    $jarro->qnt_agua = 0;
    echo("\nEsvaziando o ".$jarro->nome."...\n\n");
  }
  
  public function trocar($jarro1, $jarro2){
    if ($jarro1->qnt_agua>0){

      if($jarro2->tamanho-$jarro2->qnt_agua>=$jarro1->qnt_agua){
        
          $jarro2->qnt_agua=($jarro2->qnt_agua+$jarro1->qnt_agua);
          $jarro1->qnt_agua=0;
          
          echo("Passando água de ".$jarro1->nome. " para o ".$jarro2->nome."....\n\n");

      }else{
          $resto1 = $jarro1->qnt_agua -($jarro2->tamanho-$jarro2->qnt_agua);
          $jarro1->qnt_agua=$resto1;
          $jarro2->qnt_agua=$jarro2->tamanho;
          
          echo("Passando água de ".$jarro1->nome. " para o ".$jarro2->nome."....\n\n");


      }
    }
  }

  public function status($jarro1,$jarro2){
    echo($jarro1->nome." = ".$jarro1->qnt_agua."\n"
     .$jarro2->nome." = ".$jarro2->qnt_agua."\n\n");
  }
    

}
?>
  