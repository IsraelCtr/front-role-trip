<?php


require 'c:/Users/israe/OneDrive/Documentos/repositorio/PHP/src/model/ferramenta.php';
require 'c:/Users/israe/OneDrive/Documentos/repositorio/PHP/src/model/insumo.php';



function putFerramenta(){
   $ferramenta = new Ferramenta();

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

};

function postFerramenta(){
  $ferramenta = new Ferramenta;
    $ferramenta -> acrescentarFerramenta();

}

var_dump(putFerramenta ()); 
postFerramenta();
// Chama a função para gerar o arquivo JSON

