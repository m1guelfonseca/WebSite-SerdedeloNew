<?php
require_once __DIR__ . '/../src/infraestrutura/basededados/repositorio-noticia.php';
require_once __DIR__ . '/../src/middleware/middleware-utilizador.php';
@require_once __DIR__ . '/../src/auxiliadores/auxiliador.php';
$utilizador = utilizador();
$titulo = '- Website';
$noticias = ordenaNoticia();
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freguesia de Serdedelo</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="\Website\Bundle\style.css">
    <link rel="shortcut icon" href="\..\recursos\ptl-serdedelo.gif" type="image/x-icon">
    

</head>

<body>
    <header class="header">
        <div class="logoContent">
            <a href="#" class="logo"><img src="\..\recursos\ptl-serdedelo.gif" alt=""></a>
            <h1 class="logoName">Serdedelo</h1>
        </div>

        <nav class="navbar">
          <div class="btn">
            <a href="#home"><button type="button" class="btn btn-outline-secondary">Início</button></a>
           <a href="#autarcas"><button type="button" class="btn btn-outline-secondary">Autarcas</button></a>
            <a href="#Informacao"><button type="button" class="btn btn-outline-secondary">Informações</button></a>
            <a href="#Noticias"><button type="button" class="btn btn-outline-secondary">Notícias</button></a>
            <a href="#Formulario"><button type="button" class="btn btn-outline-secondary">Formulário</button></a> 
          </div>

          <div class="btn-group">
            <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
             <?php
              echo $utilizador['nome']
             ?>
            </button>
            <ul class="dropdown-menu">
             <li><a class="dropdown-item" href="perfil.php">Editar</a></li>
              <li>
                <form action="/src/controlador/website/controlar-autenticacao.php" method="post">
                  <button class="dropdown-item" type="submit" name="utilizador" value="logout">Logout</button>
                </form>  
              </li>
              <li> 
                <?php
                if (autenticado() && $utilizador['administrador']) {
                    echo '<a href="/admin/"><button class="btn btn-outline-success" type="button">Administração</button></a> <a href="/admin/indexNoticia.php"><button class="btn btn-outline-success" type="button">Administração Noticias</button></a>';                    
                }
                ?>
                </li>
            </ul>
          </div>
        </nav>

        <div class="icon">
            <i class="fas fa-bars" id="menu-bar"></i>
        </div>
        <div class="search">
            <input type="search" placeholder="search...">
        </div>
    </header>

<!--Home page-->

    <section class="home" id="home">
        <div class="homeContent">
            <h2>Bem-Vindos a Serdedelo!</h2>
            <p>Sentimo-nos  honrados com a sua visita virtual a esta nossa terra. Estamos a trabalhar para  que esta freguesia seja cada  vez mais apetecível. Vale a pena visitar esta freguesia e passar momentos agradáveis, conhecendo nossos costumes. Temos as belezas do rio Lima e estamos somente a sete quilómetros de Ponte de Lima.</p> 
        </div>
    </section>

    <!--Autarquia-->
    <section class="team" id="autarcas">
      <h1 class="title2">Junta de Freguesia 2021/2025</h1>
      <h3 class="title3">Elementos do Executivo</h3>
    <div class="team-row">
        <div class="member">
            <img src="\..\recursos\PRES.jpg" alt="">
            <h2>Joaquim Sousa</h2>
            <p>Presidente da Junta de Freguesia de Serdedelo</p>
        </div>
        <div class="member">
            <img src="\..\recursos\SEC.jpg" alt="">
            <h2>Andreia Rodrigues</h2>
            <p>Secretária da Junta de Freguesia de Serdedelo</p>
        </div>
        <div class="member">
            <img src="\..\recursos\TES.jpg" alt="">
            <h2>Fernando Fiúza</h2>
            <p>Tesoureiro da Junta de Freguesia de Serdedelo</p>
        </div>
    </div>
    </section>

    <!--Eventos / Pontos Turisticos-->

    <section class="informacao" id="Informacao">
        <div class="testimonial mySwiper">
          <div class="testi-content swiper-wrapper">
            <div class="slide swiper-slide">
              <img src="\..\recursos\CABRITA.jpg" alt="" class="image" />
              <p>
                O Percurso do Carvalhal do Trovela é um percurso pedestre denominado de pequena rota. As respetivas marcações e sinalizações obedecem às normas internacionais. O percurso permite percorrer e contemplar uma das maiores manchas de carvalhal existentes no concelho de Ponte de Lima, bem como observar, ouvir e sentir a riquíssima biodiversidade associada. 
              </p>
  
              <div class="details">
                <span class="name">Trovela</span>
                <span class="job">Ponto Turístico</span>
              </div>
            </div>
            <div class="slide swiper-slide">
              <img src="\..\recursos\58181341.jpg" alt="" class="image" />
              <p>
                O povoamento do seu território atinge épocas pré-históricas, uma vez que está situado abaixo de um castro que parece ter sido muito importante.
                Trata-se de uma povoação fortificada, situada num local de difícil acesso, colinas ou montes, em permanente estado de defesa.
                Referida em documentação do século XI (“villa Cersetello” ou “villa Zercedelo”) e nas inquirições do século XIII (‘Cerdedelo”, sabe-se que já no século XII existiam no julgado medieval ou terra de Penela duas paróquias de Serzedelo: A do mosteiro de Santa Marta e a de orago S. João, formando ambas o couto do referido mosteiro, que era demarcado por padrões.
              </p>
  
                <div class="details">
                <span class="name">História</span>
              </div>
            </div>
            <div class="slide swiper-slide">
              <img src="NEW.png" alt="" class="image" />
              <p>
                 A Igreja de Santa Marta e a Capela de S.João, ambas situadas no centro de Serdedelo, são dos poucos Pontos Turísticos que esta pequena freguesia pode oferecer.
              </p>

              <div class="details">
                <span class="name">Igreja e Capela de S.joão</span>
                <span class="job">Ponto Turístico</span>
              </div>
            </div>
          </div>
          <div class="swiper-button-next nav-btn"></div>
          <div class="swiper-button-prev nav-btn"></div>
          <div class="swiper-pagination"></div>
        </div>
      </section>

      <!--Noticias-->
          
      <section class="noticia" id="Noticias">
        <h1 class="pb-3 mb-4 border-bottom ms-5 n-noticia">Noticias</h1>
      <div class="wrapper">
            <?php foreach($noticias as $noticia): ?>
                <div>
                    <?php echo '<img class="  pb-3 pe-3" src="' . $noticia['foto'] . '" alt="" align="left" width="300" height="200">';?>
                    <h2><?= $noticia['titulo']; ?></h2>
                    <h5><?= $noticia['texto']; ?></h5>
                    <hr>
                </div>
            <?php endforeach; ?>
        </div>
      </section>
      
      <!--Formulario-->

    <section class="forms" id="Formulario">
        <div class="container">
          <div class="content">
            <div class="left-side">
              <div class="address details">
                <i class="fas fa-map-marker-alt"></i>
                <div class="topic">Endereço</div>
                <div class="text-one">Largo do Cruzeiro, Serdedelo</div>
                <div class="text-two">Ponte de Lima</div>
              </div>
              <div class="phone details">
                <i class="fas fa-phone-alt"></i>
                <div class="topic">Telefone</div>
                <div class="text-one">258 749 413</div>
              </div>
              <div class="email details">
                <i class="fas fa-envelope"></i>
                <div class="topic">E-mail</div>
                <div class="text-one">juntaserdedelo@hotmail.com</div>
              </div>
            </div>
            <div class="right-side">
              <div class="topic-text">Envia-nos uma Mensagem!</div>
            <form action="#">
              <div class="input-box">
                <input type="text" placeholder="Nome">
              </div>
              <div class="input-box">
                <input type="text" placeholder="E-mail">
              </div>
              <div class="input-box message-box">
                <textarea placeholder="Mensagem"></textarea>
              </div>
              <div class="button">
                <input type="button" value="Enviar" >
              </div>
            </form>
          </div>
          </div>
        </div>
      </section>

      <!--Footer-->

      <footer class="footer-distributed">
        <div class="footer-left">
            <p class="footer-links"> IPVC - ESTG | Programação Web - TPSI

            </p>
            <p class="footer-company-name">Copyright © 2023 Cristiano Fonseca rights reserved</p>
        </div>
        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Largo do Cruzeiro, Serdedelo</span>
                    Ponte de Lima</p>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <p>258 749 413</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p>juntaserdedelo@hotmail.com</p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>Sobre Serdedelo:</span>
                Serdedelo é uma freguesia portuguesa do município de Ponte de Lima, com 6,85 km² de área e 429 habitantes (censo de 2021). A sua densidade populacional é 62,6 hab./km².
            </p>
        </div>
    </footer>

    <script src="Website\Bundle\swiper-bundle.min.js"></script>
    <script src="Website\Bundle\script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>