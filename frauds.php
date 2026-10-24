<?php
include "db.php";

$result = mysqli_query($conn, "SELECT * FROM frauds");
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Fraud Awareness | CyberGuard</title>

<style>

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    background: #f4f8fc;
    color: #172033;
}


/* ================= NAVIGATION ================= */

.navbar {
    width: 100%;
    background: #0b1f3a;
    padding: 16px 7%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: sticky;
    top: 0;
    z-index: 1000;
    box-shadow: 0 3px 12px rgba(0,0,0,0.15);
}

.logo {
    color: white;
    font-size: 22px;
    font-weight: bold;
}

.logo span {
    color: #38bdf8;
}

.nav-links {
    display: flex;
    gap: 25px;
    list-style: none;
}

.nav-links a {
    color: white;
    text-decoration: none;
    font-size: 15px;
    transition: 0.3s;
}

.nav-links a:hover {
    color: #38bdf8;
}


/* ================= PAGE HEADER ================= */

.page-header {
    background: linear-gradient(135deg, #0b1f3a, #123c69);
    color: white;
    text-align: center;
    padding: 55px 20px;
}

.page-header .icon {
    font-size: 50px;
    margin-bottom: 12px;
}

.page-header h1 {
    font-size: 38px;
    margin-bottom: 12px;
}

.page-header h1 span {
    color: #38bdf8;
}

.page-header p {
    color: #dbeafe;
    font-size: 17px;
}


/* ================= CONTAINER ================= */

.container {
    width: 90%;
    max-width: 1100px;
    margin: 45px auto;
}


/* ================= FRAUD GRID ================= */

.fraud-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
}


/* ================= CARD ================= */

.fraud-card {
    position: relative;
    background: white;
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(15, 23, 42, 0.10);
    transition: 0.3s;
    min-height: 300px;
    border-top: 4px solid #38bdf8;
}

.fraud-card:hover {
    transform: translateY(-7px);
    box-shadow: 0 10px 28px rgba(15, 23, 42, 0.16);
}

.fraud-card h2 {
    margin-bottom: 20px;
    font-size: 21px;
    color: #0b1f3a;
}


/* ================= SECTION TITLES ================= */

.section-title {
    font-weight: bold;
    margin-top: 18px;
    margin-bottom: 6px;
    color: #0b1f3a;
}

.description,
.warning,
.prevention {
    color: #64748b;
    line-height: 1.6;
}


/* ================= POPUP ================= */

.popup {
    position: absolute;

    display: none;

    background: #0b1f3a;
    color: white;

    padding: 15px;

    width: 270px;

    border-radius: 10px;

    box-shadow: 0 8px 20px rgba(0,0,0,0.25);

    z-index: 100;

    font-size: 14px;

    line-height: 1.5;
}


/* SHOW POPUP */

.fraud-card:hover .popup {
    display: block;
}


/* DEFAULT: POPUP BELOW */

.popup {
    top: calc(100% + 12px);
    left: 50%;
    transform: translateX(-50%);
}


/* SHISHING ONLY: POPUP LEFT */

.shishing-card .popup {
    top: 50%;
    right: calc(100% + 12px);
    left: auto;
    transform: translateY(-50%);
}


/* POPUP TITLE */

.popup-title {
    font-weight: bold;
    margin-bottom: 6px;
    color: #38bdf8;
}


/* ================= BACK BUTTON ================= */

.back-home {
    display: block;
    width: fit-content;
    margin: 65px auto 30px;
    padding: 12px 24px;
    background: #0b1f3a;
    color: white;
    text-decoration: none;
    border-radius: 8px;
    transition: 0.3s;
}

.back-home:hover {
    background: #2563eb;
    transform: translateY(-2px);
}


/* ================= FOOTER ================= */

footer {
    background: #0b1f3a;
    color: #cbd5e1;
    text-align: center;
    padding: 22px;
    margin-top: 50px;
    font-size: 14px;
}


/* ================= TABLET ================= */

@media (max-width: 900px) {

    .fraud-grid {
        grid-template-columns: repeat(2, 1fr);
    }

}


/* ================= MOBILE ================= */

@media (max-width: 600px) {

    .navbar {
        flex-direction: column;
        gap: 12px;
    }

    .nav-links {
        gap: 15px;
        flex-wrap: wrap;
        justify-content: center;
    }

    .page-header h1 {
        font-size: 30px;
    }

    .fraud-grid {
        grid-template-columns: 1fr;
    }

    /* Shishing popup moves below on small screens */

    .shishing-card .popup {
        top: calc(100% + 12px);
        left: 50%;
        right: auto;
        transform: translateX(-50%);
    }

}

</style>

</head>

<body>


<!-- ================= NAVIGATION ================= -->

<nav class="navbar">

    <div class="logo">
        🛡️ Cyber<span>Guard</span>
    </div>

    <ul class="nav-links">

        <li>
            <a href="index.php">Home</a>
        </li>

        <li>
            <a href="frauds.php">Fraud Awareness</a>
        </li>

        <li>
            <a href="safety-tips.php">Safety Tips</a>
        </li>

        <li>
            <a href="help.php">Help & Report</a>
        </li>

    </ul>

</nav>


<!-- ================= PAGE HEADER ================= -->

<section class="page-header">

    <div class="icon">🚨</div>

    <h1>Fraud <span>Awareness</span></h1>

    <p>
        Learn about common digital scams, warning signs,
        and how to protect yourself.
    </p>

</section>


<!-- ================= FRAUD CARDS ================= -->

<div class="container">

    <div class="fraud-grid">


<?php while ($row = mysqli_fetch_assoc($result)) { ?>

<?php

$title = strtolower($row['title']);


/* Check Shishing / Smishing */

$isShishing =
    strpos($title, 'shish') !== false ||
    strpos($title, 'smish') !== false;


/* Popup message */

if (strpos($title, 'phishing') !== false) {

    $popupMessage =
    "Be careful with fake emails, websites and messages. " .
    "Always verify the sender before entering your personal information.";

}
elseif ($isShishing) {

    $popupMessage =
    "Be careful with suspicious SMS messages and links. " .
    "Do not click unknown links or share personal information.";

}
elseif (strpos($title, 'otp') !== false) {

    $popupMessage =
    "Never share your OTP with anyone. " .
    "Banks and trusted services will never ask you to tell them your OTP.";

}
elseif (strpos($title, 'upi') !== false) {

    $popupMessage =
    "Be careful with unknown UPI payment requests. " .
    "Never approve a payment unless you know and trust the recipient.";

}
else {

    $popupMessage =
    "Stay alert while using the internet and never share sensitive information with unknown people.";

}


/* Shishing special class */

$cardClass = $isShishing
    ? "fraud-card shishing-card"
    : "fraud-card";

?>


<div class="<?php echo $cardClass; ?>">

    <h2>
        <?php echo htmlspecialchars($row['title']); ?>
    </h2>


    <div class="section-title">
        📌 Description
    </div>

    <div class="description">
        <?php echo htmlspecialchars($row['description']); ?>
    </div>


    <div class="section-title">
        ⚠️ Warning Signs
    </div>

    <div class="warning">
        <?php echo htmlspecialchars($row['warning_signs']); ?>
    </div>


    <div class="section-title">
        🛡️ Prevention
    </div>

    <div class="prevention">
        <?php echo htmlspecialchars($row['prevention']); ?>
    </div>


    <!-- POPUP -->

    <div class="popup">

        <div class="popup-title">
            ⚠️ Stay Alert
        </div>

        <?php echo htmlspecialchars($popupMessage); ?>

    </div>


</div>


<?php } ?>


    </div>


    <a href="index.php" class="back-home">
        ← Back to Home
    </a>

</div>


<!-- ================= FOOTER ================= -->

<footer>

    © 2026 CyberGuard | Cyber Safety & Digital Fraud Awareness

</footer>


</body>
</html>