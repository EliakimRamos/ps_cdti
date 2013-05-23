<!-- #left part of web - main content -->
<?php 
$urlBase = "http://".$_SERVER["SERVER_NAME"].substr($_SERVER['REQUEST_URI'],0,strpos($_SERVER['REQUEST_URI'],"home.php"));
?>
    <div id="contentBlock">
      <!-- #first (main) article -->
      <div class="item mainItem">
        <h2>Sobre</h2>
        <p class="perex">O Clube do PC surgiu para atender os usúarios que necessitam do serviço de manutenção e não dispõe de tempo para se deslocar até uma assistência técnica.
		Aqui você irá encontrar um serviço de qualidade com a comodidade de ter um profissional especializado para reparar o seu equipamento em sua residência.</br></br>
		Atendemos serviços para: computadores, monitores, notebooks, netbooks e impressoras.</p>
      </div>
	  <div class="item itemOdd">
          <h3>Relatos dos clientes</h3>
          <p class="perex">Lorrem ipsum dolor sit amet, consectetuadipiscing elit. Cras egestas, enim  vitae viverra rhoncus</p>
        </div>
    </div>
    <!-- /#left part of web - main content -->
   <?php include_once "submenu.php";?>