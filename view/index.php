<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Clube do PC</title>
<link rel="stylesheet" type="text/css" href="../public/css/default.css" media="screen" />
<link rel="stylesheet" type="text/css" href="../public/css/print.css" media="print" />
<script src="../public/js/funcoes.js" type="text/javascript" language="javascript" ></script>
</head>
<?php 
$urlBase = "http://".$_SERVER["SERVER_NAME"].$_SERVER['REQUEST_URI'];
?>
<body onload="pagina('<?php echo $urlBase;?>home.php')">

<div id="view">
  <!-- #header (main heading + logo with slogan) -->
  <div id="head">
    <!-- main headings with search component -->
    <div id="main">
      <h1><a href="javascript:pagina('<?php echo $urlBase;?>home.php');">Clube do PC</a></h1>
      <h2><a href="javascript:pagina('<?php echo $urlBase;?>home.php');">Encontre o melhor do conserto em Computadores</a></h2>
      
    </div>
    <!-- /main headings with search component -->
    <hr class="hidden" />
    <!-- main horizontal menu -->
    <div id="mainMenu">
      <ul>
        <li><a href="javascript:pagina('<?php echo $urlBase;?>cad_cliente.php');">Cadastre-se<span></span></a></li>
        <?php if(!empty($_SESSION['logadoCliente'])){?>
			<li><a href="javascript:pagina('<?php echo $urlBase;?>os.php');">Cadastrar Ordem de Serviço<span></span></a></li>
		<?php } ?>
        <li><a href="javascript:pagina('<?php echo $urlBase;?>ClienteTermos.php');">Clientes<span></span></a></li>
        <li><a href="javascript:pagina('<?php echo $urlBase;?>AssosiadoTermos.php');">Associados<span></span></a></li>
        <li class="fr"><a href="#">Termos<span></span></a></li>
      </ul>
    </div>
    <!-- /main horizontal menu -->
    <hr class="hidden" />
	  <!-- logo with slogan -->
		<div id="logo">
		  <a href="" class="block">&nbsp;</a>
		</div>
		<!-- /logo with slogan -->
		<hr class="hidden" />
	  </div>
	  <!-- /#header (main heading + logo with slogan) -->
    
  <!-- #main content construct -->
  <div id="content">
    
  </div>
  <!-- /#main content construct -->
  
  <!-- #accessible components - do not delete this !!! -->
  <hr class="hidden" />
  <ul class="hidden">
    <li><a href="#view">On top</a></li>
    <li><a href="#content">Back to content</a></li>
  </ul>
  <hr class="hidden" />
 
  <!-- #footer -->
  <div id="foot">
  </div>
  <!-- /#footer -->
</div>

</body>
</html>
    
  
 