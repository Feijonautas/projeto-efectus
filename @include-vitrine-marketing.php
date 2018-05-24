<style>
	.flex-direction{
		flex-direction: row-reverse;
	}
	.display-content{
		display: flex;
		flex-direction: column;
		align-items: center;
		width: 90%;
		margin: 0 auto;
		z-index: 1000;
	}
	.display-content .box-title{
		display: flex;
		flex-direction: column;
		align-items: flex-end;
	}
	.display-content .box-title .title{
		font-size: 150px;
		font-family: overpassheavyitalic;
		line-height: 140px;
		margin: 0;
		padding: 0;
		background: -webkit-linear-gradient(left, rgba(16,105,201,1) 0%, rgba(117,189,209,1) 81%, rgba(147,206,222,1) 100%);
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;
	}
	.display-content .box-title .sub-title{
		color: #205198;
		font-size: 150px;
		font-family:  bebasneue light_0;
		font-style: italic;
		line-height: 1px;
	}
	.display-content .box-text{
		width: 60%;
	}
	.display-content .box-text .text{
		text-align: justify;
		margin: 100px 0 0 0;
		color: #205198;
		font-weight: 400;
	}
	.display-content .box-text .call-to-action{
		margin: 15px 0px 15px 0px;
		text-align: center;
	}
	.display-content .box-text .call-to-action .btn-saiba{
		text-decoration: none;
		color: #fff;
		background-color: #205198;
		padding: 4px 15px 4px 15px;
		border-radius: 15px;
	}
	.display-content .box-text .call-to-action .btn-saiba:hover{
		background-color: #4f7fc1;
		transition: .2s;
	}
	.display-conteudo{
		display: flex;
		align-items: center;
		width: 80%;
		margin: 50px 0 0 0;
	}
	.display-conteudo .box-conteudo{
		display: flex;
		align-items: flex-end;
		flex-direction: column;
		justify-content: center;
		flex: 1;
	}
	.border{
		width: 20px;
		height: 2px;
		background-color: #000;
		margin-bottom: -16px;
		background-color: #015095;
	}
	.display-conteudo .box-conteudo p{
		text-align: justify;
		border-right: 2px solid #015095;
		padding: 20px 10px 10px 10px;
		color: #015095;
	}
	.border-bottom{
		width: 20px;
		height: 2px;
		background-color: #000;
		margin-top: -16px;
		background-color: #015095;
	}
	.display-content .bar{
		width: 150px;
		height: 1px;
		background-color: #015095;
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
	.main-desenvolvimento .display-desenvolvimento .barra{
		position: absolute;
		width: 80%;
		height: 25px;
		background-color: #fff;
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
		height: 200px;
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
	.display-equipe .box-equipe-top{
		display: flex;
		justify-content: space-between;
	}
	.display-equipe .box-equipe{
		display: flex;
		justify-content: center;
		margin: -30px;
	}
	.display-equipe .box-equipe-bottom{
		display: flex;
		justify-content: center;
	}
	.display-equipe .box-equipe-bottom img{
		margin: 0 100px 0;	
	}
	.box-facebook{
		display: flex;
		justify-content: flex-end;
		position: absolute;
		top: 150px;
		right: 45px;
		width: 100%;
	}
	.box-facebook .fa-facebook{
		position: fixed;
		font-size: 45px;
		color: #015095;
	}
	.box-facebook .fa-facebook:hover{
		color: #006dc6;
		transition: .2s;
	}
</style>
<div class="box-facebook">
	<a href="https://www.facebook.com/efectusdigital/" target="_blank"><i class="fab fa-facebook"></i></a>
</div>
<div class="display-content">
	<div class="box-title">
		<h1 class="title">MARKE</h1>
		<h1 class="title">TING</h1>
		<span class="sub-title">DIGITAL</span>
	</div>
	<div class="box-text">
		<p class="text">O marketing digital promove ações por meio da internet, telefone móvel e outros meios digitais, com o intuito de divulgar e comercializar produtos, serviços, obter novos cliente e melhorar a rede de relacionamentos de qualquer empresa ou empreendimento. São ações estratégicas, econômicas e operacionais adaptadas para os meios digitais, de forma a obter nestes canais, a mesma eficiência e eficácia do marketing tradicional e potencializar seus efeitos. Os nossos meios digitais mais utilizados são: Google Adwords, Facebook, Sites, E-commerce, Seo, entre outros.</p>
		<div class="call-to-action">
			<a class="btn-saiba" href="#">Saiba mais</a>
		</div>
	</div>
	<div class="display-conteudo">
		<div class="box-conteudo">
			<img src="imagens/servicos/google-adwords-efectus.png">
		</div>
		<div class="box-conteudo flex-direction">
			<div class="border"></div>
			<p>O Google Adwords é a plataforma de publicidade do Google. Através deste serviço, anúncios são exibidos em formas de links patrocinados quando alguém realiza uma busca por meio de computadores ou smartphones. Os anúncios são exibidos nos resultados de pesquisas, relacionado ás palavras-chave usadas nessa busca. É uma das principais ferramentas para se alcançar sucesso online e gerar receita á uma empresa</p>
			<div class="border-bottom"></div>
		</div>
	</div>
	<div class="bar"></div>
	<div class="display-conteudo flex-direction">
		<div class="box-conteudo">
			<img src="imagens/servicos/social-media-efectus.png">
		</div>
		<div class="box-conteudo">
			<div class="border"></div>
			<p>O Google Adwords é a plataforma de publicidade do Google. Através deste serviço, anúncios são exibidos em formas de links patrocinados quando alguém realiza uma busca por meio de computadores ou smartphones. Os anúncios são exibidos nos resultados de pesquisas, relacionado ás palavras-chave usadas nessa busca. É uma das principais ferramentas para se alcançar sucesso online e gerar receita á uma empresa</p>
			<div class="border-bottom"></div>
		</div>
	</div>
	<div class="bar"></div>
	<div class="display-conteudo">
		<div class="box-conteudo">
			<img src="imagens/servicos/google-analytics-efectus.png">
		</div>
		<div class="box-conteudo">
			<div class="border"></div>
			<p>O Google Adwords é a plataforma de publicidade do Google. Através deste serviço, anúncios são exibidos em formas de links patrocinados quando alguém realiza uma busca por meio de computadores ou smartphones. Os anúncios são exibidos nos resultados de pesquisas, relacionado ás palavras-chave usadas nessa busca. É uma das principais ferramentas para se alcançar sucesso online e gerar receita á uma empresa</p>
			<div class="border-bottom"></div>
		</div>
	</div>
	<div class="bar"></div>
	<div class="display-conteudo flex-direction">
		<div class="box-conteudo">
			<img src="imagens/servicos/seo-efectus.png">
		</div>
		<div class="box-conteudo">
			<div class="border"></div>
			<p>O Google Adwords é a plataforma de publicidade do Google. Através deste serviço, anúncios são exibidos em formas de links patrocinados quando alguém realiza uma busca por meio de computadores ou smartphones. Os anúncios são exibidos nos resultados de pesquisas, relacionado ás palavras-chave usadas nessa busca. É uma das principais ferramentas para se alcançar sucesso online e gerar receita á uma empresa</p>
			<div class="border-bottom"></div>
		</div>
	</div>
</div>
<div class="main-desenvolvimento">
	<div class="display-desenvolvimento">
		<div class="barra"></div>
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
<div class="display-equipe">
	<div class="box-title-equipe">
		<h1 class="title-equipe">EQUIPE</h1>
		<span class="sub-title-equipe">EFECTUS</span>
	</div>
	<div class="box-equipe-top">
		<div class="box-equipe-img">
			<img src="imagens/homenzinho.png">
		</div>
		<div class="box-equipe-img">
			<img src="imagens/homenzinho.png">
		</div>
	</div>
	<div class="box-equipe">
		<img src="imagens/homenzinho.png">
	</div>
	<div class="box-equipe-top">
		<div class="box-equipe-img">
			<img src="imagens/homenzinho.png">
		</div>
		<div class="box-equipe-img">
			<img src="imagens/homenzinho.png">
		</div>
	</div>
	<div class="box-equipe-bottom">
		<img src="imagens/homenzinho.png">
		<img src="imagens/homenzinho.png">
	</div>
</div>