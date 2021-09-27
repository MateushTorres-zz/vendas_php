<?php

namespace Vendas\persistencia;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use Vendas\entidades\Pedido;
use Vendas\persistencia\AbstractDAO;
use Vendas\persistencia\UsuarioDAO;

class PedidoDAO extends AbstractDAO{

    public function __construct() {
            parent::__construct('LojaAgua\entidades\Pedido');
        }
        
    
    }
    