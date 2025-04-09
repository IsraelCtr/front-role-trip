<?php
  namespace ESTOQUE\src\model;
  require_once 'produto.php';
  class Ferramenta extends Produto
  {
      public function __construct(
          string $nome,
          bool $eletrica,
          string $marca,
          float $valor,
          int $unidade
      ) {
          // Chama o construtor da classe pai
          parent::__construct($nome, $eletrica, $marca, $valor, $unidade);
      }
  // Você pode adicionar métodos específicos para a classe Ferramenta aqui
  
    }