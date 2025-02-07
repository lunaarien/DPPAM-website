<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DPPAM - Volunteer</title>
    <link rel="stylesheet" href="css/news-events.css">
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
                <li><a href="whoarewe.html">Events</a></li>
                <li><a href="contactus.html">Contact Us</a></li>
            </ul>
        </nav>
    </div>

    <div class="events-container">
        <div class="content-container">
            <div class="title-container">
                <h1>
                <span class="highlight-black">Stay Updated with the Latest </span>
                <span class="highlight-red">Events </span>
                <span class="highlight-black">and </span>
                <span class="highlight-blue">Announcements </span>
                </h1>
                <p>Get the latest updates, important announcements, and upcoming events 
                    related to the 2025 Election Volunteer Program. Stay informed about 
                    orientation schedules, training sessions, volunteer activities, and other 
                    key events happening in your community.</p>
                <p>We are committed to keeping all volunteers engaged and well-prepared for their 
                    roles in ensuring a fair and transparent election. Check back regularly for 
                    updates and be part of the movement towards responsible voting!</p>
            </div>

            <div class="boxes-container">
                <div class="box">
                    <div class="image-container">
                        <img src="img/event1.jpeg" alt="Volunteer 1">
                    </div>
                    <h3>2025 National and Local Elections: Volunteers in Action</h3>
                    <p>Volunteers are vital in ensuring a smooth, fair, and transparent election process 
                        by supporting voter education, precinct monitoring, and logistical tasks, helping 
                        make every vote count.</p>
                    <a href="announcement1.php" class="btn">Read More</a>
                </div>
                <div class="box">
                    <div class="image-container">
                        <img src="img/event2.jpg" alt="Volunteer 2">
                    </div>
                    <h3>DPPAM Hosts Successful Orientation for 2025 Election Volunteers</h3>
                    <p>DPPAM trained volunteers for the 2025 elections, preparing them for key roles 
                        in ensuring a smooth and fair voting process.  Their efforts will help ensure 
                        transparency and voter engagement.</p>
                    <a href="announcement2.php" class="btn">Read More</a>
                </div>
                <div class="box">
                    <div class="image-container">
                        <img src="img/event3.jpg" alt="Volunteer 1">
                    </div>
                    <h3>Ethical Leadership and Good Governance Seminar 2024: Empowering Community Leaders in Malabon</h3>
                    <p>The Ethical Leadership and Good Governance Seminar 2024, hosted by DPPAM in Malabon, empowered community 
                        leaders and barangay officials through expert talks by Prof. Ryan Aguinaldo and Prof. Alexander Gonzales 
                        of PUP.</p>
                    <a href="announcement3.php" class="btn">Read More</a>
                </div>
                <div class="box">
                    <div class="image-container">
                        <img src="img/event4.jpg" alt="Volunteer 2">
                    </div>
                    <h3>Disaster Preparedness Seminar Held by Diocese of Kalookan in Malabon Parish Church</h3>
                    <p>On August 31, 2024, the Diocese of Kalookan held a Disaster Preparedness Seminar at 
                        St. Clare of Assisi Parish in Malabon, with Mr. Aldrin Sevilla of the Malabon City 
                        DRRMO discussing disaster readiness. </p>
                    <a href="announcement4.php" class="btn">Read More</a>
                </div>
                <div class="box">
                    <div class="image-container">
                        <img src="img/event5.jpg" alt="Volunteer 2">
                    </div>
                    <h3>DPPAM Launches Voters' Education and Empowerment Trainers' Training in Kalookan</h3>
                    <p>On July 8, 2023, the Diocese of Kalookan's Public & Political Affairs Ministry trained over 50 parish volunteers for the Voters' 
                        Education and Empowerment Program, supporting the 2023 Barangay and SK Elections. </p>
                    <a href="announcement5.php" class="btn">Read More</a>
                </div>
            </div>
        </div>
    </div>



    <?php include 'footer.php'; ?>

    <script src="js/toggle.js"></script>
</body>
</html>
