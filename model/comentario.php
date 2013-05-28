<?php
class Comentario extends Base {

	public function insertComentario($post){
		try{
				$this->conexao();
				$post['status_2'] = 0;
				$campos = array_keys($post);
				$sql="insert into Comentario (".implode(",",$campos).") values ('".implode("','",$post)."')";
				mysql_query($sql);
				die;
				echo mysql_error();
				return true;
		}catch(Exception $e){
				//print $e->getMessage();
				echo mysql_error();
				return false;
		}
	}

}
?>