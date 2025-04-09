<?php


require 'c:/Users/israe/OneDrive/Documentos/repositorio/PHP/ESTOQUE/src/model/ferramenta.php';
require 'c:/Users/israe/OneDrive/Documentos/repositorio/PHP/ESTOQUE/src/model/insumo.php';
//instancia a classe ferramenta.
$ferramenta =new Ferramenta('','','','',0,);

//chama a classse pu ferramenta.

$ferramenta->putFerramenta (); 

//chama a classe que atualiza o numero de uma certa ferrramenta no estoque.

$ferramenta -> acrescentarFerramenta();


