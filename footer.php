<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/footer.css">
<footer>
  <div class="footer-container">
    <div class="logo-section">
      <img src="img/coat.png" alt="DPPAM Logo" class="logo">
      <p>Servify | DPPAM</p>
    </div>

    <div class="cta-section">
      <p>READY TO MAKE A DIFFERENCE?</p>
      <h2>BE A MEMBER TODAY!</h2>
      <button class="join-button">JOIN US</button>
    </div>
  </div>

  <div class="links-section">
    <div class="icons-section">
      <a href="https://www.facebook.com/dioceseofkalookan" class="social-link" aria-label="Facebook"><i
          class="fab fa-facebook-f"></i></a>
      <a href="https://www.youtube.com/channel/UCPFa90Oguv7zeX7qnJrstBw" class="social-link" aria-label="YouTube"><i
          class="fab fa-youtube"></i></a>
    </div>

    <div class="links">
      <div>
        <h4>Features</h4>
        <ul class="footer-links">
          <li><a href="home.php">Home</a></li>
          <li><a href="home.php#about">About Us</a></li>
          <li><a href="home.php#volunteers">Volunteers</a></li>
          <li><a href="home.php#news-events">Events</a></li>
          <li><a href="home.php#resources">Resources</a></li>
          <li><a href="home.php#contactus">Contact Us</a></li>
        </ul>
      </div>
      <div>
        <h4>Company</h4>
        <ul class="footer-links">
          <li><a href="whoweare.php">Who We Are?</a></li>
          <li><a href="mission_vision.php">Mission/Vision</a></li>
          <li><a href="organization.php">Organization Profile</a></li>
        </ul>
      </div>
      <div>
        <h4>Resources</h4>
        <ul class="footer-links">
          <li><a href="#">Volunteers Guide</a></li>
          <li><a href="#">Election Guidelines</a></li>
        </ul>
      </div>
    </div>

    <div class="contact-us">
      <h4>Contact Us</h4>
      <p>Address: 127 Kalayaan</p>
      <p>Email: dppam@gmail.com</p>
      <p>Phone: +63 960 520 4290</p>
    </div>
  </div>
  </div>

  <div class="footer-bottom">
    <p>© 2025 DPPAM. All Rights Reserved. | <a href="#">Privacy Policy</a> | <a href="#">Terms and Conditions</a> | <a
        href="#">Accessibility Statement</a></p>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function () {
    $(".join-button").click(function () {
      window.location.href = "/signup";
    });
  });
</script>