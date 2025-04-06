<?
class Ferramenta{
   

    public function __construct(
      private string $nome,
      private string $marca,
      private float $valor,
      private int $unidade
    ){
        
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