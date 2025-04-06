<?
class Ferramenta{
   

    public function __construct(
      private string $nome,
      private string $marca,
      private float $valor,
      private int $unidade
    ){
        
    }
    function putFerramenta(){
      $ferramenta = new Ferramenta("","",0,0);
   
   echo "ferramenta\t";
      $ferramenta ->nome =(string) trim (fgets (STDIN) );
    echo "marca\t";
      $ferramenta -> marca = (string) trim (fgets (STDIN) );
    echo "valor\t";
      $ferramenta -> valor = (float) trim (fgets (STDIN) );
    echo "unidade\t";
      $ferramenta -> unidade = (int) trim (fgets (STDIN) );
      
     // Transforma o objeto em um array para ser convertido em JSON
     $dados = [
       "nome" => $ferramenta->nome,
       "marca" => $ferramenta->marca,
       "valor" => $ferramenta->valor,
       "unidade" => $ferramenta->unidade,
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

 return "Dados salvos no arquivo ferramenta.json com sucesso!\n";

    }
    
}