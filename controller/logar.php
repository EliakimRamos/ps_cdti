<?php
session_start();
require_once "../model/base.php";
require_once "../model/associado.php";
require_once '../model/ClassUpload.php';
require_once "../model/cliente.php";

switch($_POST['op']){

	case "Logar":
			$objAssociado = new Associado();
			$objCliente = new Cliente();
			if(!empty($_POST["senha"])){
				$POST["senha"] = substr(md5($_POST['senha']),0,8);
			}
			$POST['email'] = $objAssociado->anti_injection($_POST['email']);
			$result = $objAssociado->logar($POST);
			
			if(empty($result)){
				$result2 = $objCliente->logar($POST);
				
				if(empty($result2)){
						echo "Login inválido";
					}else{
						$_SESSION['logadoCliente'] = true;
						$_SESSION['nomeLogado'] = $result2[0]['nome'];
						$_SESSION['emailLogado'] = $result2[0]['email'];
						echo"ok";
					}
			}else{
				$_SESSION['logadoAssociado'] = true;
				$_SESSION['nomeLogado'] = $result[0]['nome'];
				$_SESSION['emailLogado'] = $result[0]['email'];
				echo"ok";
			}
				
			exit;
			break;
			
}