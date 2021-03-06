<section id="contact" class="contact section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contato</h2>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <div class="info-box mb-4">
            <i class="bx bx-map"></i>
            <h3>Nosso Endereço</h3>
            <p><?=CONF_SITE_ADDR_STREET?>, <?=CONF_SITE_ADDR_NUMBER?></p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-envelope"></i>
            <h3>Nosso Email</h3>
            <p><?=CONF_MAIL_SUPPORT?></p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-phone-call"></i>
            <h3>Nosso Telefone</h3>
            <p><?=CONF_SITE_PHONE?></p>
          </div>
        </div>

      </div>

      <div class="row">

        <div class="col-lg-6 ">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.8352151836702!2d-51.12285778443183!3d-30.04158503810509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95197620be030951%3A0xa8ef44adb9c39d3b!2sR.%20Mario%20Juarez%20de%20Oiveira%2C%20327%20-%20Prot%C3%A1sio%20Alves%2C%20Porto%20Alegre%20-%20RS%2C%2091450-370!5e0!3m2!1spt-BR!2sbr!4v1599684838209!5m2!1spt-BR!2sbr"
            width="100%" height="384px" frameborder="0" style="border:0;padding:5px;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe> </div>

        <div class="col-lg-6">
          <form data-reset="true" action="<?=url("/contato")?>" method="post" role="form" class="php-email-form">
            <div class="ajax_response"></div>
            <?=csrfInput()?>
            <div class="form-row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nome Completo" required/>
              </div>
              <div class="col-md-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Seu Email" required/>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" required/>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="mb-3 text-center">
              <div class="loading"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section>
