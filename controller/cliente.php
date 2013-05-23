<?php
session_start();
require_once "../model/base.php";
require_once "../model/cliente.php";

switch($_POST['op']){

	case "cadastrar":
			$objCliente = new Cliente();
			
			if(!empty($_POST["senha"])){
				$POST["senha"] = substr(md5($_POST['senha']),0,8);
			}
			$POST['nome'] = $objCliente->anti_injection($_POST['nome']);
			$POST['numero'] = $objCliente->anti_injection($_POST['numero']);
			$POST['complemento'] = $objCliente->anti_injection($_POST['complemento']);
			$POST['telefone'] = $objCliente->anti_injection($_POST['telefone']);
			$POST['email'] = $objCliente->anti_injection($_POST['email']);
			$POST['endereco'] = $objCliente->anti_injection($_POST['endereco']);
			$POST['bairro'] = $objCliente->anti_injection($_POST['bairro']);
			$POST['cep'] = $objCliente->anti_injection($_POST['cep']);
			$POST['celular'] = $objCliente->anti_injection($_POST['celular']);
			$POST['cidade'] = $objCliente->anti_injection($_POST['cidade']);
			$POST['estado'] = $objCliente->anti_injection($_POST['estado']);
			
			$result = $objCliente->insertCliente($POST);
			
			if($result):
				echo "Cadastro Realizado com Sucesso";
			else:
				echo "ERRO ao se Cadastrar";
			endif;
			
			exit;
			break;
			
}