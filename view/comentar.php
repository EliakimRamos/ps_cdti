<?php 
$urlBase = "http://".$_SERVER["SERVER_NAME"].substr($_SERVER['REQUEST_URI'],0,strpos($_SERVER['REQUEST_URI'],"comentar.php"));
?>
<div id="contentBlock">
	
	<h2>De o seu comentário sobre o nosso clube e serviços:</h2></br>
     
	 <br/>
	 <span id="alert" style="color:red"></span>
	
			   
			   <!-- incio do Form -->
			  <form id="frComentario" method="post" name="frComentario" action="#" >
				  <!-- inicio Fieldset -->
				  <fieldset class="fieldcadastro">
						<legend>Comentário do Cliente</legend>
						<br/>
					<div>
					  <textarea id="comentario" onkeypress="limitaCaracter(this.value,this)" onblur="limitaCaracter(this.value,this)" name="comentario"></textarea><br/>
						<span id="limite" style="color:#999;margin-left:200px;"> Limite do texto e de 300 caracteres</span>
					</div>
					  
					  <div class="fr" id="botoes">
						  <input type="button" name="op" onclick="validaSubmitComentario()" value="Cadastrar" />
						  <input type="reset" value="Cancelar" />
					  </div>
					  
					</fieldset>
					<!-- fim fieldset -->
				</form>
				<!-- fim form-->
		
		
    </div>
    <!-- /#left part of web - main content -->
   <?php include_once "submenu.php";?>