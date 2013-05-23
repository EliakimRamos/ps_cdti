<?php 
$urlBase = "http://".$_SERVER["SERVER_NAME"].substr($_SERVER['REQUEST_URI'],0,strpos($_SERVER['REQUEST_URI'],"cad_cliente.php"));
?>
<div id="contentBlock">
	
	<h2>Selecione o cadastro:</h2></br>
     <select id="selectC" onchange="mudaform(this.value);">
				<option value="0">Selecione</option>
				<option value="1">Cliente</option>
				<option value="2">Associado</option>
	 </select>
	 <br/>
	 <span id="alert" style="color:red"></span>
	 <div id="formCliente" style="display:none;">
			   
			   <!-- incio do Form -->
			  <form id="frCliente" method="post" name="frCliente" action="#" >
				  <!-- inicio Fieldset -->
				  <fieldset class="fieldcadastro">
						<legend>Cadastro do Cliente</legend>
						<br/>
					 <!-- #cols 50:50 -->
					  <div class="col1">
						<label class="label"> Nome: </label><br/>
						<input type="text" class="inputCadastro" name="nome" id="nome" /><br/>
						<label class="label"> Número: </label><br/>
						<input type="text" class="inputCadastro" name="numero" id="numero" /><br/>
						<label class="label"> Cidade: </label><br/>
						<input type="text" class="inputCadastro" name="cidade" id="cidade" /><br/>
						<label class="label"> Complento: </label><br/>
						<input type="text" class="inputCadastro" name="complemento" id="complemento" /><br/>
						<label class="label"> Telefone: </label><br/>
						<input type="text" class="inputCadastro" onkeypress="Telefone(this.value,this)" maxlength="14" name="telefone" id="telefone" />
						<br/>
						<label class="label"> E-mail: </label><br/>
						<input type="text" class="inputCadastro" onblur="ValidaEmail(this)" name="Email" id="email" /><br />
					  </div>
					  <div class="col2">
					  <label class="label"> Endereço: </label><br/>
						<input type="text" class="inputCadastro" name="endereco" id="endereco" /><br/>
						<label class="label"> Bairro: </label><br/>
						<input type="text" class="inputCadastro" name="bairro" id="bairro" /><br/>
						<label class="label"> Estado: </label><br/>
						<input type="text" class="inputCadastro" name="estado" id="estado" /><br/>
						<label class="label"> CEP: </label><br/>
						<input type="text" class="inputCadastro" onkeypress="Cep(this.value,this);" maxlength="9" name="cep" id="cep" /><br/>
						<label class="label"> Celular: </label><br/>
						<input type="text" class="inputCadastro" name="celular" onkeypress="Telefone(this.value,this)" maxlength="14" id="celular" /><br/>
						<label class="label"> Senha: </label><br/>
						<input type="password" class="inputCadastro" name="senha" id="senha" /><br />
						
					  </div>
					  <!-- /#cols 50:50 -->
					  <div class="fr" id="botoes">
						  <input type="button" name="op" onclick="validaSubmitCliente()" value="Cadastrar" />
						  <input type="reset" value="Cancelar" />
					  </div>
					  
					</fieldset>
					<!-- fim fieldset -->
				</form>
				<!-- fim form-->
		</div>
		<div id="formAssociado" style="display:none;">
			   <!-- incio do Form -->
			  <form id="frAssociado" method="post" name="frAssociado" enctype="multipart/form-data" action="#" >
				  <!-- inicio Fieldset -->
				  <fieldset class="fieldcadastro">
						<legend>Cadastro do Associado</legend>
						<br/>
					 <!-- #cols 50:50 -->
					  <div class="col1">
						<label class="label"> Nome: </label><br/>
						<input type="text" class="inputCadastro" name="nome" id="nome" /><br/>
						<label class="label"> Número: </label><br/>
						<input type="text" class="inputCadastro" name="numero" id="numero" /><br/>
						<label class="label"> Cidade: </label><br/>
						<input type="text" class="inputCadastro" name="cidade" id="cidade" /><br/>
						<label class="label"> Complento: </label><br/>
						<input type="text" class="inputCadastro" name="complemento" id="complemento" /><br/>
						<label class="label"> Telefone: </label><br/>
						<input type="text" class="inputCadastro" name="telefone" onkeypress="Telefone(this.value,this)" maxlength="14" id="telefone" /><br/>
						<label class="label"> E-mail: </label><br/>
						<input type="text" class="inputCadastro" onblur="ValidaEmail(this)" name="Email" id="email" /><br />
						<label class="label"> Data de nascimento: </label><br/>
						<input type="text" class="inputCadastro" name="datanascimento" maxlength="10" id="datanascimento" /><br />
						<label class="label"> Curriculo: </label><br/>
						<input type="file" class="inputCadastro" name="arquivo" id="arquivo" /><br />
					  </div>
					  <div class="col2">
					  <label class="label"> Endereço: </label><br/>
						<input type="text" class="inputCadastro" name="endereco" id="endereco" /><br/>
						<label class="label"> Bairro: </label><br/>
						<input type="text" class="inputCadastro" name="bairro" id="bairro" /><br/>
						<label class="label"> Estado: </label><br/>
						<input type="text" class="inputCadastro" name="estado" id="estado" /><br/>
						<label class="label"> CEP: </label><br/>
						<input type="text" class="inputCadastro" onkeypress="Cep(this.value,this);" maxlength="9" name="cep" id="cep" /><br/>
						<label class="label"> Celular: </label><br/>
						<input type="text" class="inputCadastro" name="celular" onkeypress="Telefone(this.value,this)" maxlength="14" id="celular" /><br/>
						<label class="label"> Senha: </label><br/>
						<input type="password" class="inputCadastro"  name="senha" id="senha" /><br />
						<label class="label"> CPF: </label><br/>
						<input type="text" class="inputCadastro" onblur="ECpf(this.value)" onkeypress="Cpf(this.value,this)" maxlength="14" name="cpf" id="cpf" /><br/>
					 
						
						
					  </div>
					  <!-- /#cols 50:50 -->
					  <div class="fr" id="botoes">
						  <input type="button" name="op" onclick="validaSubmitAssociado()" value="Cadastrar" />
						  <input type="reset" value="Cancelar" />
					  </div>
					  
					</fieldset>
					<!-- fim fieldset -->
				</form>
				<!-- fim form-->
		</div>
    </div>
    <!-- /#left part of web - main content -->
   <?php include_once "submenu.php";?>