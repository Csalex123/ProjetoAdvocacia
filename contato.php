<!DOCTYPE html>

<html lang="pt-br">

<head>
	
	<meta charset="utf8">
	
	<title>Valmir Oliveira Advogados</title>
	<link rel="icon"  href="img/icon.png">
	<link rel="stylesheet" type="text/css" href="css/cssprincipal.css">
	<link rel="stylesheet" type="text/css" href="css/contato.css">
</head>

<body>


	<?php 
	$page = "contato";
	include('menu.php');
	?>

<header>
	<h2 id="titulo">Fale conosco</h2>
</header><br>


<div class="container " >		
	<div class="col-sm-6" style="">
		<form method="post" action="#" style="" id="form"> 				
			<label>Nome:</label> <input id="nome" class="form-control" type="text" name="" minlength="1" maxlength="120" required="" placeholder="Digite seu nome"><br>

			<label>Fone:</label> <input id="contato" name="tel" id="tel" class="form-control" type="text" required="" placeholder="(00) 00000-0000">	<br>

			<label>Email:</label>  <input id="email" class="form-control" type="email" name="" minlength="5" maxlength="70" required="" placeholder="Digite seu email"> <br>

			<label>Mensagem:</label> <textarea id="mensagem" rows="6"  class="form-control" minlength="10" required="" placeholder="Digite uma mensagem"></textarea ><br>

			<input id="button"  class="btn btn-success" type="submit"  value="Enviar">			
		</form>
	</div>
</div>



<?php 
include('rodape.php');
?>


<script type="text/javascript">
	$(document).ready(function(){
		var SPMaskBehavior = function (val) {
			return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
		},
		spOptions = {
			onKeyPress: function(val, e, field, options) {
				field.mask(SPMaskBehavior.apply({}, arguments), options);
			}
		};

		$('#tel').mask(SPMaskBehavior, spOptions);
	});
</script>


<!-- Importando Jquery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
</body> 	

</html