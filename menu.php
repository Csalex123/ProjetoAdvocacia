<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf8">
	<title>Valmir Oliveira Advogados</title>

	<link rel="icon"  href="icon.png">

	<!-- Importantado bootstrap-->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- Arquivo css do menu-->
	<link rel="stylesheet" type="text/css" href="css/menu.css">

	<style type="text/css">
	/* Classe active  */
	.navbar .navbar-collapse ul .active {
		background-color: rgba(127,131,132, 0.4);
		color: white;
	}
	/* Hover do menu  */
	li:hover{
		background-color: rgba(127,131,132, 0.4);

	}
</style>

</head>


<body>
	<!-- Banner-->	
	<div class="titulo header" >
		<a href="index.php"><img class="img-responsive" src="img/logo.png" alt="Logo.png" data-toggle="tooltip" title="Ir a página inicial"></a>
		<br>
	</div>

	<!-- Menu -->
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">

				<!-- Botão para o menu responsivo  -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" data-toggle="tooltip" title="Clique aqui para abrir o menu">
					<!-- 3 Barras  -->
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>       

				</button>
				<!-- Descrição para o menu responsivo -->
				<div class="navbar-toggle navbar-brand" id="menuResponsivo">
					<p class="fonte3" >Menu</p>
				</div>

			</div>
		</div>


		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav" id="navmenu">
				<!-- Opções do menu-->
				<li class="fonte"><a class="<?php if($page =='index'){ echo "active"; } ?> "  href="index.php" >Início</a></li>

				<li class="fonte"><a class="<?php if($page =='historia'){ echo "active"; } ?>"  href="historia.php" > História</a></li>

				<li class="fonte"><a class="<?php if($page =='escritorio'){ echo "active"; } ?>"  href="escritorio.php" >Escritório</a></li>

				<li class="fonte" ><a class="<?php if($page =='atuacao'){ echo "active"; } ?>"  href="atuacao.php" > Atuação</a></li>

				<li class="fonte" ><a class=" <?php if($page =='advogados'){ echo "active"; } ?>"  href="advogados.php" > Advogados</a></li>

				<li class="fonte" ><a class=" <?php if($page =='areaCliente'){ echo "active"; } ?>"  href="areacliente.php" >
				Área de cliente</a></li>

				<li class="fonte"><a class="<?php if($page =='contato'){ echo "active"; } ?> class="menu" href="contato.php">Contato</a></li>
			</ul>


		</div>
	</div>
</nav>
<!-- Fim do menu-->



<!-- Importando Jquery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>