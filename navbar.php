<style>
/* NAVBAR */
.navbar-container {
    position: fixed; 
    top: 20px; 
    left: 20px; 
    right: 20px; 
    z-index: 1000; 
    background: linear-gradient(to right, 
        #E8F6FF 21%,   
        #B0E0FE 65%,  
        #50CCFA 91%,  
        #3AA7CF 100%);
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2); 
    border-radius: 15px;
    padding: 10px 30px; 
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
}

.nav-links {
    list-style-type: none;
    display: flex;
    margin-right: 70px;
    gap: 30px; 
    position: relative;
}

.nav-links li {
    position: relative; 
}

.nav-links li a {
    text-decoration: none;
    color: #262626;
    font-size: 17px;
    font-family: 'Abyssinica SIL', serif;
    font-weight: 500;
    transition: color 0.3s ease;
    padding: 5px 8px;
}

.nav-links li a:hover {
    color: #007BFF;
}



/* ABOUT US & RESOURCES DROPDOWN */
.dropdown-menu {
    list-style: none;
    position: absolute;
    left: -25px;
    background: #ffffff; 
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2); 
    border-radius: 10px;
    display: none; 
    padding: 10px 0;
    z-index: 1000;
    min-width: 160px; 
}

.dropdown-menu li a {
    text-decoration: none;
    display: block;
    padding: 10px 15px; 
    font-size: 15px;
    color: #333; 
    transition: background 0.5s ease, color 0.3s ease;
}

.dropdown-menu li a:hover {
    background-color: #f0f8ff; 
    color: #007BFF;
}

.dropdown:hover .dropdown-menu{
    display: block;
}

.dropdown-toggles i {
    margin-left: 5px; 
    font-size: 12px;
    transition: transform 0.3s ease;
}

.nav-links li:hover .dropdown-toggles i {
    transform: rotate(180deg); 
}



/* NAVBAR LOGO */
.logo {
    display: flex;
    align-items: center;
}

.logo-image {
    width: 50px;
    height: 50px;
    margin-right: 10px;
}

.ser {
    color: #CF000A;
    font-size: 20px;
    font-weight: bold;
}

.fy {
    color: #4FA3E5;
    font-size: 20px;
    font-weight: bold;
}

/* HAMBURGER MENU */
.hamburger {
    display: none;
    flex-direction: column;
    gap: 6px;
    cursor: pointer;
}

.hamburger span {
    width: 20px;
    height: 2px;
    background-color: #333;
    border-radius: 2px;
}

@media screen and (max-width: 1024px) {
    .logo-image {
        width: 40px; 
        height: 40px;
    }
    
    .ser, .fy {
        font-size: 15px; 
    }
    
    .navbar-container {
        padding: 8px 15px;
    }

    .nav-links {
        display: none; 
        flex-direction: column;
        gap: 4px; /* Reduced gap between navbar link boxes for mobile */
        padding: 10px;
        background-color: rgba(211, 211, 211, 1); /* Box background color */
        position: absolute; /* Position the box on top */
        top: 65px; /* Adjust this value based on your navbar height */
        left: 83%; /* Position box in the center */
        transform: translateX(-50%); /* Offset to center the box */
        width: 30%; /* Adjust width to make it fit nicely */
        border-radius: 5px;
        box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.2); /* Optional shadow for the box */
        transition: all 0.3s ease; /* Smooth transition when toggling */
    }

    .navbar {
        flex-wrap: wrap;
        padding: 10px 20px; 
        position: relative; 
        z-index: 10; 
    }

    .hamburger {
        display: flex; 
    }

    .nav-links.active {
        display: flex; 
    }

    .nav-links li a {
        font-size: 16px; 
        padding: 5px 8px; 
    }

    .logo {
        flex-direction: row; 
        align-items: center;
    }
}

@media screen and (max-width: 480px) {
    .ser, .fy {
        font-size: 16px; 
    }

    .logo-image {
        width: 35px; 
        height: 35px;
    }
    
    .nav-links li a {
        font-size: 13px; 
        padding: 4px 6px; 
    }

    .navbar {
        padding: 10px 15px; 
    }
}

</style>
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
                    <a href="home.php#about" class="dropdown-toggles">About Us <i class="fa fa-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="whoarewe.php">Who We Are?</a></li>
                        <li><a href="mission-vision.php">Mission & Vision</a></li>
                        <li><a href="organization.php">Organization Profile</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="volunteers.php" class="dropdown-toggles">Volunteers<i class="fa fa-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#upce">UPCE</a></li>
                        <li><a href="#vad">VAD</a></li>
                        <li><a href="#psv">PSV</a></li>
                        <li><a href="#eo">Election Observers</a></li>
                        <li><a href="#pollwatchers">Types of Pollwatchers</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="resources.php" class="dropdown-toggles">Resources<i class="fa fa-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#guide">Volunteers Guide</a></li>
                        <li><a href="#guidelines">Elections Guidelines</a></li>
                    </ul>
                </li>
                <li><a href="events.php">Events</a></li>
                <li><a href="home.php#contactus">Contact Us</a></li>
            </ul>
        </nav>
    </div>