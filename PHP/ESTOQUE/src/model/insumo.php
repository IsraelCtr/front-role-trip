<?php
class Insumo{
    public function __construct(
        private string $nome,
        private string $unidade
    ){}


 function acrescentaInsumo()
{
    $Insumo = new Insumo("", 0);
echo "material consumivel:";
$Insumo-> nome = (string) trim(fgets(STDIN));
echo "unidade(s):";
$Insumo-> unidade = (string) trim(fgets(STDIN));

$dados =[
    "nome"=> $Insumo->nome,
    "qunatidade"=>$Insumo->unidade];
;
$dados = file_put_contents( "../insumo.json", json_encode($dados, JSON_PRETTY_PRINT)) ;
return "dados salvos em insumo.json";
}};
