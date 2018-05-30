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
			
			@keyframes bloom {
				0% {
					filter: grayscale(.8);
				}
				40% {
					filter: grayscale(.5);
				}
				60%{
					filter: grayscale(.4);
				}
				100% {
					filter: grayscale(0);
				}
			}
			@keyframes circle {
				0% {
					opacity: .5;
					background: rgba(213,156,34,.2);
				}
				40% {
					opacity: 1;
					background: rgba(213,34,160,.2);
				}
				100% {
					width: 150%;
					height: 150%;
					opacity: 0;
				}
			}
			.flex{
				2;
			}
			.container{
				width: 80%;
				margin: 0 auto;
			}
			.container .display-container{
				display: flex;
				justify-content: flex-end;
				margin-top: 50px;
			}
			.container .display-container .box-container{
				flex: 1;
			}
			.container .display-container .box-container .text{
				text-align: justify;
				color: #205198;
			}
			.container .display-container .box-info{
				position: relative;
				display: flex;
				justify-content: center;
				align-items: center;
				width: 200px;
				height: 200px;
				border-radius: 200px;
				background-color: #ddd;
				margin: 50px 25px 150px 25px;
				filter: grayscale(.8);
			}
			.container .display-container .box-info::before {
				position: absolute;
				top: 50%;
				left: 50%;
				z-index: 2;
				display: block;
				content: '';
				width: 0;
				height: 0;
				background: aqua;
				border-radius: 100%;
				transform: translate(-50%, -50%);
				opacity: 0;
				transition: .2s;
			}
			.container .display-container .box-info:hover{
				background: radial-gradient(circle closest-side, aqua, #2084B6);
			  	animation: bloom ease-in-out .75s forwards;
				border-color: #fff;
			}
			.container .display-container .box-info:hover::before{
				animation: circle .75s;
			}
			.container .display-container .box-info:hover{
02				color: #fff;
				transition: 2s;
			}
			.container .display-container .box-info .text{
				position: relative;
				text-align: center;
				font-weight: bold;
			}
			.container .display-container .box-info:hover .text{
				color: #fff;
				animation: fontsize 2s infinite;
			}
			
			.container .s-top{
				position: absolute;
				top: 50px;
				width: 30%;
				right: -230px;
			}
			.container .s-bottom-right{
				position: absolute;
				top: 700px;
				right: -300px;
				width: 50%;
				transform: rotate(-40deg);
				z-index: -1;
			}
			.container .s-center-right{
				position: absolute;
				top: 800px;
				left: 300px;
				z-index: -1;
				width: 40%;
				transform: rotate(40deg);
			}
			.container .s-left-right{
				position: absolute;
				left: -200px;
				width: 50%;
				top: 620px;
				z-index: -1;
			}
		</style>
	</head>
	<body>
		<?php
		require_once "@link-body-scripts.php";
		require_once "@include-header-principal.php";
		?>
		<section class="container">
			<div class="display-container">
				<div class="box-container flex"></div>
				<div class="box-container">
					<p class="text">O SMS é uma ferramenta de relacionamento com o cliente que cresceu significamente nos últimos anos, devido à descoberta dos seus benefícios e diferencias pelos profissionais de marketing. Ele é um meio de comunicação com ligação direta, personalizada, intatanêa, interativa e que, geralmente, está 24 horas por dia juto com aos cliente. Estas características fazem do SMS uma ferramenta importante do Marketing de Relacionamento. O SMS Marketing é utilizados através de campanhas por empresas que pretendem realizar ações de marketing com baixo custo de investimento, ampliando seu leque de ferramentas de publicidade e aumentando a clientela. O SMS tornou-se a principal fonte de comunicação com os consumidores e através do SMS Marketing, campanhas vêm se tornando cada vez mais eficazes, eficientes e estratégias para as empresas, independente do seu setor ou nicho de mercado. Ele permite que empresas diversifiquem seu portifólio de comunicação para atingir seu público-alvo, pois é possível realizar uma propaganda direta sem os altos custos do marketing tradicional (rádio, TV, jornal, entre outros).</p>
				</div>
			</div>
			<div class="display-container">
				<div class="box-info">
					<p class="text">Acessível <br>a todos os <br>dispositivos </p>
				</div>
				<div class="box-info">
					<p class="text">Marketing <br>de baixo custo</p>
				</div>
				<div class="box-info">
					<p class="text">Público <br>alvo selecionado</p>
				</div>
			</div>
			<img  class="s-top" src="imagens/S-SMS.png">
			<img  class="s-bottom-right" src="imagens/S-SMS.png">
			<img  class="s-center-right" src="imagens/S-SMS.png">
			<img  class="s-left-right" src="imagens/S-SMS.png">
		</section>
		<?php
		require_once "@include-footer-principal.php";
		?>
	</body>
</html>