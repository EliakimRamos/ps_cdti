<?php
session_start();
require_once "../model/base.php";
require_once "../model/comentario.php";

switch($_POST['op']){

	case "cadastrar":
			$objComentario = new Comentario();
			
			if(!empty($_POST["senha"])){
				$POST["senha"] = substr(md5($_POST['senha']),0,8);
			}
			$POST['comentario'] = $objComentario->anti_injection($_POST['comentario']);
			$result = $objComentario->insertComentario($POST);
			
			if($result):
				echo "Cadastro Realizado com Sucesso";
			else:
				echo "ERRO ao se Cadastrar";
			endif;
			
			exit;
			break;
			
}