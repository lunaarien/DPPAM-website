<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DPPAM - Volunteer</title>
    <link rel="stylesheet" href="css/profile.css">
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
                    <a href="home.php/#about" class="dropdown-toggle">About Us <i class="fa fa-chevron-down"></i></a>
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
                <li><a href="whoarewe.html">News & Updates</a></li>
                <li><a href="contactus.html">Contact Us</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
        </nav>
    </div>

    <section class="org-profile">
        <div class="filter-section">
            <label for="city">Select City:</label>
            <select id="city">
            <option value="malabon">Malabon</option>
            <option value="navotas">Navotas</option>
            <option value="novaliches">Novaliches</option>
            </select>

            <label for="church">Select Church:</label>
            <select id="church">
            </select>
        </div>

        <div class="profile-container">
            <div class="profile-row">
            <div class="profile-card">
                <img src="coordinator1.jpg" alt="Coordinator Name">
                <h3>John Doe</h3>
                <p><strong>Position:</strong> Coordinator</p>
                <p><strong>Member Since:</strong> 2018</p>
                <p><strong>Church:</strong> St. Peter Parish</p>
                <p><strong>City:</strong> Malabon</p>
                <p class="description">"Dedicated to serving the community with passion."</p>
            </div>

            <div class="profile-card">
                <img src="assistant1.jpg" alt="Assistant Name">
                <h3>Jane Smith</h3>
                <p><strong>Position:</strong> Assistant</p>
                <p><strong>Member Since:</strong> 2020</p>
                <p><strong>Church:</strong> St. Peter Parish</p>
                <p><strong>City:</strong> Malabon</p>
                <p class="description">"Always ready to lend a helping hand!"</p>
            </div>
            </div>

            
        </div>
    </section>




        

    <?php include 'footer.php'; ?>

    <script src="js/selection.js"></script>
</body>
</html>
