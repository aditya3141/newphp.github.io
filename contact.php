<?php
    include ('include/header.php');
?>
<section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Contact</h2>
        </div>
        <div class="row">
          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class='bx bxs-location-plus'></i>
                <h4>Location:</h4>
                <p>Office No:03 
                  First Floor,
                  Bhaskar Plaza, Shahupuri, Kolhapur-416001.</p>
              </div>

              <div class="email">
                <i class='bx bx-envelope'></i>
                <h4>Email:</h4>
                <p>info@metrotouch.in</p>
              </div>

              <div class="phone">
                <i class='bx bxs-phone'></i>
                <h4>Call:</h4>
                <p>+91 9371812019</p>
              </div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3821.512600950718!2d74.23789091408798!3d16.70125612662757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86653ac39cb31ed7%3A0x617290f8a84d920a!2sMetrotouch%20Technologies!5e0!3m2!1sen!2sin!4v1679234573306!5m2!1sen!2sin" width="100%" height="290px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Enter Your Mobile No.</label>
                  <input type="tel" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Applying For</label><br>
                  <select name="" id="" class="con-select">
                    <option value="">Traning</option>
                    <option value="">Job</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="5" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center mb-5"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
    <?php
    include ('include/footer.php');
?>