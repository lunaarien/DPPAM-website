<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DPPAM - Volunteer</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/bootstrap.css">
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
                    <a href="#about" class="dropdown-toggle">About Us <i class="fa fa-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="about-us/whoarewe.php">Who We Are?</a></li>
                        <li><a href="#mv">Mission & Vision</a></li>
                        <li><a href="#organization">Organization Profile</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#volunteers" class="dropdown-toggle">Volunteers<i class="fa fa-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#upce">UPCE</a></li>
                        <li><a href="#vad">VAD</a></li>
                        <li><a href="#psv">PSV</a></li>
                        <li><a href="#eo">Election Observers</a></li>
                        <li><a href="#pollwatchers">Types of Pollwatchers</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#resources" class="dropdown-toggle">Resources<i class="fa fa-chevron-down"></i></a>
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
    <div class="container">
        <div id="whoarewerow" class="row">
            <div class="col-md-6 col-lg-6 col-xl-6 mb-6">
                <h1><span>WHO</span> WE ARE?</h1>
                <p><span>DPPAM - Diocese of Caloocan Public and Political Affairs Ministry</span> is an 
                    organization dedicated to empowering individuals to actively participate in the electoral process.</p>
                <p>We focus on promoting transparency, accountability, and democratic values through various programs and initiatives. 
                    By fostering a community of engaged citizens, we aim to ensure free, fair, and credible elections that reflect the true will of the people.</p>
            </div>
            <div class="col-md-6 float-md-end mb-6 ms-md-6">
                <div class="img-carousel">
                    <img src="images/whoweare1.jpeg" class="active">
                    <img src="images/whoweare2.jpg">
                    <img src="images/whoweare3.jpg">
                    <div id="dots-nav">
                        <div id="dots"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="mission-vision" class="row mt-6">
            <div class="col-md-6">
                <div class="card border-0 shadow rounded-5 p-3" id="mv-card">
                <div class="card-body">
                    <h1 class="card-title fw-bold" id="h1-mission">Mission</h1>
                    <p class="card-text fs-4 fw-medium">PCNC is committed to enabling NGOs to amplify their mission through a credible and accessible accreditation system.</p>
                </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-0 shadow rounded-5 p-3" id="mv-card">
                <div class="card-body">
                    <h1 class="card-title fw-bold " id="h1-vision">Vision</h1>
                    <p class="card-text fs-4 fw-medium">A trusted and self-regulating community of NGOs, participating effectively in development and nation-building.</p>
                </div>
                </div>
            </div>
        </div>
    </div>

</body>

<?php include 'footer2.php'; ?>

<!--Image Carousel Script-->
<script>

const images = document.querySelectorAll('.img-carousel img');
const dots = document.querySelector('#dots');

let speed = 3000;
let index = 0;
let intervalID;

images.forEach((image, i) => {
    const span = document.createElement('span')
    span.className = 'dot';
    if (i === 0) span.classList.add('active');
    span.addEventListener('click', () => {
        index = i;
        startInterval();
        updateContent();
    })
    dots.appendChild(span);

})

startInterval()
function startInterval(){
    if (intervalID)clearInterval(intervalID);
    intervalID = setInterval(() => {
        index ++;
        if (index === images.length) index = 0;
        updateContent();
    }, speed);

}
updateContent()
function updateContent(){
    images.forEach(item => item.classList.remove('active'));
    images[index].classList.add('active');

    const dots = document.querySelectorAll('.dot');
    dots.forEach(item => item.classList.remove('active'));
    dots[index].classList.add('active');

}
</script>
</html>