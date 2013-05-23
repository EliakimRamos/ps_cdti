<?php
class Associado extends Base {

	public function insertAssociado($post){
		try{
				$this->conexao();
				$campos = array_keys($post);
				 $sql="insert into  assosiado (".implode(",",$campos).") values ('".implode("','",$post)."')";
				mysql_query($sql);
				echo mysql_error();
				return true;
		}catch(Exception $e){
				//print $e->getMessage();
				echo mysql_error();
				return false;
		}
	}
	public function logar($post){
		try{
				$this->conexao();
				$sql="select *  from assosiado where senha = '".$post["senha"]."' and email='".$post["email"]."' and ativo ='1'";
				$query = mysql_query($sql);
				echo mysql_error();
				$result = array();
				while($dados = mysql_fetch_assoc($query)){
					$result[] = $dados;
				}
					
					if(!empty($result)){
						return $result;
					}else{
						return false;
					}
		}catch(Exception $e){
				//print $e->getMessage();
				echo mysql_error();
				return false;
		}
	}

}
?>