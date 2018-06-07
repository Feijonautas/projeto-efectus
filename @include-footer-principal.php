<style>
	flex{
		flex: 2;
	}
	.center{
		justify-content: center;
	}
	.main-footer-principal{
		display: flex;
		justify-content: center;
		background-color: #ccc;
		margin: 100px 0 0 0;
		width: 100%;
	}
	.footer-principal{
		display: flex;
		align-items: center;
		flex-direction: column;
		flex-wrap: wrap;
		width: 100%;
	}
	.footer-principal .box-projeto{
		display: flex;
		justify-content: center;
		flex-direction: column;
		align-items: center;
		width: 65%;
		height: 120px;
		line-height: 40px;
		margin: -50px 0 50px 0;
		border-radius: 60px;
		background-color: blue;
		background: rgba(16,105,201,1);
		background: -moz-linear-gradient(left, rgba(16,105,201,1) 0%, rgba(117,189,209,1) 81%, rgba(147,206,222,1) 100%);
		background: -webkit-gradient(left top, right top, color-stop(0%, rgba(16,105,201,1)), color-stop(81%, rgba(117,189,209,1)), color-stop(100%, rgba(147,206,222,1)));
		background: -webkit-linear-gradient(left, rgba(16,105,201,1) 0%, rgba(117,189,209,1) 81%, rgba(147,206,222,1) 100%);
		background: -o-linear-gradient(left, rgba(16,105,201,1) 0%, rgba(117,189,209,1) 81%, rgba(147,206,222,1) 100%);
		background: -ms-linear-gradient(left, rgba(16,105,201,1) 0%, rgba(117,189,209,1) 81%, rgba(147,206,222,1) 100%);
		background: linear-gradient(to right, rgba(16,105,201,1) 0%, rgba(117,189,209,1) 81%, rgba(147,206,222,1) 100%);
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1069c9', endColorstr='#93cede', GradientType=1 );
	}
	.footer-principal .box-projeto .title{
		font-family: overpassheavyitalic;
		font-size: 60px;
		margin: 0;
		padding: 0;
		color: #00FFFF;
		text-decoration: none;
	}
	.footer-principal .box-projeto .sub-title{
		font-family: bebasneue light_0;
		font-size: 80px;
		margin: 0;
		padding: 0;
		color: #fff;
		text-decoration: none;
	}
	.footer-principal .display-footer{
		display: flex;
		flex-wrap: wrap;
	}
	.footer-principal .display-footer .box-footer{
		display: flex;
		flex-direction: column;
		flex: 1 1 0;
		margin: 30px;
	}
	.footer-principal .display-footer .box-footer .title-footer{
		font-size: 15px;
		color: #015095;
	}
	.footer-principal .display-footer .box-footer .subtitle-footer{
		font-size: 15px;
		color: #57A9D4;
	}
	.footer-principal .display-footer .box-footer .fa-map-marker-alt{
		color: 	#015095;
		font-size: 30px;
	}
	.footer-principal .display-footer .box-footer .marker-footer{
		display: flex;
		align-items: center;
	}
	.footer-principal .display-footer .box-footer .marker-footer .fa-map-marker-alt{
		margin-right: 5px;
	}
	.footer-principal .display-footer .box-footer .input-footer{
		display: flex;	
	}
	.footer-principal .display-footer .box-footer .input-footer .newsletter{
		height: 30px;
		border: 1px solid #015095;
		width: 250px;
		padding: 0 5px 0 5px;
	}
	.footer-principal .display-footer .box-footer .input-footer .btn-newsletter{
		border: none;
		background-color: #57A9D4;
		color: #fff;
		cursor: pointer;
	}
	.footer-principal .display-footer .box-footer .input-footer .btn-newsletter:hover{
		background-color: #015095;
		transition: .2s;
	}
	@media screen and (max-width: 1366px){
		.footer-principal .display-footer{
			width: 100%;
		}
	}
</style>
<div class="main-footer-principal">
	<div class="footer-principal">
		<div class="box-projeto">
			<a href="@include-projeto.php" class="title">COMECE UM PROJETO</a>
			<a href="#" class="sub-title"><i>COM EFECTUS</i></a>
		</div>
		<div class="display-footer">
			<div class="box-footer">
				<div class="img-footer">
					<img class="logo-footer" src="imagens/identidadeVisual/logo-footer-efectus.png">
				</div>
			</div>
			<div class="box-footer center">
				<span class="title-footer">+55 41 3501-6360</span>
				<span class="subtitle-footer">contato@efectusdigital.com.br</span>
			</div>
			<div class="box-footer center">
				<span class="title-footer">DÚVIDAS FREQUENTES</span>
				<span class="subtitle-footer">Qual o custo de um site</span>
				<span class="subtitle-footer">Por que ter um site responsivo</span>
				<span class="subtitle-footer">Como aumentar minhas vendas</span>
				<span class="subtitle-footer">Quanto tempo para produzir um site</span>
			</div>
		</div>
		<div class="display-footer">
			<div class="box-footer">
				<div class="marker-footer">
					<i class="fas fa-map-marker-alt"></i>
					<span class="title-footer">CURITIBA</span>
				</div>
				<span class="subtitle-footer">Alameda Dr. Carlos de Carvalho, 1027 - Sala 14</span>
			</div>
			<div class="box-footer">
				<div class="marker-footer">
					<i class="fas fa-map-marker-alt"></i>
					<span class="title-footer">FLORIANÓPOLIS</span>
				</div>
			</div>
			<div class="box-footer">
				<span class="subtitle-footer">fique por dentro</span>
				<span class="subtitle-footer">das novidades da efectus</span>
			</div>
			<div class="box-footer">
				<div class="input-footer">
					<input class="newsletter" type="text" name="email" placeholder="Seu e-mail...">
					<input class="btn-newsletter" type="submit" value="Enviar">
				</div>
			</div>
		</div>
	</div>
</div>