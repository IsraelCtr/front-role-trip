<?php

// index.php

use ESTOQUE\src\Model\Ferramenta;

require 'c:/Users/israe/OneDrive/Documentos/repositorio/PHP/ESTOQUE/src/model/ferramenta.php';
// Início do arquivo PHP
$ferramenta = new Ferramenta('', '','', 0, 0);
echo "Bem-vindo ao sistema de estoque!\n";

// Funções




// Menu
do {
    echo "\nMenu:\n";
    echo "1. Acrescentar algo ao estoque\n";
    echo "2. Postar ferramenta\n";
    echo "3. Sair\n";
    echo "Escolha uma opção: ";
    
    $opcao = trim(fgets(STDIN)); // Lê a entrada do usuário

    switch ($opcao) {
        case 1:
            $ferramenta->putFerramenta();
            break;
        case 2:
            $ferramenta->acrescentarFerramenta();
            break;
        case 3:
            echo "Saindo do sistema...\n";
            break;
        default:
            echo "Opção inválida. Tente novamente.\n";
    }
} while ($opcao != 3);

?>