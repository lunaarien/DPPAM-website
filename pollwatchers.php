<?php
include 'database/db.php';

$sql = "SELECT * FROM missions WHERE MISSION_TYPE LIKE '%pollwatcher%'";
$result = $conn->query($sql);

$pollwatchers = [];

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $pollwatchers[] = $row;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DPPAM - Volunteer</title>
    <link rel="stylesheet" href="css/pollwatcher.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="https://unpkg.com/scrollreveal"></script>
</head>
<body>
<?php include("navbar.php"); ?>

</head>
<body>
    <div class="pollwatchers-boxes">
        <?php if (!empty($pollwatchers)): ?>
            <?php foreach ($pollwatchers as $pollwatcher): ?>
                <section class="sec-01">
                    <div class="container">
                        <h2 class="main-title"><?php echo htmlspecialchars($pollwatcher['MISSION_NAME'] ?? 'No Name Available'); ?></h2>
                        <div class="content">
                            <div class="image">
                                <img src="img/<?php echo htmlspecialchars($pollwatcher['MISSION_IMAGE'] ?? 'default.jpg'); ?>" alt="<?php echo htmlspecialchars($pollwatcher['MISSION_NAME']); ?>">
                            </div>
                            <div class="text-box">
                                <h3>WHAT THEY DO</h3>
                                <p><?php echo nl2br(htmlspecialchars($pollwatcher['MISSION_DESC'] ?? 'No details available.')); ?></p>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No poll watcher missions available.</p>
        <?php endif; ?>
    </div>


    <!-- <section class="sec-02">
        <div class="container">
            <h3 class="section-title">Lorem Ipsum</h3>
            <div class="content">
                <div class="image">
                    <img src="Landingpage/img/fire.jpg" alt="">
                </div>
                <div class="info">
                    <h4 class="info-title">Description</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, aliquam quia. Ullam voluptatem dolorum numquam inventore, dolore similique dicta temporibus laborum, molestias dolorem blanditiis? Optio minima odit tempora fuga fugit.</p>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section class="info-sections">
        <section class="support-services">
            <h2 class="infos">Support Services</h2>
            <div class="accordion">View Support Services</div>
            <div class="panel">
                <ul>
                    <li>Legal Team</li>
                    <li>Food Team</li>
                    <li>Logistics Team</li>
                    <li>Media Liaison Work Team</li>
                    <li>Secretariat Team</li>
                    <li>Transportation & Communications Team</li>
                    <li>Voters’ Education Team</li>
                    <li>Ways and Means Team</li>
                </ul>
            </div>
        </section>

        <section class="qualifications">
            <h2 class="infos">Qualifications of Poll Watchers</h2>
            <div class="accordion">View Qualifications</div>
            <div class="panel">
                <ul>
                    <li>Registered voter of the city/municipality assigned.</li>
                    <li>Good moral character.</li>
                    <li>No conviction of election offenses or other crimes.</li>
                    <li>Literate in Filipino, English, or local dialect.</li>
                    <li>Not related within the 4th civil degree to election officials.</li>
                </ul>
            </div>
        </section>

        <section class="watchers-rights">
            <h2 class="infos">Rights of Poll Watchers</h2>
            <div class="accordion">View Rights</div>
            <div class="panel">
                <ul>
                    <li>Stay inside the polling place in the designated area.</li>
                    <li>Observe and take notes of election proceedings.</li>
                    <li>Take photos (excluding ballot casting).</li>
                    <li>File a protest against irregularities.</li>
                    <li>Receive a certificate from the Electoral Board for protests.</li>
                    <li>Position to read the Election Returns (ERs).</li>
                </ul>
            </div>
        </section>
    </section>

    <script>
    const accordions = document.querySelectorAll('.accordion');
        accordions.forEach((accordion) => {
            accordion.addEventListener('click', function () {
                this.classList.toggle('active');
                const panel = this.nextElementSibling;

                // Close other open panels
                document.querySelectorAll('.panel').forEach((otherPanel) => {
                    if (otherPanel !== panel) {
                        otherPanel.style.maxHeight = null;
                    }
                });

                // Toggle current panel
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + 'px';
                }
            });
        });
    </script> -->

    <?php include 'chatbotfolder/chatbot.php'; ?>
    <?php include 'footer.php'; ?>

    <script src="js/carousel.js"></script>

    <script>
        document.getElementById('hamburger-icon').addEventListener('click', function() {
        const navLinks = document.getElementById('nav-links');
        navLinks.classList.toggle('active'); 
    });
    </script>

    <script>
    // Initialize ScrollReveal settings
    ScrollReveal({
        reset: true,
        distance: '60px',
        duration: 2500,
        delay: 400
    });

    // Check if the device is mobile (screen width <= 768px)
    if (window.innerWidth <= 768) {
        // Mobile animations
        ScrollReveal().reveal('.main-title', { delay: 300, origin: 'top' });
        ScrollReveal().reveal('.sec-01 .image', { delay: 600, origin: 'left' });
        ScrollReveal().reveal('.text-box', { delay: 700, origin: 'bottom' });
    } else {
        // Desktop animations
        ScrollReveal().reveal('.main-title', { delay: 300, origin: 'left' });
        ScrollReveal().reveal('.sec-01 .image', { delay: 600, origin: 'bottom' });
        ScrollReveal().reveal('.text-box', { delay: 700, origin: 'right' });
    }

    // Re-apply the animations on window resize
    window.addEventListener('resize', () => {
        location.reload(); // Refresh the page to apply new animation flow
    });
    </script>

</body>
</html>
