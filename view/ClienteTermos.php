<!--inicio assosiados termos -->
<?php 
$urlBase = "http://".$_SERVER["SERVER_NAME"].substr($_SERVER['REQUEST_URI'],0,strpos($_SERVER['REQUEST_URI'],"ClienteTermos.php"));
?>
<div id="contentBlock">
	<h1 id="h1associado">O que é ser Cliente:</h1></br>
		<p class="passociado">
		No Clube do PC você encontrará profissionais especializados para atender seu chamado,
		com a vantagem de receber um técnico em sua residência com dia e hora marcada para reparar seu equipamento. 
		Basta realizar um breve cadastro, relatar seu problema e aguardar o contato da empresa para agendar o melhor dia da visita do técnico.
	</p></br>
	<h1>Como Funciona:</h1></br>
	<p class="passociado">
	1º Realizar o cadastro e criar senha.</br></br>
	2º Fazer o login com o e-mail cadastrado e senha.</br></br>
	3º Após realizar o login, ir no campo cadastro de ordem de serviço e relatar o problema.</br></br>
	4º Aguardar o contato da empresa para confirmação de alguns dados e agendar o dia e horário para a visita do técnico.

	</p>
	</br>
	</br>
</div>
<?php include_once "submenu.php";?>