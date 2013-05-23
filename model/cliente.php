<?php
class Cliente extends Base {

	public function insertCliente($post){
		try{
				$this->conexao();
				$campos = array_keys($post);
				var_dump($post);
				echo"<br/>";
			    var_dump($campos);
				echo $sql="insert into cliente (".implode(",",$campos).") values ('".implode("','",$post)."')";
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
	
	public function logar($post){
		try{
				$this->conexao();
				 $sql="select *  from cliente where senha = '".$post["senha"]."' and email='".$post["email"]."'";
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