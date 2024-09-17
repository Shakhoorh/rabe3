<!DOCTYPE html>
<html lang="en">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-16633196447"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-16633196447');
</script>
<?php include'header.php'?>

<body>

  <?php include'nav.php'?>

  <main class="main">

    
    
    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>تواصل</span>
        <h2>تواصل معنا </h2>
        <p></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
            <i class="bi bi-geo-alt" style="color: #537bb4;"></i>

              <h3>العنوان</h3>
              <p style="text-align: center;">PPVG+22V, King Salman Neighborhood, Riyadh 12443</p>
            </div>
          </div><!-- End Info Item -->

          <div style="color: #537bb4;" class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone" style="color: #537bb4;"></i>
              <h3>اتصل بنا</h3>
              <p>+966 5399 838 38</p>
              <p>+966 5399 839 39</p>
             
            </div>
          </div><!-- End Info Item -->

          <div  style="color: #537bb4;" class="col-lg-2 col-md-4">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope" style="color: #537bb4;"></i>
              <h3>راسلنا</h3>
              <p>pmo@qiam.com.sa</p>
              <br>
            
            </div>
          </div><!-- End Info Item -->
          <div  style="color: #537bb4;" class="col-lg-2 col-md-4">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-twitter-x"style="color: #537bb4;"></i> 
              <h3>تواصل اجتماعي</h3>
              <p></p>
              <br>
             

    
       
            </div>
          </div>
        </div>
        <div  style="color: #537bb4;" class="row gy-4 mt-1">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d226.47145771988693!2d46.72489349888989!3d24.742553854478412!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f036e74b549e9%3A0x9fa9c815db3b2bb2!2z2LTYsdmD2Kkg2YLZitmFINin2YTYudmC2KfYsdmK2Kk!5e0!3m2!1sen!2ssa!4v1722424482808!5m2!1sen!2ssa" frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div><!-- End Google Maps -->

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="400">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->


  </main>
  <style>
      /* for desktop */
      .whatsapp_float {
          position: fixed;
          width: 60px;
          height: 60px;
          bottom: 40px;
          right: 40px;
          background-color: #25d366;
          color: #FFF;
          border-radius: 50px;
          text-align: center;
          font-size: 30px;
          box-shadow: 2px 2px 3px #999;
          z-index: 100;
      }

      .whatsapp-icon {
          margin-top: 16px;
      }

      /* for mobile */
      @media screen and (max-width: 767px) {
          .whatsapp-icon {
              margin-top: 10px;
          }

          .whatsapp_float {
              width: 40px;
              height: 40px;
              bottom: 20px;
              right: 10px;
              font-size: 22px;
          }
      }</style>
<a
        href="https://wa.me/966539449337"
        class="whatsapp_float"
        target="_blank"
        rel="noopener noreferrer"
      >
        <i dir="ltr" class="fa fa-whatsapp whatsapp-icon"></i>
      </a>
   
  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>


  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>