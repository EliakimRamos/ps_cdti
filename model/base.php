<?php
class Base {

public function conexao(){
	try{
		$con = mysql_connect("localhost","root","")or die(mysql_error());
		if($con){
			mysql_select_db("projetosite",$con);
		}else{
			echo mysql_error();
			die;
		}
	}catch(Exception $e){
		echo $e->getMessage();
	}
}

public function date_transform($data,$today = false,$separador="/"){
		$dataBr = '/^(0[1-9]|[1-2][0-9]|3[0-1])[\/](0[1-9]|1[0-2])[\/](19|20)[0-9]{2}$/';
		$dataSql = '/^(19|20)[0-9]{2}[\-](0[1-9]|1[0-2])[\-](0[1-9]|[1-2][0-9]|3[0-1])$/';
		if(preg_match($dataSql,$data,$retorno)){
			$date = explode('-', $retorno[0]);
			if($separador == ""){
				$date_transform = $date[2].'/'.$date[1].'/'.$date[0];
			}else{
				$date_transform = $date[2].$separador.$date[1].$separador.$date[0];
			}
			return $date_transform;
		}else if(preg_match($dataBr,$data,$retorno)){
			$date = explode('/', $retorno[0]);
			$date_transform = $date[2].'-'.$date[1].'-'.$date[0];
			return $date_transform;
		}elseif($data == "" && $today == true){
			return date("d/m/Y");
		}else{
			return $data;
		}
	}
	
	public function anti_injection($sql)
	{
	    // remove palavras que contenham sintaxe sql
	    $sql = @preg_replace(sql_regcase("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/"),"",$sql);
	    $sql = trim($sql);//limpa espa�os vazio
	    $sql = strip_tags($sql);//tira tags html e php
	    $sql = addslashes($sql);//Adiciona barras invertidas a uma string
	    return $sql;
	}

}
?>
