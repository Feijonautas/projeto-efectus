<?php
	require_once "@classe-paginas.php";
	$cls_paginas = new Paginas();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Efectus Digital">
		<title><?php $cls_paginas->titulo; ?></title>
		<meta name="description" content="<?php $cls_paginas->descricao; ?>">
		<?php
		require_once "@link-standard-styles.php";
		require_once "@link-standard-scripts.php";
		?>
		<style>
			.main-content{
				width: 80%;
				margin: 0 auto;
			}
			.box-title-contato{
				text-align: center;
			}
			.box-title-contato .title-contato{
				font-size: 100px;
				margin: 0;
				padding: 0;
				font-family: overpassheavyitalic;
				background: -webkit-linear-gradient(left, rgba(16,105,201,1) 0%, rgba(117,189,209,1) 81%, rgba(147,206,222,1) 100%);
				-webkit-background-clip: text;
				-webkit-text-fill-color: transparent;	
			}
			.box-title-contato .bar{
				width: 100px;
				height: 1px;
				background-color: #000;
				margin: -20px auto 20px auto;
			}
			.box-title-contato span{
				font-size: 20px;
				color: #015095;
			}
			form{
				width: 50%;
				margin: 20px auto;
			}
			form .box-input{
				display: flex;
				justify-content: space-between;
			}
			form .box-input input{
				flex: 1 1 0;
				margin: 10px 5px;
				height: 25px;
				outline: none;
				padding: 0 5px;
			}
			form .box-input textarea{
				flex: 1 1 0;
				margin: 5px;
				height: 130px;
				resize: none;
				outline: none;
				padding: 0 5px;
			}
			form .btn-contato{
				display: flex;
				justify-content: flex-end;
			}
			form .btn-contato input{
				margin: 5px;
				border: none;
				color: #fff;
				background-color: #015095;
				padding: 6px 25px;
				font-size: 20px;
			}
		</style>
	</head>
	<body>
		<?php
		require_once "@link-body-scripts.php";
		require_once "@include-header-principal.php";
		?>
		<div class="main-content">
			<div class="box-title-contato">
				<h1 class="title-contato">CONTATO</h1>
				<div class="bar"></div>
				<span>Dúvidas? Entre em contato com a Efectus Digital</span>
			</div>
			<form method="post">
				<div class="box-input">
					<input type="text" name="nome" placeholder="Nome">
					<input type="text" name="telefone" placeholder="Telefone">
				</div>
				<div class="box-input">
					<input type="text" name="email" placeholder="E-mail">
				</div>
				<div class="box-input">
					<textarea name="mensagem" placeholder="Digite uma mensagem"></textarea>
				</div>
				<div class="btn-contato">
					<input type="submit" value="Enviar">
				</div>
			</form>
		</div>
		<?php
		require_once "@include-footer-principal.php";
		?>
	</body>
</html>