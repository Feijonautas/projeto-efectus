<style>
    .be{
        color: #015095;
    }
    .bc{
        color: #57A9D4;
    }
    .maincontent-footer{
        width: 100%;
        background-color: #ccc;
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
        width: 50%;
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
    .maincontent-footer .content-footer .display-cf-footer{
        display: flex;
        width: 50%;
        margin: 50px 0 0 0;
    }
    .maincontent-footer .content-footer .display-cf-footer .box-cf{
        display: flex;
        flex-direction: column;
        width: 50%;
    }
    .maincontent-footer .content-footer .display-tn-footer{
        display: flex;
        width: 50%;
        margin: 50px 0 0 0;
    }
    .maincontent-footer .content-footer .display-tn-footer .box-tnews{
        width: 30%;   
    }
    .maincontent-footer .content-footer .display-tn-footer .box-newsletter{
        width: 70%;   
    }
</style>
<footer class="maincontent-footer">
    <div class="content-footer">
        <div class="display-lc-footer">
            <div class="box-logo">
                <img src="imagens/indentidadeVisual/logo-efectus-footer.png.png">
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
                <span class="be">CURITBA</span>
                <span class="bc">Alameda Dr. Carlos de Carvalho, 1027 - Sala 14</span>
            </div>
            <div class="box-cf">
                <span class="be">FLORIANÓPOLIS</span>
            </div>
        </div>
        <div class="display-tn-footer">
            <div class="box-newsletter">
                <div class="box-textnews">
                    <span class="bc">Fique por dentro das novidades da efectus</h4>
                </div>
            </div>
            <div class="box-newsletter">
                <input type="text" placeholder="Seu e-mail..." name="email">
                <input type="submit" value="Enviar" name="btn-newsletter">
            </div>
        </div>
    </div>
</footer>
