<?php
include 'database/db.php';

$sql = "SELECT MISSION_NAME, MISSION_DESCRIPTION, MISSION_IMAGE FROM missions";
$result = $conn->query($sql);

$missionnames = [];

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $missionnames[] = $row;
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DPPAM - Volunteer</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/resources.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>

<body>
    <?php include("navbar.php"); ?>

    <section class="hero" id="home">
        <div class="hero-text">
            <h2>
                <span class="highlight" id="typewriter"></span>
            </h2>
            <p>Welcome to the official website of <strong>Diocese of Caloocan Public and Political Affairs Ministry
                    (DPPAM)</strong>. We are dedicated to empowering communities through active participation in free
                and fair elections. Be a Volunteer today and make a difference!</p>
            <a href="#" class="btn">BE A VOLUNTEER!</a>
        </div>
    </section>

    <div class="bottom-info-section">
        <div class="info-box left">
            <h3 class="counter" data-target="10000">0</h3>
            <p>volunteers mobilized nationwide for election monitoring.</p>
        </div>
        <div class="info-box center">
            <h3 class="counter" data-target="50">0</h3>
            <p>partnerships with schools, churches, and civic groups.</p>
        </div>
        <div class="info-box right">
            <h3 class="counter" data-target="1000">0</h3>
            <p>precincts monitored for fair and honest elections.</p>
        </div>
    </div>


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
                <a href="mission-vision.php" class="btn">LEARN MORE <i class="fa fa-arrow-right"></i></a>
            </div>

            <div class="about-image">
                <img src="img/quote2.jpg" alt="About Us Image">
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
                    <a href="organization.php" class="btn">See More <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>

            <main id="carousel">
                <div class="item">
                    <img src="img/c1.jpg" alt="Sally Sharpe">
                    <div class="hover-box">
                        <h3 class="name">Sally Sharpe</h3>
                        <p class="occupation">Member since 2020</p>
                        <p class="testimonial">Founder of DPPAM</p>
                    </div>
                </div>
                <div class="item">
                    <img src="img/c2.jpg" alt="Michael John">
                    <div class="hover-box">
                        <h3 class="name">Michael John</h3>
                        <p class="occupation">Member since 2020</p>
                        <p class="testimonial">Coordinator at DPPAM</p>
                    </div>
                </div>
                <div class="item">
                    <img src="img/c1.jpg" alt="Mikayla Eddie">
                    <div class="hover-box">
                        <h3 class="name">Mikayla Eddie</h3>
                        <p class="occupation">Member since 2020</p>
                        <p class="testimonial">Volunteer Leader at DPPAM</p>
                    </div>
                </div>
                <div class="item">
                    <img src="img/c2.jpg" alt="Eve Smith">
                    <div class="hover-box">
                        <h3 class="name">Eve Smith</h3>
                        <p class="occupation">Member since 2020</p>
                        <p class="testimonial">Core Team Member</p>
                    </div>
                </div>
                <div class="item">
                    <img src="img/c1.jpg" alt="Eve Smith">
                    <div class="hover-box">
                        <h3 class="name">Eve Smith</h3>
                        <p class="occupation">Member since 2020</p>
                        <p class="testimonial">Core Team Member</p>
                    </div>
                </div>
            </main>
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
                    <a href="pollwatchers.php" class="btn">Types of Pollwatchers <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="volunteers-boxes">
                <?php if (!empty($missionnames)): ?>
                    <?php foreach ($missionnames as $missionname): ?>
                        <div class="volunteer-box">
                            <h3>
                                <?php echo htmlspecialchars($missionname['MISSION_NAME'] ?? 'No Name Available'); ?>
                            </h3>
                            <a href="volunteers.php?mission=<?php echo urlencode($missionname['MISSION_DESCRIPTION']); ?>" class="btn">See More</a>
                            </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No volunteers available.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>
    

    <section class="resources" id="resources">
        <div class="resources-container">
            <div class="resource-content">
                <div class="resources-text">
                    <h2>
                        <span class="highlight-white">GENERAL </span><br>
                        <span class="highlight-blue">RESOURCES</span>
                    </h2>
                </div>
                <div class="resources-details">
                    <p>Discover essential volunteer resources, guides, and tools to support your roles,
                        enhance your experience and help you contribute effectively to our mission.
                    </p>
                </div>
            </div>

            <div id="card-area">
                <div class="wrapper">
                    <div class="box-area">
                        <div class="resources-box">
                            <img src="img/2010.png" alt="">
                            <div class="overlay">
                                <h1>2010</h1>
                                <p>Volunteer's Educational Material</p>
                                <a href="https://drive.google.com/file/d/1RNapGxo9u_LFNzeiTAGju03GZuJB7aiY/view" class="resources-btn">View Material</a>
                            </div>
                        </div>
                        <div class="resources-box">
                            <img src="img/2013.png" alt="">
                            <div class="overlay">
                                <h1>2013</h1>
                                <p>Volunteer's Educational Material</p>
                                <a href="https://drive.google.com/file/d/1dk1vCyRqEAfwzU9KcpLmB2EXU4bAHEFS/view" class="resources-btn">View Material</a>
                            </div>
                        </div>
                        <div class="resources-box">
                            <img src="img/2016.png" alt="">
                            <div class="overlay">
                                <h1>2016</h1>
                                <p>Volunteer's Educational Material</p>
                                <a href="https://drive.google.com/file/d/1rbchYMwtth16zX5kGuxGA6klNKMf20Na/view" class="resources-btn">View Material</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news-events" id="news-events">
        <div class="news-events-container">
            <div class="news-events-content">
                <div class="news-events-text">
                    <h2>
                        <span class="highlight-black">UPCOMING </span><br>
                        <span class="highlight-red">EVENTS </span>
                    </h2>
                </div>
                <div class="news-events-details">
                    <p>Stay informed about DPPAM’s upcoming events and activities. Join us in our mission
                        for clean and fair elections. Here’s our upcoming event—be part of it and make a difference!</p>
                    <a href="events.php" class="btn">See More <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="news-events-poster">
                <img src="img/poster1.jpg" alt="Upcoming Election Poster" class="carousel-image">
                <img src="img/poster2.jpg" alt="Upcoming Election Poster" class="carousel-image">
            </div>
        </div>
    </section>

    <section class="contactus" id="contactus">
        <div class="contactus-container">
            <div class="contactus-leftsection">
                <h3>VISIT THE NEAREST PARISH IN YOUR AREA FOR MORE QUESTIONS.</h3>
                <p><span>Contact:</span> A. (02) 8288-9116</p>
                <p><span>Mail:</span> example_email@gmail.com</p>
                <img src="img/contactus-logo.png" alt="ddpam-logo">
            </div>
            <div class="contactus-rightsection">
                <h2 class="form-header">LEAVE YOUR MESSAGE HERE</h2>
                <p class="form-text">We really appreciate you taking the time to get in touch. Please fill in the form
                </p>
                <form action="">
                    <input type="email" id="form-input-email" name="form-input-email" placeholder="Your Email" required>
                    <input type="text" id="form-input-name" name="form-input-name" placeholder="Name">
                    <textarea name="form-textarea" id="form-textarea" rows="20" cols="100"
                        placeholder="Write your message here..." style="resize: none;" required></textarea>
                    <button type="submit" name="form-submit" id="form-submit">Submit</button>
                </form>
            </div>
        </div>
    </section>


    <?php include 'footer.php'; ?>
    <?php include 'chatbotfolder/chatbot.php'; ?>

    <script src="js/card-slider.js"></script>
    <script src="js/script.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/index.js"></script>
</body>

</html>

<?php
// Close database connection
$conn->close();
?>