<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title>DC Comics</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <link href="img/icon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">DC Comics</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Início</a></li>
          <li><a href="#conteudo">Conteúdo</a></li>
          <li><a href="#personagens">Personagens</a></li>
          <li><a href="php/avaliacao.php">Quiz</a></li>
          <li><a href="php/listarquiz.php">Resultados</a></li>
          <?php if (!isset($_SESSION['id'])) {
            session_destroy();
          ?>

            <li><a href="php/cadastro.php">Cadastro</a></li>
            <li><a href="php/login.php">Login</a></li>

          <?php  } else {  ?>
            <li><a href="php/sair.php">Sair</a></li>
          <?php } ?>
        </ul>
      </nav>
    </div>
  </header>

  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="img/intro-carousel/dc2.png" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <p>Site voltado para os amantes dos Super-heróis do Universo DC Comics, apresenta informações do universo e um quiz para testar seus conhecimentos.</p>
                <a href="#conteudo" class="btn-get-started scrollto">Começar</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/dc1.png" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">

                <p>Conheça, se fascine e descubra muito mais coisas sobre este universo gigantesco.</p>

                <a href="#conteudo" class="btn-get-started scrollto">Começar</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/dc3.png" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <p><a href="php/avaliacao.php">Logue-se aqui</a> para poder acessar e realizar o quiz e testar seus conhecimentos sobre o universo DC Comics.
                </p>

                <a href="#conteudo" class="btn-get-started scrollto">Começar</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/dc4.png" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <p>Conheça um pouco mais sobre a história e os poderes dos principais personagens deste universo.</p>
                <a href="#conteudo" class="btn-get-started scrollto">Começar</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/dc5.png" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <p>Leia todas as informações do universo e dos personagens apresentados a seguir para poder responder o quiz corretamente.</p>
                <a href="#conteudo" class="btn-get-started scrollto">Começar</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Próximo</span>
        </a>

      </div>
    </div>
  </section>

  <main id="main">



    <section id="conteudo"><br>
      <div class="container">

        <header class="section-header">
          <h3>Conteúdo</h3>
          <p>DC Comics é uma das maiores companhias de história em quadrinhos e mídias relacionadas. O Universo DC é um ambiente fictício onde ocorrem a maioria das histórias publicadas pela DC Comics. Superman, Batman, Lanterna Verde, Arqueiro Verde, Flash, Mulher Maravilha, Supergirl e Aquaman são os super-heróis mais conhecidos deste universo.</p>
          <p>O conceito de dividir um universo nas histórias em quadrinhos envolve escritores, artistas e editores, que reunidos criam uma série de títulos onde os eventos em uma revista terão repercussões em outra e histórias seriadas que mostram os personagens se desenvolvendo e mudando. Os personagens principais aparecem como convidados em outras revistas. A ideia foi desenvolvida principalmente pela Marvel Comics no começo dos anos 1960, mas foi iniciada pela DC Comics.
            Os principais heróis do Universo DC surgiram nos anos 1940. A maioria das histórias situadas neste ambiente têm lugar em cidades fictícias, como Gotham City e Metrópolis, a primeira incorporando os aspectos negativos da vida em uma cidade grande e a segunda refletindo os aspectos positivos. A presença dos super-heróis afetou as cidades, mas suas histórias fictícias em geral são similares à história dos Estados Unidos. </p>
        </header>


        <section id="personagens"><br>
          <p2>Principais personagens deste universo:</p2><br><br>
          <div class="row about-cols">

            <div class="col-md-4 wow fadeInUp">
              <div class="about-col">
                <div class="img">
                  <img src="img/sm.png" alt="" class="img-fluid">
                </div><br>
                <p><b>Superman</b></p>
                <p>O Superman é, disparado, um dos super-heróis mais famosos na Terra, e foi o primeiro a ser criado. Certamente, Clark Kent tem sua história conhecida até mesmo por quem não é fã do estilo.</p>
                <p>Sua primeira aparição foi em abril de 1938, entretanto, a ideia do personagem existia há pelo menos 5 anos antes. O personagem nasceu no fictício planeta Krypton e foi chamado pelos seus pais de Kal-El (que significaria Filho das Estrelas no idioma kryptoniano).</p>
                <p>Foi mandado à Terra por seu pai e conforme foi crescendo, ele descobriu que tinha habilidades diferentes dos humanos. Quando não está com o tradicional uniforme azul e vermelho, ele vive como Clark Kent, repórter profissional no Planeta Diário.</p>

                <p1><b>Poderes:</b></p1><br><br>


                <li>Super força</li>
                <li>Invulnerabilidade</li>
                <li>Capacidade de voar</li>
                <li>Visão de raio x</li>
                <li>Visão de calor</li>
                <li>Super audição</li>
                <li>Super sopro</li><br>



              </div>
            </div>

            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
              <div class="about-col">
                <div class="img">
                  <img src="img/bm.png" alt="" class="img-fluid">

                </div><br>

                <p><b>Batman</b></p>

                <p>Batman é um personagem fictício, um super-herói desenvolvido pela DC Comics. Foi criado pelo escritor Bill Finger e pelo artista Bob Kane, apareceu pela primeira vez em Maio de 1939, originalmente com o nome "o Bat-Man".</p>
                <p>A identidade secreta de Batman é Bruce Wayne, um bilionário americano, playboy, magnata de negócios, filantropo e dono da corporação Wayne Enterprises. Após testemunhar o assassinato dos seus pais enquanto criança, jurou vingança contra os criminosos. Wayne treina então física e intelectualmente, e cria uma persona inspirada no morcego para combater o crime.</p>
                <p>Batman opera na cidade fictícia de Gotham City, e é ajudado por outros personagens incluindo o seu mordomo Alfred Pennyworth, Jim Gordon, e outros aliados como Robin.</p>

                <p1><b>Poderes:</b></p1><br><br>

                <li>Porte Físico</li>
                <li>Inteligência avançada</li>
                <li>Conhecimento de artes-marciais</li><br>

                <p1><b>Acessórios:</b></p1><br><br>

                Cinto de ultilidades, Batmóvel, Batarangues



              </div>
            </div>

            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
              <div class="about-col">
                <div class="img">
                  <img src="img/btg.png" alt="" class="img-fluid">
                </div><br>

                <p><b>Batgirl</b></p>
                <p>Batgirl é uma personagem de ficção dos quadrinhos pertencente ao universo da DC Comics, parceira de Batman e de Robin.</p>
                </p>
                <p>Embora a personagem Betty Kane tenha sido introduzida na publicação em 1961 por Bill Finger e Sheldon Moldoff como Bat-Girl, ela foi substituída por Barbara Gordon em 1967, que mais tarde veio a ser identificada como a Batgirl icônica.</p>

                <p>Descrita como a filha comissário de polícia de Gotham City, James Gordon, ela estreou em 1967 pelo escritor Gardner Fox e o desenhista Carmine Infantino. Como Batgirl, a personagem atua principalmente em Gotham City, aliando-se com Batman e o Robin original, Dick Grayson, bem como outros heróis proeminentes no Universo DC.</p><br>

                <p1><b>Poderes:</b></p1><br><br>

                <li>Inteligência avançada</li>
                <li>Conhecimento de artes-marciais</li>
                <li>Habilidades de detetive</li><br>

                <p1><b>Acessórios:</b></p1><br><br>

                Cinto de ultilidades
              </div>



            </div>

          </div>
        </section>

        <div class="container">


          <div class="row about-cols">

            <div class="col-md-4 wow fadeInUp">
              <div class="about-col">
                <div class="img">
                  <img src="img/flash.png" alt="" class="img-fluid">
                </div><br>

                <p><b>Flash</b></p>
                <p>Flash é um nome compartilhado por diversos super-heróis da DC Comics. Criado pelo escritor Gardner Fox e pelo artista Harry Lampert, o Flash original estreou em Flash Comics #1 (1940).</p>
                <p>Até então, quatro diferentes personagens, cada qual de algum modo ganhou o poder da super-velocidade, assumiram a identidade de Flash: Jay Garrick (1940-1956), Barry Allen (1956-1986, 2008-), Wally West (1986-2006, 2007-) Bart Allen (2006-2007).</p>
                <p>A segunda versão do Flash é geralmente considerada o primeiro herói da Era de Prata dos Quadrinhos e o super-herói permaneceu um dos mais populares desde então.</p>

                <p1><b>Poderes:</b></p1><br><br>


                <li>Super velocidade</li>
                <li>Resistência sobre-humana</li>
                <li>Cura acelerada</li>
                <li>Atravessar objetos sólidos</li>
                <li>Viagem no tempo</li><br>

              </div>
            </div>

            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
              <div class="about-col">
                <div class="img">
                  <img src="img/lv.png" alt="" class="img-fluid">

                </div><br>

                <p><b>Lanterna Verde</b></p>
                <p>Lanterna Verde é um nome compartilhado por diversos super-heróis da DC Comics. Criado por Martin Nodell e Bill Finger, o Lanterna Verde original estreou em 1940. Reformulado como um novo super-herói com o mesmo nome nos anos 60, o personagem original ficou conhecido através do nome que lhe foi chamando por seus pais de Alan Scott</p>
                <p>O anel é a fonte de poder do Lanterna Verde, é um dos objetos mais cobiçados no mundo das HQs.</p>
                <p>Cada Lanterna Verde possui um anel desses que lhe dá poderes incríveis, tendo como base sua força de vontade e imaginação.</p>

                <p1><b>Poderes (com a utilização do anel):</b></p1><br><br>


                <li>Viajar para ambientes inóspitos</li>
                <li>Invulnerabilidade</li>
                <li>Capacidade de voar</li>
                <li>Inteligência artificial</li>
                <li>Criar qualquer coisa</li><br>

              </div>
            </div>

            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
              <div class="about-col">
                <div class="img">
                  <img src="img/mm.png" alt="" class="img-fluid">
                </div><br>

                <p><b>Mulher Maravilha</b></p>

                <p>Mulher-Maravilha é uma personagem fictícia de histórias em quadrinhos publicadas pela DC Comics, sua primeira aventura foi em dezembro de 1941, é uma super-heroína guerreira de origem greco-romana, alter ego da Princesa Diana de Themyscira, ilha oculta, também conhecida como Ilha Paraíso, local da civilização de amazonas.</p>
                <p>Assume a identidade de Diana Prince para se aproximar da humanidade no Universo DC. Entre os super-heróis, ela era a mulher independente, não menina. Membro honorário da Sociedade de Justiça da América, primeiro grupo de super-heróis a aparecer nas HQs. É a fundadora da Liga da Justiça na Era Prata, permanecendo até hoje.</p>

                <p1><b>Poderes:</b></p1><br><br>


                <li>Super força</li>
                <li>Agilidade sobre-humana</li>
                <li>Super resistência</li>
                <li>Super velocidade</li>
                <li>Capacidade de voar</li>
                <li>Invulnerabilidade</li>
                <li>Fator de Cura</li><br>

              </div>
            </div>



          </div>

        </div>


        <header class="section-header">
          <p></p>
        </header>

  </main>

  <footer id="footer">

    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>DC Comics</strong>. Todos Direitos Reservados
      </div>
      <div class="credits">

        Desenvolvido por Renato C. Cruz
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="contactform/contactform.js"></script>
  <script src="js/main.js"></script>

</body>

</html>
