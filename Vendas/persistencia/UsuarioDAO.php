<?php

namespace Vendas\persistencia;

use Vendas\persistencia\AbstractDAO;

class UsuarioDAO extends AbstractDAO {

  public function __construct() {
    parent::__construct('Vendas\entidades\Usuario');
  }
}