<style type="text/css">
	.flex-direction{
		flex-direction: row-reverse;
	}
	.maincontainer{
		width: 80%;
		margin: 0 auto;
	}
	.maincontainer .display-info{
		display: flex;
		align-items: center;
		flex-direction: column;
	}
	.maincontainer .display-info .box-title{
		height: 300px;
	}
	.maincontainer .display-info .box-title .title{
		font-family: overpassheavyitalic;
		line-height: 110px;
		background: -webkit-linear-gradient(left, rgba(16,105,201,1) 0%, rgba(117,189,209,1) 81%, rgba(147,206,222,1) 100%);
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;
	}
	.maincontainer .display-info .box-title .sub-title{
		font-family:  bebasneue light_0;
		font-style: italic;
		line-height: 1px;
		color: #205198;
	}
	.maincontainer .display-info .box-title .title, .sub-title{
		font-weight: normal;
		font-size: 130px;
		text-align: right;
		margin: 0;
		padding: 0;
		user-select: none;
	}
	.maincontainer .display-info .box-text{
		width: 50%;
		height: 250px;
		text-align: center;
	}
	.maincontainer .display-info .box-text .text{
		text-align: justify;
		color: #205198;
	}
	.maincontainer .display-info .box-text .call-to-action{
		text-decoration: none;
		color: #fff;
		padding: 5px 20px;
		background-color: #205198;
		border-radius: 15px;
	}
	.maincontainer .display-info .box-text .call-to-action:hover{
		background-color: #4f7fc1;
		transition: .2s;
	}
	.maincontainer .display-content{
		display: flex;
		flex-wrap: wrap;
		width: 80%;
		margin: 0 auto;
	}
	.maincontainer .display-content .border-content{
		width: 20%;
		margin: 0 auto;
		height: 1px;
		background-color: #000;
	}
	.maincontainer .display-content .box-imagem{
		width: 50%;
	}
	.maincontainer .display-content .box-text{
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: flex-end;
		width: 50%;
	}
	.maincontainer .display-content .box-text .border-text{
		width: 30px;
		height: 1px;
		background-color: #000;
	}
	.maincontainer .display-content .box-text .text{
		text-align: justify;
		color: #205198;
		border-right: 1px solid #000;
		margin: 0;
		padding: 10px;
	}
</style>
<section class="maincontainer">
	<div class="display-info">
		<div class="box-title">
			<h1 class="title">MARKE<br/>TING</h1>
			<h2 class="sub-title">DIGITAL</h2>
		</div>
		<div class="box-text">
			<p class="text">O marketing digital promove ações por meio da internet, telefone móvel e outros meios digitais, com o intuito de divulgar e comercializar produtos, serviços, obter novos cliente e melhorar a rede de relacionamentos de qualquer empresa ou empreendimento. São ações estratégicas, econômicas e operacionais adaptadas para os meios digitais, de forma a obter nestes canais, a mesma eficiência e eficácia do marketing tradicional e potencializar seus efeitos. Os nossos meios digitais mais utilizados são: Google Adwords, Facebook, Sites, E-commerce, Seo, entre outros.</p>
			<a class="call-to-action" href="#">Saiba mais</a>
		</div>
	</div>
	<div class="display-content">
		<div class="box-imagem">
			<img src="imagens/servicos/google-adwords.png">
		</div>
		<div class="box-text flex-direction">
			<div class="border-text"></div>
			<p class="text">O Google Adwords é a plataforma de publicidade do Google. Através deste serviço, anúncios são exibidos em formas de links patrocinados quando alguém realiza uma busca por meio de computadores ou smartphones. Os anúncios são exibidos nos resultados de pesquisas, relacionado ás palavras-chave usadas nessa busca. É uma das principais ferramentas para se alcançar sucesso online e gerar receita á uma empresa</p>
			<div class="border-text"></div>
		</div>
		<div class="border-content"></div>
	</div>
	<div class="display-content flex-direction">
		<div class="box-imagem">
			<img src="imagens/servicos/google-adwords.png">
		</div>
		<div class="box-text">
			<div class="border-text"></div>
			<p class="text">O Google Adwords é a plataforma de publicidade do Google. Através deste serviço, anúncios são exibidos em formas de links patrocinados quando alguém realiza uma busca por meio de computadores ou smartphones. Os anúncios são exibidos nos resultados de pesquisas, relacionado ás palavras-chave usadas nessa busca. É uma das principais ferramentas para se alcançar sucesso online e gerar receita á uma empresa</p>
			<div class="border-text"></div>
		</div>
		<div class="border-content"></div>
	</div>
</section>