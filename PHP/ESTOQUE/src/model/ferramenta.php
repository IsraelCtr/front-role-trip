<?
class Ferramenta extends Produto{
   

    public function __construct(
      private string $nome,
      private string $marca,
      private float $valor,
      private int $unidade
    ){
        
    }
 
    
}