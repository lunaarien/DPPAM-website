<?php
include 'database/db.php';

$missionType = isset($_GET['mission']) ? urldecode($_GET['mission']) : null;
$volunteerData = null;

if ($missionType) {

    $sql = "SELECT * FROM missions WHERE MISSION_DESCRIPTION = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $missionType);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $volunteerData = $result->fetch_assoc();
    }
}

$conn->close();

$qualifications = isset($volunteerData['MISSION_QUALIFICATION']) ? explode(',', $volunteerData['MISSION_QUALIFICATION']) : [];
$works = isset($volunteerData['MISSION_WORK']) ? explode(',', $volunteerData['MISSION_WORK']) : [];
?>


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

    <?php include("navbar.php"); ?>

    <div class="volunteer-types">
        <div class="volunteer-types-container">
            <div class="volunteer-types-text-content">
                <h1>
                    <span class="highlight-title">
                        <?php echo htmlspecialchars($volunteerData['MISSION_NAME'] ?? 'Volunteer Type Not Found'); ?>
                    </span>
                </h1>
                <p>
                    <?php echo htmlspecialchars($volunteerData['MISSION_DESC'] ?? 'No description available for this role.'); ?>
                </p>

                <p class="desc">What they do:</p>
                <ul>
                    <?php 
                    $works = isset($volunteerData['MISSION_WORK']) ? explode(',', $volunteerData['MISSION_WORK']) : []; 
                    foreach ($works as $work): 
                    ?>
                        <li><?php echo htmlspecialchars(trim($work)); ?></li>
                    <?php endforeach; ?>
                </ul>

                <p class="desc">Qualifications:</p>
                <ul>
                    <?php 
                    $qualifications = isset($volunteerData['MISSION_QUALIFICATION']) ? explode(',', $volunteerData['MISSION_QUALIFICATION']) : []; 
                    foreach ($qualifications as $qualification): 
                    ?>
                        <li><?php echo htmlspecialchars(trim($qualification)); ?></li>
                    <?php endforeach; ?>
                </ul>

            </div>

            <div class="image-section">
                <div class="image-container">
                    <div class="img-carousel">
                        <img src="img/whoweare1.jpg" class="active">
                        <img src="img/whoweare2.jpg">
                        <img src="img/whoweare3.jpg">
                        <img src="img/whoweare4.jpg">
                        <img src="img/whoweare5.jpeg">
                    </div>
                </div>

                <div class="carousel-controls">
                    <div class="nav-buttons">
                        <button class="prev-btn">&lt;</button>
                        <button class="next-btn">&gt;</button>
                    </div>
                    <div id="dots-nav"></div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'chatbotfolder/chatbot.php'; ?>
    <?php include 'footer.php'; ?>

    <script src="js/carousel.js"></script>
    <script>
        document.getElementById('hamburger-icon').addEventListener('click', function () {
            const navLinks = document.getElementById('nav-links');
            navLinks.classList.toggle('active');
        });
    </script>

</body>
</html>
