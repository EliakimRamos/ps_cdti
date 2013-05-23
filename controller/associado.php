<?php
session_start();
require_once "../model/base.php";
require_once "../model/associado.php";
require_once '../model/ClassUpload.php';

switch($_POST['op']){

	case "cadastrar":
			$objAssociado = new Associado();
			$handle = new Upload();
			$tipos[0] = ".doc";
			$tipos[1] = ".docx";
			$tipos[2] = ".pdf";
			$tipos[3] = ".odt";
			if(!empty($_FILES['arquivo'])){
							 $up = $handle->UploadArquivo($_FILES['arquivo'],"../curriculos/",$tipos);
							if(!$up){
								echo "ERROR - ".$handle->error;
								exit;
							}else{							
								$POST['arquivo'] = date("dmYHis")."_".$_FILES['arquivo']["name"];
							}
						}	
			if(!empty($_POST["senha"])){
				$POST["senha"] = substr(md5($_POST['senha']),0,8);
			}
			$POST['nome'] = $objAssociado->anti_injection($_POST['nome']);
			$POST['numero'] = $objAssociado->anti_injection($_POST['numero']);
			$POST['complemento'] = $objAssociado->anti_injection($_POST['complemento']);
			$POST['telefone'] = $objAssociado->anti_injection($_POST['telefone']);
			$POST['email'] = $objAssociado->anti_injection($_POST['email']);
			$POST['endereco'] = $objAssociado->anti_injection($_POST['endereco']);
			$POST['bairro'] = $objAssociado->anti_injection($_POST['bairro']);
			$POST['cep'] = $objAssociado->anti_injection($_POST['cep']);
			$POST['celular'] = $objAssociado->anti_injection($_POST['celular']);
			$POST['cidade'] = $objAssociado->anti_injection($_POST['cidade']);
			$POST['estado'] = $objAssociado->anti_injection($_POST['estado']);
			$POST['datanasc'] = $objAssociado->anti_injection($_POST['datanascimento']);
			$POST['cpf'] = $objAssociado->anti_injection($_POST['cpf']);
			
			$result = $objAssociado->insertAssociado($POST);
			
			if($result):
				echo "Cadastro Realizado com Sucesso";
			else:
				echo "ERRO ao se Cadastrar";
			endif;
			
			exit;
			break;
			
}