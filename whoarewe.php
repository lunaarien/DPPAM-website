<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DPPAM - Volunteer</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
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
                <li><a href="home.php">Home</a></li>
                <li class="dropdown">
<<<<<<< HEAD
                    <a href="home.php#about" class="dropdown-toggles">About Us <i class="fa fa-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="whoarewe.php#whoarewe">Who We Are?</a></li>
                        <li><a href="whoarewe.php#mission-vision">Mission & Vision</a></li>
                        <li><a href="home.php#organization">Organization Profile</a></li>
=======
                    <a href="home.php/#about" class="dropdown-toggle">About Us <i class="fa fa-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="whoarewe.php">Who We Are?</a></li>
                        <li><a href="mission-vision.php">Mission & Vision</a></li>
                        <li><a href="organization.php">Organization Profile</a></li>
>>>>>>> c2c0f13 (updated)
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
<<<<<<< HEAD
    <div class="container">
        <section id="whoarewe">
        <div id="whoarewerow" class="row">
            <div class="col-md-6 col-lg-6 col-xl-6 mb-6">
                <h1><span>WHO</span> WE ARE?</h1>
                <p><span>DPPAM - Diocese of Caloocan Public and Political Affairs Ministry</span> is an 
                    organization dedicated to empowering individuals to actively participate in the electoral process.</p>
                <p>We focus on promoting transparency, accountability, and democratic values through various programs and initiatives. 
                    By fostering a community of engaged citizens, we aim to ensure free, fair, and credible elections that reflect the true will of the people.</p>
=======
    
    <div class="whoarewe">
        <div class="whoarewe-container">
            <!-- Text Content -->
            <div class="whoarewe-text-content">
                <h1>
                <span class="highlight-red">WHO</span>
                <span class="highlight-black">WE</span>
                <span class="highlight-blue">ARE?</span>
            </h1>
                <p>
                    <span class="highlight-smallblue">DPPAM - Diocese of Caloocan Public and Political Affairs Ministry</span> 
                    is an organization dedicated to empowering individuals to actively participate in the electoral process.
                </p>
                <br>
                <p>
                    We focus on promoting transparency, accountability, and democratic values through various programs and initiatives.
                    By fostering a community of engaged citizens, we aim to ensure free, fair, and credible elections that reflect the 
                    true will of the people.
                </p>
>>>>>>> c2c0f13 (updated)
            </div>

            <div class="image-section">
                <div class="image-container">
                    <div class="img-carousel">
                        <img src="images/whoweare1.jpeg" class="active">
                        <img src="images/whoweare2.jpg">
                        <img src="images/whoweare3.jpg">
                        <img src="images/whoweare4.jpg">
                        <img src="images/whoweare5.jpeg">
                    </div>
                </div>
<<<<<<< HEAD
            </div>
        </div>
        </section>
        <section id="mission-vision">
            <div id="mis-vis" class="row mt-6">
                
                <div class="col-md-6 col-lg-6 col-xl-6 mb-6">
                    <div class="card border-0 shadow rounded-5 p-3" id="mv-card">
                    <div class="card-body">
                        <h1 class="card-title fw-bold" id="h1-mission">Mission</h1>
                        <p class="card-text fs-4 fw-medium">PCNC is committed to enabling NGOs to amplify their mission through a credible and accessible accreditation system.</p>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 mb-6">
                    <div class="card border-0 shadow rounded-5 p-3" id="mv-card">
                    <div class="card-body">
                        <h1 class="card-title fw-bold " id="h1-vision">Vision</h1>
                        <p class="card-text fs-4 fw-medium">A trusted and self-regulating community of NGOs, participating effectively in development and nation-building.</p>
                    </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div>
        <?php include 'footer2.php'; ?>
    </div>  
</body>


<!--<script>
    document.addEventListener("DOMContentLoaded", function () {
    const dropdownToggles = document.querySelectorAll(".dropdown-toggle");

    dropdownToggles.forEach((toggle) => {
        toggle.addEventListener("click", function (event) {
            event.preventDefault();
            let parentDropdown = this.parentElement;

            // Close all other open dropdowns
            document.querySelectorAll(".dropdown").forEach((dropdown) => {
                if (dropdown !== parentDropdown) {
                    dropdown.classList.remove("active");
                }
            });

            // Toggle the clicked dropdown
            parentDropdown.classList.toggle("active");
        });
    });

    // Close dropdown if clicked outside
    document.addEventListener("click", function (event) {
        if (!event.target.closest(".dropdown")) {
            document.querySelectorAll(".dropdown").forEach((dropdown) => {
                dropdown.classList.remove("active");
            });
        }
    });
});
</script> -->
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
=======

                <div class="carousel-controls">
                    <div class="nav-buttons">
                        <button class="prev-btn">&lt;</button> <!-- Left Arrow -->
                        <button class="next-btn">&gt;</button> <!-- Right Arrow -->
                    </div>
                    <div id="dots-nav"></div> <!-- Dots Navigation -->
                </div>
            </div>
        </div>
    </div>

    <div class="additional-info">
        <p>
        Such gatherings of the Catholic Church hierarchy were previously participated in only by the ordained. But PCP II was different. 
        It invited lay participants, some 145 women and men from various demographic realities. In PCP II, we heard, we saw, we touched the 
        truth that we are co-responsible for the mission of the Church, of making the Kingdom of God present in our here and now. 
        Bringing heaven on earth specially for the poor, marginalized, and forgotten. That comprising 99.99% of the baptized, the saving 
        work of Christ will not move forward if we the laity don’t move. Another situational reality foisted on us was politics. 
        The way politics is practiced in the Philippines was a major stumbling block to the renewal of Christian life. Not only that, 
        but also to the transformation of society, which was sliding into a dismal state of corruption. 
        </p>
        <br>
        <p>
        Our hearts were burning within us with our newfound dignity. So we rushed out from PCP II raring to bring about change. 
        His Eminence Jaime L. Cardinal Sin, ever alert to the breath of the Spirit, and Haydee Yorac, feisty advocate of democracy, 
        elections and peace, provided us with the direction and challenge to plunge into politics by way of the forth coming 1992 
        synchronized national and local elections, the first after the departure of the dictatorship. And so PPCRV came to be. 
        None of us were politicians. None of us owned corporations or huge bank accounts. 
        </p>
        <br>
        <p>
        None of us were celebrities. But we had faith, faith on fire that if God is with us, who and what can be against us! 
        Riding high on that belief helped PPCRV tremendously in overcoming challenges of Comelec accreditation, funds, materials, 
        and other such logistics. The Church infrastructure proved to be the fastest and most efficient way of cascading programs 
        and mobilizing volunteers. It still is. At times the labyrinth of Church commissions and interlocking functions, not to 
        mention variances in leadership, would be a furnace test for collaboration and communion… fears from within. Struggles and 
        fears which rendered the dying and rising rhythm of Christian life more pronounced, more felt for PPCRV. But during such 
        testing, courage and imagination emerged from PPCRV’s faith base.  
        </p>
        <br>
        <p>
        None of us were celebrities. But we had faith, faith on fire that if God is with us, who and what can be against us! 
        Riding high on that belief helped PPCRV tremendously in overcoming challenges of Comelec accreditation, funds, materials, 
        and other such logistics. The Church infrastructure proved to be the fastest and most efficient way of cascading programs 
        and mobilizing volunteers. It still is. At times the labyrinth of Church commissions and interlocking functions, not to 
        mention variances in leadership, would be a furnace test for collaboration and communion… fears from within. Struggles and 
        fears which rendered the dying and rising rhythm of Christian life more pronounced, more felt for PPCRV. But during such 
        testing, courage and imagination emerged from PPCRV’s faith base.  
        </p>
        <br>
        <p>
        It was the courage to take in the dying rhythm without surrendering to defeat; the imagination to make full use of the 
        rising rhythm to accelerate our mission. 
        </p>
        <br>
        <p>
        Volunteerism has become a PPCRV icon. Many of the PPCRV volunteers come from  unproclaimed lives, from the ranks of ordinary people. 
        Many are the poor. And lately so many from the young. In common is the desire for a space to be involved in elections in a non-partisan 
        way. They simply want to serve without any expectations for recompense nor demands of ideology. For the volunteer to be able to serve 
        is an utterance of one’s human dignity. During elections, these volunteers proclaim in every polling precinct the good news that love 
        of God and country is inseparable and a foundational base of democracy. 
        </p>
        <br>
        <p>
        PPCRV, a child of the Church, the first concrete laity response to the call for renewal of PCP II continues to find strength from the 
        parish, its base of service. Like its Mother the Church, PPCRV is open to every volunteer, believer or non-believer for as long as the 
        olunteer is non-partisan, non-violent and adheres to democracy. PPCRV carries on its mission in every diocese as a Community of Disciples 
        that is a Church of the Poor and for the Poor. The center of gravity of its service, from the beginning till now, is tilted towards the 
        poor and the youth. Voters from these sectors are the most vulnerable to exploitation and repression of their absolute right to suffrage. 
        Commitment to them in our election journey is drinking from our own wells. 
        </p>
        <br>
        <p>
        The PPCRV history is rich. Twenty-eight years of seeking and working with patient endurance for CHAMP Elections – Clean Honest Accurate 
        Meaningful Peaceful. 
        </p>
    </div>

    <?php include 'footer.php'; ?>

    <script src="js/carousel.js"></script>
</body>
</html>
>>>>>>> c2c0f13 (updated)
