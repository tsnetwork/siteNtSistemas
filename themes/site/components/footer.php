
<!-- ======= Footer ======= -->
<footer id="footer">

  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-md-6 footer-contact">
          <img src="<?=theme(CONF_VIEW_THEME, "assets/img/theme/logo.png")?>" width="200px" alt="">
          <br><br><br>
          <p>
            <?=CONF_SITE_ADDR_STREET?>, <?=CONF_SITE_ADDR_NUMBER?> <?=(!empty(CONF_SITE_ADDR_COMPLEMENT) ? " | " . CONF_SITE_ADDR_COMPLEMENT : "")?><br>
            <?=CONF_SITE_ADDR_CITY?>/<?=CONF_SITE_ADDR_STATE?> - <?=CONF_SITE_ADDR_ZIPCODE?><br><br>
            <strong>Fone:</strong> <?=CONF_SITE_PHONE?><br>
            <strong>Email:</strong> <?=CONF_MAIL_SUPPORT?><br>
          </p>
        </div>

        <div class="col-lg-2 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Sobre Nós</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Serviços</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Contato</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">

        </div>

        <div class="col-lg-3 col-md-6 footer-newsletter">
          <h4>Receba nossas Newsletter</h4>

          <form action="" method="post">
            <input type="email" name="email"><input type="submit" value="Subscribe">
          </form>
        </div>

      </div>
    </div>
  </div>

  <div class="container">

    <div class="copyright-wrap d-md-flex py-4">
      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>NT Sistemas Web</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://api.whatsapp.com/send?phone=<?=CONF_SOCIAL_WHATSAPP?>" class="whatsapp">
          <i class='bx bxl-whatsapp'></i>
        </a>
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>

  </div>
</footer><!-- End Footer -->