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
    <?php include("navbar.php"); ?>

    <section class="org-profile">
        <div class="title-section">
            <h2>
                <span class="highlight-black">Our</span>
                <span class="highlight-red">Coordinators</span>
            </h2>
            <p class="subtitle">Meet our dedicated volunteers who serve their communities with passion.</p>
        </div>

        <div class="accordion">
        <?php
        // Define an array of cities
        // $cities = ['Malabon city', 'Navotas city', 'Caloocan city'];

        // Loop through each city
        // foreach ($cities as $city):
            // Filter coordinators by city
            /*
            $filteredCoordinators = array_filter($coordinators, function ($coordinator) use ($city) {
                return $coordinator['MUNICIPALITY/CITY'] === $city;
            });
            */
            ?>
            <!-- Accordion item for each city -->
            <!--
            <div class="accordion-item">
                <div class="accordion-header">
                    <span>COORDINATORS FROM <?php // echo strtoupper($city); ?></span>
                    <span class="icon">+</span>
                </div>
                <div class="accordion-content">
                    <?php // if (!empty($filteredCoordinators)): ?>
                        <?php // foreach ($filteredCoordinators as $coordinator): ?>
                            <div class="coordinator">
                                <img src="LandingPage/img/c1.jpg" alt="Coordinator Photo" class="coordinator-img">
                                <div class="coordinator-info">
                                    <span class="name">
                                        <?php 
                                        // echo $coordinator['FIRST_NAME'] . ' ' . $coordinator['MIDDLE_NAME'] . ' ' . $coordinator['SURNAME'] ?? ''; 
                                        ?>
                                    </span><br>
                                    <span class="parish"><?php // echo $coordinator['PARISH'] ?? ''; ?></span><br>
                                    <span class="address">
                                        <?php 
                                        // echo $coordinator['STREETADDRESS'] . ', ' . $coordinator['MUNICIPALITY/CITY'] ?? ''; 
                                        ?>
                                    </span><br>
                                    <span class="contact">Contact:
                                        <?php 
                                        // echo $coordinator['CELLPHONE_NO'] . ' & ' . $coordinator['TELEPHONE_NO'] . ' / ' . $coordinator['EMAIL'] ?? ''; 
                                        ?>
                                    </span><br>
                                </div>
                            </div>
                        <?php // endforeach; ?>
                    <?php // else: ?>
                        <div class="empty-box">
                            <p>No coordinators available in <?php // echo $city; ?> at the moment.</p>
                        </div>
                    <?php // endif; ?>
                </div>
            </div>
            -->
        <?php // endforeach; ?>
        <div class="accordion-item">
                <div class="accordion-header">
                    <span>COORDINATORS FROM MALABON</span>
                    <span class="icon">+</span>
                </div>
                <div class="accordion-content">
                    <div class="coordinator">
                        <img src="img/upc.jpg" alt="Coordinator Photo" class="coordinator-img">
                        <div class="coordinator-info">
                            <span class="name">Juan Dela Cruz</span><br>
                            <span class="parish">Coordinator at St. Peter Parish</span><br>
                            <span class="address">267 St. Peter Parish, Malabon City</span><br>
                            <span class="contact">Contact: (02)8928-8741 / peterparish@gmail.com</span><br>
                        </div>
                    </div>
                    <div class="coordinator">
                        <img src="img/upc.jpg" alt="Coordinator Photo" class="coordinator-img">
                        <div class="coordinator-info">
                            <span class="name">Juan Dela Cruz</span><br>
                            <span class="parish">Coordinator at St. Peter Parish</span><br>
                            <span class="address">267 St. Peter Parish, Malabon City</span><br>
                            <span class="contact">Contact: (02)8928-8741 / peterparish@gmail.com</span><br>
                        </div>
                    </div>
                    <div class="coordinator">
                        <img src="img/upc.jpg" alt="Coordinator Photo" class="coordinator-img">
                        <div class="coordinator-info">
                            <span class="name">Juan Dela Cruz</span><br>
                            <span class="parish">Coordinator at St. Peter Parish</span><br>
                            <span class="address">267 St. Peter Parish, Malabon City</span><br>
                            <span class="contact">Contact: (02)8928-8741 / peterparish@gmail.com</span><br>
                        </div>
                    </div>
                    <div class="coordinator">
                        <img src="img/upc.jpg" alt="Coordinator Photo" class="coordinator-img">
                        <div class="coordinator-info">
                            <span class="name">Juan Dela Cruz</span><br>
                            <span class="parish">Coordinator at St. Peter Parish</span><br>
                            <span class="address">267 St. Peter Parish, Malabon City</span><br>
                            <span class="contact">Contact: (02)8928-8741 / peterparish@gmail.com</span><br>
                        </div>
                    </div>

                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-header">
                    <span>COORDINATORS FROM NAVOTAS</span>
                    <span class="icon">+</span>
                </div>
                <div class="accordion-content">
                    <div class="coordinator">
                        <img src="img/upc.jpg" alt="Coordinator Photo" class="coordinator-img">
                        <div class="coordinator-info">
                            <span class="name">Juan Dela Cruz</span><br>
                            <span class="parish">Coordinator at St. Peter Parish</span><br>
                            <span class="address">267 St. Peter Parish, Malabon City</span><br>
                            <span class="contact">Contact: (02)8928-8741 / peterparish@gmail.com</span><br>
                        </div>
                    </div>
                    <div class="coordinator">
                        <img src="img/upc.jpg" alt="Coordinator Photo" class="coordinator-img">
                        <div class="coordinator-info">
                            <span class="name">Juan Dela Cruz</span><br>
                            <span class="parish">Coordinator at St. Peter Parish</span><br>
                            <span class="address">267 St. Peter Parish, Malabon City</span><br>
                            <span class="contact">Contact: (02)8928-8741 / peterparish@gmail.com</span><br>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-header">
                    <span>COORDINATORS FROM NOVALICHES</span>
                    <span class="icon">+</span>
                </div>
                <div class="accordion-content">
                    <div class="coordinator">
                        <img src="img/upc.jpg" alt="Coordinator Photo" class="coordinator-img">
                        <div class="coordinator-info">
                            <span class="name">Juan Dela Cruz</span><br>
                            <span class="parish">Coordinator at St. Peter Parish</span><br>
                            <span class="address">267 St. Peter Parish, Malabon City</span><br>
                            <span class="contact">Contact: (02)8928-8741 / peterparish@gmail.com</span><br>
                        </div>
                    </div>
                    <div class="coordinator">
                        <img src="img/upc.jpg" alt="Coordinator Photo" class="coordinator-img">
                        <div class="coordinator-info">
                            <span class="name">Juan Dela Cruz</span><br>
                            <span class="parish">Coordinator at St. Peter Parish</span><br>
                            <span class="address">267 St. Peter Parish, Malabon City</span><br>
                            <span class="contact">Contact: (02)8928-8741 / peterparish@gmail.com</span><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <?php include 'footer.php'; ?>
    <?php include 'chatbotfolder/chatbot.php'; ?>

    <script src="js/toggle.js"></script>
    <script>
        document.getElementById('hamburger-icon').addEventListener('click', function () {
            const navLinks = document.getElementById('nav-links');
            navLinks.classList.toggle('active');
        });
    </script>
</body>

</html>