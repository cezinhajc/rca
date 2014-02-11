<?php include '_doctype.php'; ?>
  <head>
      <title>RCA Network</title>
       <?php include '_head.php'; ?>
    	 <!-- Styles -->
       <?php include '_scripts_topo.php'; ?>
  </head>
  <body>
    <div class="contentmain">
    <?php include '_chromeframe.php'; ?>
    <header class="header-home">
      <div class="container-fluid ac-restrito">
        <div class="container ">
          <div class="row-fluid ">
            <div class="span4">
              <div class="spaceclient">
                <img src="assets/img/ac-cliente.png" alt="">
                <p>Área do Cliente</p>
              </div>
            </div>
            <form action="#">
            <div class="span3"><input class="spanicone user" type="text" placeholder="Usuário ou CPF"></div>
            <div class="span3"><input class="spanicone lock" type="text" placeholder="Senha"></div>
            <div class="span2"><button class="btn-padrao" type="submit">fazer meu login</button></div>
            </form>
          </div>
        </div>
      </div>
      <div class="container-fluid menu">
        <div class="container">
          <div class="row-fluid">
            <div class="span2"><h1 class="logo"><a href="index.php">RCA Network</a></h1></div>
            <div class="span7">
              <nav>
                <ul class="menutop">
                  <li><a href="planos.php">Planos</a></li>
                  <li><a href="cobertura.php">Cobertura</a></li>
                  <li><a href="intranet.php">Central de Assinante</a></li>
                  <li><a href="faleconosco.php">Fale Conosco</a></li>
                </ul>
              </nav>
            </div>
            <div class="span3">
              <div class="styled-select">
                <img src="assets/img/estouem.jpg" alt="">
                <select>
                  <option>aperipé</option>
                  <option>salvador</option>
                  <option>itacare</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include("_display.php"); ?>
    </header>
    <article>
      <div class="container-fluid">
        <div class="container">
          <div class="row-fluid faixa-compre">
            <div class="span4 op-faixa">
              <img src="assets/img/v1_03.jpg" alt="">
              <h4>Compre por telefone</h4>
              <p><span>Aperibé:</span> 3864-0200 / <span>Itaocara:</span> 3861-8650</p>
            </div>
            <div class="span4 op-faixa">
              <img src="assets/img/v1_05.jpg" alt="">
              <h4>Compre por E-mail</h4>
              <p><a href="mailto:sacaperibe@rcanetwork.com.br"><span>sacaperibe@rcanetwork.com.br</span></a></p>
            </div>
            <div class="span4 op-faixa">
              <img src="assets/img/imgcompre_09.jpg" alt="">
              <h4>Assine online</h4>
              <p><span>fale com um de nossos atendentes</span></p>
            </div>
          </div>
          <div class="row-fluid">
            <div class="span12">
              <h2>conheça um pouco mais da rca network</h2>
            </div>
          </div>
          <div class="row-fluid">
            <div class="span8 sobre">
              <section>
                <p>A RCA Network está fundamentada nas mais lúcidas reflexões, sobre a necessidade de se ter um serviço de internet sólido, com alto desempenho, confiabilidade e estabilidade.</p>
                <p>A qualidade da infra-estrutura utilizada é de fundamental importância para o funcionamento da Empresa. Para isso utilizamos equipamentos de primeira linha, fornecidos por empresas de renome no mercado, tendo em vista a missão de suprir as necessidades e expectativas de nossos clientes.</p>
                <p>Compreendendo que o sucesso da empresa só pode ser alcançado através das pessoas, nossos valores básicos apontam para a busca da excelência, para o comprometimento com os mais altos padrões éticos e profissionais,pelo resultado e para o reconhecimento permanente de que a credibilidade do cliente é o nosso maior patrimônio, valorizando e priorizando o atendimento ao cliente, que é nosso principal foco, aplicando conhecimento em recursos anos e gerando valores sociais à comunidade.</p>
                <p>Chegamos à cidade para criar uma verdadeira parceria entre a equipe da RCA Network e você, já que temos como maior objetivo a satisfação do nosso cliente.</p>
                <p>RCA Network Internet Banda Larga.</p>
              </section>
            </div>
            <div class="span4">
              <div id="fb-root"></div>
              <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
                fjs.parentNode.insertBefore(js, fjs);
              }(document, 'script', 'facebook-jssdk'));</script>
              <div class="fb-like-box" data-href="https://www.facebook.com/gruporca?fref=ts" data-width="300" data-height="380" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid opcoes-conheca">
        <div class="container">
          <div class="row-fluid">
            <div class="span4 op-more">
              <div class="op-serv">
                <img src="assets/img/imgcompre_15.jpg" alt="teste de velocidade">
                <p class="title">teste sua velocidade</p>
                <p>confira aqui a velocidade da internet da sua casa</p>
                <button href="#" class="btn-padrao">testar conexao</button>
              </div>
            </div>
            <div class="span4 op-more">
              <div class="op-serv">
                <img src="assets/img/v1_18.jpg" alt="teste de velocidade">
                <p class="title">Alguns erros de acesso</p>
                <p>Saiba sobre dúvidas e errosmais comuns na conexão.</p>
                <button href="#" class="btn-padrao">testar conexao</button>
              </div>
            </div>
            <div class="span4">
              <div class="op-serv">
                <img src="assets/img/v1_20.jpg" alt="teste de velocidade">
                <p class="title">dicas de segurança</p>
                <p>Segurança na internet? Como se prevenir e proteger seu pc.</p>
                <button href="#" class="btn-padrao">testar conexao</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </article>
    <article>
      <div class="container-fluid">
        <div class="container">
          <div class="row-fluid">
            <div class="span12"><h2>dúvidas frequentes</h2></div>
          </div>
          <div class="row-fluid">
            <div class="span12">
              <section>
                <div class="accordion" id="accordion2">
                  <div class="accordion-group">
                    <div class="accordion-heading">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                        <span class="pull-left"><i class="icon-chevron-down"></i></span>É possível utilizar a internet em mais de um computador? 
                      </a>
                    </div>
                    <div id="collapseOne" class="accordion-body collapse in">
                      <div class="accordion-inner">
                        Sim, entretanto o cliente precisa de um roteador interno para que a conexão possa ser compartilhada em mais de uma máquina. Vale ressaltar que a conexão compartilhada implica também no compartilhamento da conexão entre as máquinas.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-group">
                    <div class="accordion-heading">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                        <span class="pull-left"><i class="icon-chevron-down"></i></span>Vai haver algum acréscimo na minha conta de telefone? 
                      </a>
                    </div>
                    <div id="collapseTwo" class="accordion-body collapse">
                      <div class="accordion-inner">
                        Anim pariatur cliche...
                      </div>
                    </div>
                  </div>
                  <div class="accordion-group">
                    <div class="accordion-heading">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTree">
                       <span class="pull-left"><i class="icon-chevron-down"></i></span>Com o tempo, vai aumentar o valor da mensalidade? 
                      </a>
                    </div>
                    <div id="collapseTree" class="accordion-body collapse">
                      <div class="accordion-inner">
                        Anim pariatur cliche...
                      </div>
                    </div>
                  </div>
                  <div class="accordion-group">
                    <div class="accordion-heading">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
                        <span class="pull-left"><i class="icon-chevron-down"></i></span>Quanto tempo leva a instalação do serviço da RCA Network? 
                      </a>
                    </div>
                    <div id="collapseFour" class="accordion-body collapse">
                      <div class="accordion-inner">
                        Anim pariatur cliche...
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
          <div class="row-fluid">
            <div class="span3 offset5 btn-duvidas">
              <button class="btn-padrao">todas as duvidas</button>
            </div>
          </div>
        </div>
      </div>
    </article>
    <article>
      <div class="container-fluid navegue">
        <div class="container">
          <div class="row-fluid">
            <div class="span10 offset1">
              <h2> navegue, busque e compartilhe <br> tudo o que desejar utiliando a RCA network</h2>
            </div>
          </div>
          <img src="assets/img/macbook.png" class="macbook" alt="Macbook com imagens de tela">
        </div>
      </div>
      <div class="container-fluid conheca">
        <div class="container">
          <div class="row-fluid">
            <div class="span12">
              <h2>Não perca tempo e faça adesão ao plano que mais se adequa a <br><span>sua necessidade </span> usufura da <span>melhor internet</span>.</h2>
            </div>
          </div>
          <div class="row-fluid">
            <div class="span4 offset4">
              <button class="btn-padrao btn-medio" type="button">conheça nossos planos</button>
            </div>
          </div>
        </div>
      </div>
    </article>
    <?php include '_footer.php'; ?>
		<?php include '_scripts_rodape.php'; ?> 
    <script type="text/javascript" charset="utf-8">
  			$(document).ready(function(){
  				
          $('div.accordion-body').on('shown', function () {
            $(this).parent("div").find(".icon-chevron-down").removeClass("icon-chevron-down").addClass("icon-chevron-up");
          });

          $('div.accordion-body').on('hidden', function () {
            $(this).parent("div").find(".icon-chevron-up").removeClass("icon-chevron-up").addClass("icon-chevron-down");
          });

		    });
		</script>
    <?php include '_analytics.php'; ?>
  </body>
</html>
