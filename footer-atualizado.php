<style>
    .be{
        color: #015095;
		font-weight: bold;
    }
    .bc{
        color: #57A9D4;
    }
    .maincontent-footer{
        width: 100%;
        background-color: #E6E8E7;
		margin: 70px 0 0 0;
    }
	.maincontent-footer .content-footer .display-action{
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		width: 70%;
		height: 130px;
		line-height: 30px;
		margin: -50px auto auto auto;
		border-radius: 65px;
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
	.maincontent-footer .content-footer .display-action h1,
	.maincontent-footer .content-footer .display-action h2{
		margin: 0;
		padding: 0;
	}
	.maincontent-footer .content-footer .display-action h1{
		font-size: 65px;
		font-family: overpassheavyitalic;
	}
	.maincontent-footer .content-footer .display-action h2{
		font-size: 65px;
		font-style: italic;
		font-weight: normal;
		font-family: bebasneue light_0;
	}
	.maincontent-footer .content-footer .display-action h1 a,
	.maincontent-footer .content-footer .display-action h2 a{
		text-decoration: none;
	}
	.maincontent-footer .content-footer .display-action h1 a{
		color: #00FFFF;
	}
	.maincontent-footer .content-footer .display-action h2 a{
		color: #FFF;
	}
    .maincontent-footer .content-footer{
        display: flex;
        flex-wrap: wrap;
        width: 80%;
        margin: 0 auto;
    }
    .maincontent-footer .content-footer .display-lc-footer{
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 40%;
    }
    .maincontent-footer .content-footer .display-lc-footer .box-logo{
        width: 50%;
    }
    .maincontent-footer .content-footer .display-lc-footer .box-contato{
        width: 50%;
        display: flex;
        flex-direction: column;
    }
    .maincontent-footer .content-footer .display-sd-footer{
        display: flex;
        width: 60%;
    }
    .maincontent-footer .content-footer .display-sd-footer .box-sd{
        width: 35%;
    }
    .maincontent-footer .content-footer .display-sd-footer .box-sd ul{
        margin: 0;
        padding: 0;
        list-style: none;
    }
    .maincontent-footer .content-footer .display-sd-footer .box-sd ul li a{
        text-decoration: none;
        color: #57A9D4;
    }
    .maincontent-footer .content-footer .display-sd-footer .box-sd ul li a:hover{
		text-decoration: underline;
		text-decoration-color: #015095;
		transition: .2s;
	}
    .maincontent-footer .content-footer .display-cf-footer{
        display: flex;
        width: 40%;
        margin: 50px 0 0 0;
    }
    .maincontent-footer .content-footer .display-cf-footer .box-cf{
        display: flex;
        flex-direction: column;
        width: 50%;
    }
    .maincontent-footer .content-footer .display-cf-footer .box-cf .cf .fa-map-marker-alt{
		font-size: 25px;
		margin: 0 10px 0 0;
		color: #015095;
	}
    .maincontent-footer .content-footer .display-tn-footer{
        display: flex;
        width: 50%;
        margin: 50px 0 50px 0;
    }
    .maincontent-footer .content-footer .display-tn-footer .box-tnews{
        width: 30%;   
    }
    .maincontent-footer .content-footer .display-tn-footer .box-newsletter{
		display: flex;
        width: 70%;
    }
    .maincontent-footer .content-footer .display-tn-footer .box-newsletter .input-newsletter{
		width: 250px;
		height: 25px;
		border: 1px solid #205198;
		padding: 0 0 0 5px;
	}
    .maincontent-footer .content-footer .display-tn-footer .box-newsletter .btn-news{
		border: none;
		height: 27px;
		padding: 0 15px 0 15px;
		margin: 0 20px 0 0;
		background-color: #54ABD5;
		color: #fff;
		cursor: pointer;
	}
    .maincontent-footer .content-footer .display-tn-footer .box-newsletter .btn-news:hover{
		background-color: #015095;
		transition: .2s;
	}
	.maincontent-footer .content-footer .display-tn-footer .box-newsletter .fa-facebook{
		font-size: 40px;
		color: #B0B0B0;
		margin-top: -5px;
	}
	.maincontent-footer .content-footer .display-tn-footer .box-newsletter .fa-facebook:hover{
		color: #015095;
		transition: .2s;
	}
	@media screen and (max-width: 1600px){
		.maincontent-footer .content-footer{
			width: 85%;
		}
	}
	@media screen and (max-width: 1440px){
		.maincontent-footer .content-footer{
			width: 90%;
		}
	}
	@media screen and (max-width: 1366px){
		.maincontent-footer .content-footer .display-sd-footer{
			width: 55%;
		}
		.maincontent-footer .content-footer .display-lc-footer{
			width: 45%;
		}
	}
	@media screen and (max-width: 1280px){
		.maincontent-footer .content-footer .display-sd-footer{
			width: 50%;
		}
		.maincontent-footer .content-footer .display-sd-footer .box-sd{
			width: 45%;
		}
		.maincontent-footer .content-footer .display-lc-footer{
			width: 50%;
		}
	}
	@media screen and (max-width: 1024px){
		.maincontent-footer .content-footer .display-action{
			width: 90%;
		}
		.maincontent-footer .content-footer .display-lc-footer .box-logo{
			width: 45%;
		}
		.maincontent-footer .content-footer .display-lc-footer .box-contato{
			width: 55%;
		}
		.maincontent-footer .content-footer .display-sd-footer .box-sd{
			width: 50%;
		}
		.maincontent-footer .content-footer .display-tn-footer .box-newsletter{
			width: 50%;
		}
	}
	@media screen and (max-width: 960px){
		.maincontent-footer .content-footer{
			width: 100%;
		}
	}
</style>
<footer class="maincontent-footer">
    <div class="content-footer">
		<div class="display-action">
			<h1><a href="#">COMECE UM PROJETO</a></h1>
			<h2><a href="#">COM A EFECTUS</a></h2>
		</div>
        <div class="display-lc-footer">
            <div class="box-logo">
                <img src="imagens/identidadeVisual/logo-efectus-footer.png">
            </div>
            <div class="box-contato">
                <span class="be">+55 41 3501-6360</span>
                <span class="bc">contato@efectusdigital.com.br</span>
            </div>
        </div>
        <div class="display-sd-footer">
            <div class="box-sd">
                <h4 class="be">SERVIÇOS</h4>
                <ul>
                    <li><a href="#">Marketing Digital</a></li>
                    <li><a href="#">Desenvolvimento de Sites</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">SEO</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </div>
            <div class="box-sd">
                <h4 class="be">DÚVIDAS FREQUENTES</h4>
                <ul>
                    <li><a href="#">Qual o custo de um site</a></li>
                    <li><a href="#">Porque ter um site responsivo</a></li>
                    <li><a href="#">Como aumentar minhas vendas</a></li>
                    <li><a href="#">Quanto tempo para produzir um site</a></li>
                </ul>
            </div>
        </div>
        <div class="display-cf-footer">
            <div class="box-cf">
               	<div class="cf">
                	<i class="fas fa-map-marker-alt"></i><span class="be">CURITBA</span>
                </div>
                <span class="bc">Alameda Dr. Carlos de Carvalho, 1027 - Sala 14</span>
            </div>
            <div class="box-cf">
               <div class="cf">
                	<i class="fas fa-map-marker-alt"></i><span class="be">FLORIANÓPOLIS</span>
               </div>
            </div>
        </div>
        <div class="display-tn-footer">
            <div class="box-newsletter">
                <div class="box-textnews">
                    <span class="bc">Fique por dentro<br/> das novidades da efectus</h4>
                </div>
            </div>
            <div class="box-newsletter">
                <input class="input-newsletter" type="text" placeholder="Seu e-mail..." name="email">
                <input class="btn-news" type="submit" value="Enviar" name="btn-newsletter">
                <a href="https://www.facebook.com/efectusdigital/" target="_blank"><i class="fab fa-facebook"></i></a>
            </div>
        </div>
    </div>
</footer>
<!---->