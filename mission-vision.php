<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DPPAM - Volunteer</title>
    <link rel="stylesheet" href="css/mission-vision.css">
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
                    <a href="#about" class="dropdown-toggle">About Us <i class="fa fa-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="whoarewe.php">Who We Are?</a></li>
                        <li><a href="mission-vision.php">Mission & Vision</a></li>
                        <li><a href="organization.php">Organization Profile</a></li>
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
                <li><a href="events.php">Events</a></li>
                <li><a href="contactus.html">Contact Us</a></li>
            </ul>
        </nav>
    </div>
    
    <div class="mission-vision">
        <div class="mission-vision-container">
            <div class="mission-vision-text-content">
                <div class="section-title">
                    <h2>Our Mandate</h2>
                </div>
                
                <p>
                    <span class="highlight-smallblue">As the citizen’s arm of the Commission on Elections, PPCRV’s mandates 
                        include the following:</span> 
                </p>
                <br>
                <ul class="custom-checklist">
                    <li>To continuously conduct voters’ education nationwide, especially in far-flung areas not reached by Comelec.</li>
                    <li>To monitor the conduct of the elections (poll watching) and assist the voting populace in every polling precinct in the country.</li>
                    <li>To conduct an unofficial parallel count of the electronic results. This is the centerfold of the PPCRV Command Center.</li>
                </ul>
            </div>

            <div class="mission-vision-image-section">
                <div class="mission-vision-image-container">
                    <div class="img">
                        <img src="img/mandate.jpg" alt="Mission and Vision">
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="info-cards">
        <div class="card">
            <div class="card-icon">
            <i class="fas fa-bullseye"></i> 
            </div>
            <div class="card-title">Mission</div>
            <div class="card-content">
            <p>Tulad ni Hesus, bukas na niyayakap ang bawat isa Lalo na ang pamilya at kabataan, 
                masigasig na nakikinig, nangingilatis, at tumutugon sa daing ng mga nasa laylayan, sa iba't ibang sector, 
                sa mga isyung panlipunan, at sangnilikha sa pamamagitan ng paghuhubog at pagpapatibay ng mga buhay at 
                gising na BEC at iba pang pamayanan.</p>
            </div>
        </div>

        <div class="card">
            <div class="card-icon">
            <i class="fas fa-eye"></i>
            </div>
            <div class="card-title">Vision</div>
            <div class="card-content">
            <p>Tayo ay Bayan ng Diyos na may malalim na pananampalataya,nagmamalasakit, at nagkakaisang naglalakbay kasama si Hesus, sa patnubay 
                ng Espiritu Santo, tungo sa pamamayani ng kagandahang-loob ng Diyos, kaisa ng Birheng Maria at ng ating patrong San Roque.</p>
            </div>
        </div>

        <div class="card">
            <div class="card-icon">
            <i class="fas fa-hands-helping"></i> 
            </div>
            <div class="card-title">Core Values</div>
            <div class="card-content">
            <p>At DPPAM, our work is guided by a strong set of values that shape our commitment to fair and transparent elections. 
                These principles define how we operate and inspire our volunteers to uphold democracy with integrity and dedication.</p>
            <ul>
                <li>Integrity – Committed to honesty and transparency in all electoral processes.</li>
                <li>Volunteerism – Empowering citizens to take an active role in democracy.</li>
                <li>Accountability – Ensuring fair and ethical electoral participation.</li>
                <li>Collaboration – Working with communities and institutions for credible elections.</li>
                <li>Service – Dedicated to upholding the right to vote and fair election practices.</li>
            </ul>
            </div>
        </div>
    </div>

    <div class="bottom-info-section">
        <div class="info-box left">
            <h3>10,000+</h3>
            <p>volunteers mobilized nationwide for election monitoring.</p>
        </div>
        <div class="info-box center">
            <h3>50+</h3>
            <p>partnerships with schools, churches, and civic groups.</p>
        </div>
        <div class="info-box right">
            <h3>1,000+</h3>
            <p>precincts monitored for fair and honest elections.</p>
        </div>
    </div>


    <?php include 'footer.php'; ?>

    <script src="js/carousel.js"></script>
</body>
</html>
