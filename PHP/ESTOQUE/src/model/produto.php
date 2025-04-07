<?php 
class Produto{
    function __construct(
        
        private string $nome,
        private string $marca,
        private float $preco,
        private int $quantidade

    )
    {}
    function putFerramenta(){
        $produto = new produto("","",0,0);
     
     echo "ferramenta\t";
        $produto ->nome =(string) trim (fgets (STDIN) );
      echo "marca\t";
        $produto -> marca = (string) trim (fgets (STDIN) );
      echo "valor\t";
        $produto -> preco = (float) trim (fgets (STDIN) );
      echo "unidade\t";
        $produto -> quantidade = (int) trim (fgets (STDIN) );
        
       // Transforma o objeto em um array para ser convertido em JSON
       $dados = [
         "nome" => $produto->nome,
         "marca" => $produto->marca,
         "valor" => $produto->preco,
         "unidade" => $produto->quantidade,
     ];
       // Converte o array para o formato JSON
       $json = json_encode($dados, JSON_PRETTY_PRINT);
     
       // Salva o JSON no arquivo ferramenta.json
       file_put_contents('../ferramenta.json', $json);
     
      return "Dados salvos no arquivo ferramenta.json com sucesso!\n";
     
     }
      function acrescentarFerramenta(): string{
          
          $dados=json_decode(file_get_contents('../ferramenta.json'),true);
  
          echo "Quantidade de ferramentas para acrescentar: ";
          $acrescentar = (int) trim(fgets(STDIN));
  
            // Atualiza apenas a chave 'unidade', mantendo os outros dados intactos
      $dados["unidade"] = ($dados["unidade"] ?? 0) + $acrescentar;
  
   
    // Salva o JSON no arquivo ferramenta.json
    file_put_contents('../ferramenta.json', json_encode($dados, JSON_PRETTY_PRINT));
  
   return print"Dados salvos no arquivo ferramenta.json com sucesso!\n";
  
      }
};