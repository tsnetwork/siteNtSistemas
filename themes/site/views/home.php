<?php $v->layout("_theme");?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

  <div class="container-fluid" data-aos="fade-up">
    <div class="row justify-content-center">
      <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <h1>Soluções Tecnológicas para o seu Negócio</h1>
        <h2>Desenvolimento de Sites e Sistemas web por contrato mensal</h2>
        <div><a href="#about" class="btn-get-started scrollto">Saiba mais</a></div>
      </div>
      <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
        <img src="<?=theme(CONF_VIEW_THEME, "assets/img/hero-img.png")?>" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>

</section><!-- End Hero -->

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
          <img src="<?=theme(CONF_VIEW_THEME, "assets/img/about.jpg")?>" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
          <img src="<?=theme(CONF_VIEW_THEME, "/assets/img/theme/logo.png")?>" width="500px" alt="">
          <p></p>

          <p class="font-italic">
            Nossa missão é entender sua necessidade e resolve-la de forma segura e
            objetiva, prestando não somente um serviço, mas sim criando uma nova forma de
            relacionamento com você e sua empresa.
          </p>
          <p class="font-italic">
            A NT sistemas valoriza a ética, a segurança e acompanha os bons
            resultados das empresas no qual nos relacionamos. Apostamos na excelência dos nossos
            serviços e valorizamos cada cliente como se fosse único.
          </p>
          <p class="font-italic">
            A NT sistemas visa acompanhar as necessidades das empresas no mercado de
            desenvolvimento, aprimorando e estreitando relacionamento com seus clientes,
            acompanhando seus processos, estratégias e melhorando seus resultados.
          </p>

        </div>
      </div>

    </div>
  </section>

  <!-- End About Section -->
  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Serviços</h2>
        <p>Trabalhamos com desenvolvimento de sites, sistemas web, SaaS, E-commerce e Marketplace, utilizando o que há
          de mais moderno em Web</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box iconbox-blue">
            <div class="icon">
              <img src="<?=theme(CONF_VIEW_THEME, "assets/img/theme/site.svg")?>" width="200px" alt="">
            </div>
            <h4><a href="">Sites</a></h4>
            <p>Sistes dinâmicos 100% personalizados e layouts exclusivos</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box iconbox-orange ">
            <div class="icon">
              <img src="<?=theme(CONF_VIEW_THEME, "assets/img/theme/ecommerce.svg")?>" width="150px" alt="">

            </div>
            <h4><a href="">E-Commerces</a></h4>
            <p>Construções de lojas virtuais para o seu comércio</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box iconbox-orange ">
            <div class="icon">
              <img src="<?=theme("assets/img/theme/webdevelopment.svg")?>" width="150px" alt="">
            </div>
            <h4><a href="">Sistemas Personalizados</a></h4>
            <p>Desenvolvimento de Sistemas conforme a sua necessidade</p>
          </div>
        </div>

      </div>

    </div>
  </section>
  <!-- ======= Contact Section ======= -->
  <?=$v->insert("views/form")?>
  <!-- End Contact Section -->

</main><!-- End #main -->


<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
<div id="preloader"></div>


</body>

</html>
