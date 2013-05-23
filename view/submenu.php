 <hr class="hidden" />
    <!-- #right part of web - submenu boxes with simple text -->
	<span id="alertLogin" style="color:red;"></span>
    <?php if(empty($_SESSION)):@session_start();endif;
	if(!empty($_SESSION['logadoAssociado']) ||  !empty($_SESSION['logadoCliente'])){?>
	<div id="menuBlock">
      <div class="box boxText firstBox">
        <h3>Sua conta:</h3>
        <div class="img"><img src="../public/img/profile.jpg" width="56" alt="" /></div>
        <div class="self">
          <p class="last"><?php echo $_SESSION['nomeLogado'];?><br />E-mail:&nbsp; <?php echo $_SESSION['emailLogado'];?></p>
        </div>
      </div>
      <div class="box subMenu">
        <h3>Sub Menu:</h3>
        <ul>
          <li><a href="#">Meus Consertos</a></li>
		 <?php if(!empty($_SESSION['logadoCliente'])):?>
			<li><a href="#">Meus Comentarios</a></li>
		<?php endif; ?>
          <li><a href="javascript:sair('<?php echo $urlBase;?>sair.php');">Sair</a></li>
        </ul>
      </div>
    </div>
	<?php }else{?>
	<div id="menuBlock">
      <div class="box subMenu">
        <h3>LOGIN:</h3>
			<form id="frLogar" method="post" name="frLogar" enctype="multipart/form-data" action="#" >
				  <!-- inicio Fieldset -->
				  <fieldset class="fieldcadastro">
				  <label class="label"> E-mail: </label><br/>
				  <input type="text" class="inputCadastro" name="email_login" id="email_login" /><br/>
				  <label class="label"> Senha: </label><br/>
				  <input type="password" class="inputCadastro"  name="senha_login" id="senha_login" /><br />
				  <div class="fr" id="botoes">
						  <input type="button" name="op" onclick="validaSubmitLogin()" value="Logar" />
						  <input type="reset" value="Cancelar" />
				  </div>
			</form>
      </div>
    </div>
<?php } ?>