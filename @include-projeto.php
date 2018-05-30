<style>
	.background-modal{
		position: fixed;
		top: 0;
		width: 100%;
		height: 100%;
		background-color: rgba(0, 0, 0, 0.7);
	}
	.display-projeto{
		position: fixed;
		top: 0;
		display: flex;
		justify-content: center;
		align-items: center;
		width: 100%;
		height: 100%;
	}
	.display-projeto .box-formulario{
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		width: 45%;
		height: 600px;
		background-color: #fff;
	}
	.display-projeto .box-formulario .title-form{
		width: 80%;
		margin-bottom: 20px;
		line-height: 35px;
	}
	.display-projeto .box-formulario .title-form h1, h3{
		margin: 0;
		padding: 0;
		font-weight: normal;
	}
	.display-projeto .box-formulario .title-form h1{
		font-size: 60px;
		color: #205198;
		font-weight: 800;
	}
	.display-projeto .box-formulario .title-form h3{
		font-size: 20px;
		color: #3292BF;	
	}
	.display-projeto .box-formulario .formulario-projeto{
		width: 80%;
	}
	.display-projeto .box-formulario .formulario-projeto .form-input{
		display: flex;
		justify-content: space-between;
		width: 100%;
	}
	.display-projeto .box-formulario .formulario-projeto .form-input .input input{
		width: 230px;
		height: 25px;
		border: none;
		border-bottom: 2px solid #B8B8B8;
		margin-bottom: 30px;
		outline: none;
	}
	.display-projeto .box-formulario .formulario-projeto .form-input .input input::placeholder{
		color: #B8B8B8;
		font-size: 18px;
		font-family: montserratlight;
	}
	.display-projeto .box-formulario .formulario-projeto .form-checkbox{
		color: #B8B8B8;
	}
	.display-projeto .box-formulario .formulario-projeto .form-checkbox input{
		margin: 0 10px 30px 10px;	
	}
	.display-projeto .box-formulario .formulario-projeto .form-text textarea{
		width: 100%;
		margin: 0 0 20px 0;
		resize: none;
		border: none;
		border-bottom: 2px solid #B8B8B8;
		outline: none;
	}
	.display-projeto .box-formulario .formulario-projeto .form-text textarea::placeholder{
		color: #B8B8B8;
		font-size: 18px;
		font-family: montserratlight;	
	}
	.display-projeto .box-formulario .formulario-projeto .form-btn{
		text-align: center;
	}
	.display-projeto .box-formulario .formulario-projeto .form-btn input{
		border: none;
		padding: 5px 25px;
		font-size: 20px;
		color: #00FFFF;
		cursor: pointer;
		background: rgba(12,83,186,1);
		background: -moz-linear-gradient(left, rgba(12,83,186,1) 0%, rgba(40,116,208,1) 46%, rgba(73,155,234,1) 100%);
		background: -webkit-gradient(left top, right top, color-stop(0%, rgba(12,83,186,1)), color-stop(46%, rgba(40,116,208,1)), color-stop(100%, rgba(73,155,234,1)));
		background: -webkit-linear-gradient(left, rgba(12,83,186,1) 0%, rgba(40,116,208,1) 46%, rgba(73,155,234,1) 100%);
		background: -o-linear-gradient(left, rgba(12,83,186,1) 0%, rgba(40,116,208,1) 46%, rgba(73,155,234,1) 100%);
		background: -ms-linear-gradient(left, rgba(12,83,186,1) 0%, rgba(40,116,208,1) 46%, rgba(73,155,234,1) 100%);
		background: linear-gradient(to right, rgba(12,83,186,1) 0%, rgba(40,116,208,1) 46%, rgba(73,155,234,1) 100%);
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0c53ba', endColorstr='#499bea', GradientType=1 );
	}
	.display-projeto .box-formulario .formulario-projeto .form-btn input:hover{
		color: #fff;	
	}
	.display-projeto .box-formulario .contatos{
		display: flex;
		justify-content: space-between;
		width: 65%;
		margin-top: 50px;
	}
	.display-projeto .box-formulario .contatos .email{
		color: #3292BF;	
	}
	.display-projeto .box-formulario .contatos .telefone{
		color: #205198;	
	}
	.display-projeto .box-title{
		display: flex;
		align-items: center;
		justify-content: center;
		width: 45%;
		height: 600px;
		background: rgba(12,83,186,1);
		background: -moz-linear-gradient(left, rgba(12,83,186,1) 0%, rgba(40,116,208,1) 46%, rgba(73,155,234,1) 100%);
		background: -webkit-gradient(left top, right top, color-stop(0%, rgba(12,83,186,1)), color-stop(46%, rgba(40,116,208,1)), color-stop(100%, rgba(73,155,234,1)));
		background: -webkit-linear-gradient(left, rgba(12,83,186,1) 0%, rgba(40,116,208,1) 46%, rgba(73,155,234,1) 100%);
		background: -o-linear-gradient(left, rgba(12,83,186,1) 0%, rgba(40,116,208,1) 46%, rgba(73,155,234,1) 100%);
		background: -ms-linear-gradient(left, rgba(12,83,186,1) 0%, rgba(40,116,208,1) 46%, rgba(73,155,234,1) 100%);
		background: linear-gradient(to right, rgba(12,83,186,1) 0%, rgba(40,116,208,1) 46%, rgba(73,155,234,1) 100%);
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0c53ba', endColorstr='#499bea', GradientType=1 );
	}
	.display-projeto .box-title .title{
		text-align: center;
		line-height: 80px;
	}
	.display-projeto .box-title .title h1, h2{
		margin: 0;
		padding: 0;
	}
	.display-projeto .box-title .title h1{
		font-family: overpassheavyitalic;
		color: #00FFFF;
		font-size: 100px;
	}
	.display-projeto .box-title .title h2{
		color: #fff;
		font-family: bebasneue light_0;
		font-weight: normal;
		font-style: italic;
		font-size: 100px;
		line-height: 10px;
	}
	@media screen and (max-width: 1280px){
		.display-projeto .box-formulario{
			width: 50%;
		}
	}
	@media screen and (max-width: 1024px){
		.display-projeto .box-formulario{
			height: 500px;
		}
		.display-projeto .box-formulario .title-form{
			width: 95%;
		}
		.display-projeto .box-formulario .title-form h1{
			font-size: 50px;
		}
		.display-projeto .box-formulario .formulario-projeto{
			width: 95%;
		}
		.display-projeto .box-formulario .contatos{
			width: 80%;
		}
		.display-projeto .box-title{
			height: 500px;	
		}
		.display-projeto .box-title .title{
			line-height: 55px;
		}
		.display-projeto .box-title .title h1{
			font-size: 60px;	
		}
		.display-projeto .box-title .title h2{
			font-size: 60px;	
		}
	}
	@media screen and (max-width: 960px){
		.display-projeto{
			flex-direction: column-reverse;
		}
		.display-projeto .box-title{
			height: 200px;
			width: 80%;
		}
		.display-projeto .box-formulario{
			height: 330px;
		}
		.display-projeto .box-formulario .title-form{
			display: none;
		}
		.display-projeto .box-formulario{
			width: 80%;
		}
		.display-projeto .box-formulario .contatos{
			margin-top: 20px;
		}
		.display-projeto .box-formulario .formulario-projeto{
			width: 70%;
		}
		.display-projeto .box-formulario .contatos{
			width: 55%;
		}
	}
	@media screen and (max-width: 800px){
		.display-projeto .box-title .title{
			line-height: 35px;
		}
		.display-projeto .box-title .title h1{
			font-size: 40px;	
		}
		.display-projeto .box-title .title h2{
			font-size: 40px;	
		}
		.display-projeto .box-title{
			height: 120px;
		}
		.display-projeto .box-formulario .formulario-projeto{
			width: 80%;
		}
		.display-projeto .box-formulario .formulario-projeto .form-btn input{
			font-size: 15px;
		}
		.display-projeto .box-formulario .contatos{
			width: 70%;
		}
	}
	@media screen and (max-width: 720px){
		.display-projeto .box-formulario .formulario-projeto{
			width: 90%;
		}
	}
</style>
<div class="background-modal"></div>
<div class="display-projeto">
	<div class="box-formulario">
		<div class="title-form">
			<h1>VAMOS LÁ</h1>
			<h3>construa uma história de sucesso</h3>
		</div>
		<form class="formulario-projeto" method="post">
			<div class="form-input">
				<div class="input">
					<input type="text" name="nome" placeholder="Qual é o seu nome">
				</div>
				<div class="input">
					<input type="text" name="email" placeholder="Qual é o seu email">
				</div>
			</div>
			<div class="form-checkbox">
				<input type="checkbox">Google Adwords
				<input type="checkbox">Google Analytics
				<input type="checkbox">Social Media
			</div>
			<div class="form-text">
				<textarea placeholder="Fale um pouco do seu projeto"></textarea>
				<textarea placeholder="Como você conheceu a efectus?"></textarea>
			</div>
			<div class="form-btn">
				<input type="submit" value="ENVIAR">
			</div>
		</form>
		<div class="contatos">
			<span class="email">contato@efectusdigital.com.br</span>
			<span class="telefone">+55 41 3501-6360</span>
		</div>
	</div>
	<div class="box-title">
		<div class="title">
			<h1>COMECE<br>UM PROJETO</h1>
			<h2>COM A EFECTUS</h2>
		</div>
	</div>
</div>