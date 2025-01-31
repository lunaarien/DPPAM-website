<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DPPAM - Volunteer</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>
<body>
    <div class="navbar-container">
        <nav class="navbar">
            <div class="logo">
                <img src="img/logo.png" alt="Logo" class="logo-image"> 
                <span class="ser">Serv</span><span class="fy">ify</span>
            </div>          

            <div class="hamburger" id="hamburger-icon">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <ul class="nav-links" id="nav-links">
                <li><a href="#home">Home</a></li>
                <li class="dropdown">
                    <a href="#about" class="dropdown-toggles">About Us <i class="fa fa-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="whoarewe.php">Who We Are?</a></li>
                        <li><a href="mission-vision.php">Mission & Vision</a></li>
                        <li><a href="organization.php">Organization Profile</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#volunteers" class="dropdown-toggles">Volunteers<i class="fa fa-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#upce">UPCE</a></li>
                        <li><a href="#vad">VAD</a></li>
                        <li><a href="#psv">PSV</a></li>
                        <li><a href="#eo">Election Observers</a></li>
                        <li><a href="#pollwatchers">Types of Pollwatchers</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#resources" class="dropdown-toggles">Resources<i class="fa fa-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#guide">Volunteers Guide</a></li>
                        <li><a href="#guidelines">Elections Guidelines</a></li>
                    </ul>
                </li>
                <li><a href="whoarewe.html">News & Updates</a></li>
                <li><a href="contactus.html">Contact Us</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
        </nav>
    </div>

    <section class="hero" id="home">
        <div class="hero-text">
            <h2>
                <span class="highlight-red">BAYANIHAN</span> 
                <span class="highlight-black">PARA SA MALINIS NA</span>
                <span class="highlight-blue">HALALAN</span>
            </h2>
            <p>Welcome to the official website of <strong>Diocese of Caloocan Public and Political Affairs Ministry (DPPAM)</strong>. We are dedicated to empowering communities through active participation in free and fair elections. Be a Volunteer today and make a difference!</p>
            <a href="#" class="btn">BE A VOLUNTEER!</a>
        </div>
    </section>

    <section class="about" id="about">
        <div class="about-container">
            <div class="about-text">
                <h2>
                    <!-- <span class="highlight-black">Learn more</span> 
                    <span class="highlight-red">about</span>
                    <span class="highlight-blue">us</span><br>  -->
                    <span class="highlight-black">Learn more about us</span><br>
                    <span class="highlight-black">and discover our</span><br>
                    <span class="highlight-red1">Mission</span>
                    <span class="highlight-black1">and</span>
                    <span class="highlight-blue1">Vision</span>
                    <span class="highlight-black1">to understand our</span><br>
                    <span class="highlight-black1">commitment to democracy.</span>
                </h2>
                <a href="whoarewe.php" class="btn">LEARN MORE <i class="fa fa-arrow-right"></i></a>
            </div>
    
            <div class="about-image">
                <img src="img/vision-mission.jpg" alt="About Us Image">
            </div>
        </div>
    </section>
    

    <section class="organization" id="organization">
        <div class="organization-container">
            <div class="organization-content">
                <div class="organization-text">
                    <h2>
                        <span class="highlight-white">ORGANIZATIONAL </span><br>
                        <span class="highlight-blue">PROFILES</span>
                    </h2>
                </div>
                <div class="organization-details">
                    <p>People behind DPPAM. Dedicated leaders and coordinators working together
                        to uphold democratic values and ensure free and fair elections.</p>
                    <a href="#" class="btn">See More <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
    
            <main id="carousel">
                <div class="item">
                    <img src="images/1.jpg">
                    <h3 class="name">Sally Sharpe</h3>
                    <p class="occupation">Member since 2020</p>
                    <p class="testimonial">Founder of Diocese of Caloocan Public and Political Affairs Ministry - DPPAM</p>
                  </div>
                  <div class="item">
                    <img src="images/2.jpg">
                    <h3 class="name">Michael John</h3>
                    <p class="occupation">Member since 2020</p>
                    <p class="testimonial">Founder of Diocese of Caloocan Public and Political Affairs Ministry - DPPAM</p>
                  </div>
                  <div class="item">
                    <img src="images/3.jpg">
                    <h3 class="name">Mikayla Eddie</h3>
                    <p class="occupation">Member since 2020</p>
                    <p class="testimonial">Founder of Diocese of Caloocan Public and Political Affairs Ministry - DPPAM</p>
                  </div>
                  <div class="item">
                    <img src="images/4.jpg">
                    <h3 class="name">Eve Smith</h3>
                    <p class="occupation">Member since 2020</p>
                    <p class="testimonial">Founder of Diocese of Caloocan Public and Political Affairs Ministry - DPPAM</p>
                  </div>
                  <div class="item">
                    <img src="images/5.jpg">
                    <h3 class="name">Luke Maxwell</h3>
                    <p class="occupation">Member since 2020</p>
                    <p class="testimonial">Founder of Diocese of Caloocan Public and Political Affairs Ministry - DPPAM</p>
                  </div>
            </main>
    
            <div class="swiper-arrows">
                <i class="fa fa-arrow-left" id="prev"></i>
                <i class="fa fa-arrow-right" id="next"></i>
            </div>
        </div>
    </section>

    <section class="volunteers" id="volunteers">
        <div class="volunteers-container">
            <div class="volunteers-content">
                <div class="volunteers-text">
                    <h2>
                        <span class="highlight-white">TYPES OF </span><br>
                        <span class="highlight-red">VOLUNTEERS</span>
                    </h2>
                </div>
                <div class="volunteers-details">
                    <p>Here are the different roles and duties of volunteers who help ensure fair and 
                        smooth elections. Learn more about the different types of Pollwatchers.</p>
                    <a href="#about" class="btn">Types of Pollwatchers <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="volunteers-boxes">
                <div class="volunteer-box">
                    <img src="img/upc.jpg" alt="Volunteer 1">
                    <h3>Unofficial Parallel Count Encoder (UPCE)</h3>
                    <a href="#" class="btn">See More</a>
                </div>
                <div class="volunteer-box">
                    <img src="img/vad.jpg" alt="Volunteer 1">
                    <h3>Voters' Assistancee Desk (VAD)</h3>
                    <a href="#" class="btn">See More</a>
                </div>
                <div class="volunteer-box">
                    <img src="img/psv.jpg" alt="Volunteer 1">
                    <h3>Election Monitors or Observers (EO)</h3>
                    <a href="#" class="btn">See More</a>
                </div>
                <div class="volunteer-box">
                    <img src="img/eo.jpg" alt="Volunteer 1">
                    <h3>Polling Station Volunteers (PSV)</h3>
                    <a href="#" class="btn">See More</a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer2.php'; ?>
    
    <script src="js/card-slider.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
