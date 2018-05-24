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
				width: 100%;
				margin: 0 auto;
			}
			.main-desenvolvimento{
				width: 100%;
				display: flex;
				justify-content: center;
				background-image: url(imagens/background/background-dev-sites.png);
				background-position: center center;
				background-size: 100% 100%;
				background-repeat: no-repeat;
				height: 1000px;
			}
			.main-desenvolvimento .display-desenvolvimento{
				display: flex;
				flex-direction: column;
				align-items: center;
				width: 80%;
				background-image: url(imagens/pc-apple.png);
				background-repeat: no-repeat;
				background-position: left bottom;
			}
			.main-desenvolvimento .display-desenvolvimento .box-title-desenvolvimento{
				display: flex;
				align-items: flex-end;
				flex-direction: column;
				height: 200px;
				margin: 100px 0 0 0;
			}
			.main-desenvolvimento .display-desenvolvimento .box-title-desenvolvimento .title-desenvolvimento{
				font-size: 100px;
				font-family: overpassheavyitalic;
				line-height: 90px;
				margin: 0;
				padding: 0;
				color: #fff;
			}
			.main-desenvolvimento .display-desenvolvimento .box-title-desenvolvimento .sub-title-desenvolvimento{
				color: #205198;
				font-size: 90px;
				font-family:  bebasneue light_0;
				font-style: italic;
				line-height: 1px;
			}
			.main-desenvolvimento .display-desenvolvimento .box-text-desenvolvimento{
				display: flex;
				flex-direction: column;
				align-items: flex-end;
				width: 100%;
				margin: 50px 0 0 0;
			}
			.main-desenvolvimento .display-desenvolvimento .box-text-desenvolvimento p{
				text-align: justify;
				color: #fff;
				width: 40%;
			}
			.main-desenvolvimento .display-desenvolvimento .box-text-desenvolvimento .btn-saiba{
				text-decoration: none;
				color: #fff;
				background-color: #205198;
				padding: 4px 15px 4px 15px;
				border-radius: 15px;	
			}
			.display-equipe{
				width: 60%;
				margin: 0 auto;
			}
			.display-equipe .box-title-equipe{
				display: flex;
				align-items: center;
				flex-direction: column;
			}
			.display-equipe .box-title-equipe .title-equipe{
				font-size: 120px;
				font-family: overpassheavyitalic;
				line-height: 120px;
				margin: 0;
				padding: 0;
				background: -webkit-linear-gradient(left, rgba(16,105,201,1) 0%, rgba(117,189,209,1) 81%, rgba(147,206,222,1) 100%);
				-webkit-background-clip: text;
				-webkit-text-fill-color: transparent;
			}
			.display-equipe .box-title-equipe .sub-title-equipe{
				color: #205198;
				font-size: 90px;
				font-family:  bebasneue light_0;
				font-style: italic;
				line-height: 1px;
				margin: 0 0 0 200px;
			}
			.display-equipe .box-title-equipe p{
				text-align: justify;
				width: 60%;
				margin: 50px;
			}
			.display-linguagens{
				width: 100%;
				height: 1000px;
				margin: -200px 0;
				background-image: url(imagens/background/background-dev-sites-invertido.png);
				background-size: cover;
				z-index: 1;
			}
			.display-linguagens .background-cell .cell{
				width: 30%;
				margin: 100px 0 0 50px;
				transform: rotate(-20deg);
				z-index: -1;
				position: absolute;
			}
			.display-linguagens .background-macbooke .macbooke{
				width: 50%;
				position: absolute;
				right: 0;
				top: 900px;
			}
			.space{
				width: 100%;
				height: 400px;
			}
			.display-linguagens .box-linguagens{
				display: flex;
				flex-direction: column;
				align-items: center;
				width: 80%;
				margin: 0 auto;
			}
			.display-linguagens .box-linguagens .linguagens-title{
				display: flex;
				flex-direction: column;
				line-height: 45px;
			}
			.display-linguagens .box-linguagens .title-linguagem{
				font-size: 80px;
				font-family: overpassheavyitalic;
				color: #fff;
			}
			.display-linguagens .box-linguagens .sub-title-linguagem{
				font-size: 80px;
				font-family:  bebasneue light_0;
				color: #015095;
				text-align: right;
			}
			.display-linguagens .box-linguagens p{
				width: 50%;
				text-align: justify;
				margin: 50px 0 0 0;
				color: #fff;
			}
		</style>
	</head>
	<body>
		<?php
		require_once "@link-body-scripts.php";
		require_once "@include-header-principal.php";
		?>
		<div class="main-content">
			<div class="main-desenvolvimento">
				<div class="display-desenvolvimento">
					<div class="box-title-desenvolvimento">
						<h1 class="title-desenvolvimento">DESENVOL</h1>
						<h1 class="title-desenvolvimento">VIMENTO</h1>
						<span class="sub-title-desenvolvimento">DE SITES</span>
					</div>
					<div class="box-text-desenvolvimento">
						<p>O site é um dos instrumentos de publicidade mais eficiente que existem, pois servem de apoio a campanhas de publicidade como rádio,	 televisão, jornal, placas, etc. Podem construir um empreendimento de prestação de serviços, venda de produtos ou informações, com custo muito reduzidos se comparados a outros negócios. Precisam estar referenciados em buscadores globais ou guias de local para obterem os acessos desejados e serem encontrados por novos clientes.</p>
						<a class="btn-saiba" href="#">Saiba mais</a>
					</div>
				</div>
			</div>
		</div>
		<div class="display-equipe">
			<div class="box-title-equipe">
				<h1 class="title-equipe">LAYOUTS</h1>
				<span class="sub-title-equipe">RESPONSIVOS</span>
				<p>Os acessos via dispositivos móveis equivalem a 75% de todos os acessos no mundo. Por conta disto, uma das mais importantes diretrizes do Google, é a compatibilidade do site com todos os dispositivos. Isto mostrará ao Google que o site é importante e poderá ser exibido em qualquer dispositivo</p>
			</div>
		</div>
		<div class="display-linguagens">
			<div class="background-cell">
				<img class="cell" src="imagens/cell-phone.png">
			</div>
			<div class="background-macbooke">
				<img class="macbooke" src="imagens/macbooke-background.png">
			</div>
			<div class="space"></div>
			<div class="box-linguagens">
				<div class="linguagens-title">
					<span class="title-linguagem">LINGUAGENS</span>
					<span class="sub-title-linguagem">ATUALIZADAS</span>
				</div>
				<p>No desenvolvimento de sites, são usadas diversas linguagens. Entre elas: HTML5, CSS3, JavaScript, JQuery, PHP7 e SQL. Todas em suas versões mais atualizadas, pois na hora de procurar um resultado em algum buscador, por exemplo o Google, se o site não estiver com linguagens atualizadas e bem estruturadas, este site será deixado de lado. Por isso a Efectus se certifica que seu site seja bem visto pelo Google.</p>
			</div>
			<div class="box-img-linguagens">
				<img src="">
			</div>
		</div>
		<?php
		require_once "@include-footer-principal.php";
		?>
	</body>
</html>