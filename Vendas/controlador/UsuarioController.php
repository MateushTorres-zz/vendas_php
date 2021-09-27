<?php

namespace Vendas\controlador;

use Vendas\persistencia\UsuarioDAO;
use Vendas\entidades\Usuario;
use Vendas\controlador\AbstractController;

class UsuarioController extends AbstractController {

	public function __construct() {
    parent::__construct(new UsuarioDAO ());
	}


	public function insert($json){
    $user = new Usuario($json->id,$json->email,$json->senha,$json->endereco);
    $this->getDao ()->insert ( $user );
    return ["mensagem"=>"Usuario inserido com sucesso"];
	}
	
	public function update($id, $json){
		
	}
	public function delete($id){
		
	}
}