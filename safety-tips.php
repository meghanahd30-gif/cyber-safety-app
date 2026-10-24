<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Safety Tips | CyberGuard</title>

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

        .safety-container {
            width: 90%;
            max-width: 1100px;
            margin: 45px auto;
            text-align: center;
        }


        /* ================= SAFETY GRID ================= */

        .safety-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }


        /* ================= CARDS ================= */

        .safety-card {
            position: relative;

            background: white;
            padding: 28px 25px;

            min-height: 190px;

            border-radius: 15px;

            border-top: 4px solid #38bdf8;

            box-shadow: 0 5px 20px rgba(15, 23, 42, 0.10);

            cursor: pointer;

            transition: 0.3s ease;
        }

        .safety-card:hover {
            transform: translateY(-8px);

            box-shadow:
                0 10px 28px rgba(15, 23, 42, 0.16);
        }

        .safety-card h2 {
            font-size: 21px;
            color: #0b1f3a;
            margin-bottom: 15px;
        }

        .safety-card p {
            font-size: 15px;
            line-height: 1.6;
            color: #64748b;
        }


        /* ================= HOVER POPUP ================= */

        .safety-card::after {

            content: attr(data-tip);

            position: absolute;

            left: 50%;
            bottom: calc(100% + 12px);

            transform:
                translateX(-50%)
                translateY(10px);

            width: 270px;

            padding: 16px 18px;

            background: #0b1f3a;
            color: white;

            border-radius: 10px;

            font-size: 14px;
            line-height: 1.5;

            text-align: center;

            box-shadow:
                0 8px 20px rgba(0,0,0,0.25);

            opacity: 0;
            visibility: hidden;

            transition: all 0.3s ease;

            z-index: 1000;
        }

        .safety-card:hover::after {

            opacity: 1;
            visibility: visible;

            transform:
                translateX(-50%)
                translateY(0);
        }


        /* ================= BACK BUTTON ================= */

        .back-button {

            display: inline-block;

            margin-top: 55px;

            padding: 12px 24px;

            background: #0b1f3a;

            color: white;

            text-decoration: none;

            border-radius: 8px;

            transition: 0.3s;
        }

        .back-button:hover {

            background: #2563eb;

            transform: translateY(-2px);
        }


        /* ================= FOOTER ================= */

        footer {

            background: #0b1f3a;

            color: #cbd5e1;

            text-align: center;

            padding: 22px;

            margin-top: 60px;

            font-size: 14px;
        }


        /* ================= TABLET ================= */

        @media (max-width: 900px) {

            .safety-grid {
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

            .safety-grid {

                grid-template-columns: 1fr;
            }

            .safety-card {

                max-width: 400px;

                width: 100%;

                margin: auto;
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

    <div class="icon">
        🛡️
    </div>

    <h1>
        Safety <span>Tips</span>
    </h1>

    <p>
        Simple security practices to help you stay safe online.
    </p>

</section>


<!-- ================= SAFETY TIPS ================= -->

<div class="safety-container">


    <div class="safety-grid">


        <!-- 1 -->

        <div class="safety-card"
             data-tip="Create strong and unique passwords. Avoid using the same password for different accounts.">

            <h2>🔑 Strong Passwords</h2>

            <p>
                Use strong and unique passwords for your online accounts.
            </p>

        </div>


        <!-- 2 -->

        <div class="safety-card"
             data-tip="Enable two-factor authentication whenever possible. It provides an additional layer of security.">

            <h2>🔐 Enable 2FA</h2>

            <p>
                Turn on two-factor authentication whenever it is available.
            </p>

        </div>


        <!-- 3 -->

        <div class="safety-card"
             data-tip="Never share your OTP with anyone, even if someone claims to be from your bank or another trusted service.">

            <h2>📱 Protect Your OTP</h2>

            <p>
                Never share your OTP with anyone.
            </p>

        </div>


        <!-- 4 -->

        <div class="safety-card"
             data-tip="Check website addresses and links carefully before clicking. Avoid suspicious or unexpected links.">

            <h2>🔗 Check Links</h2>

            <p>
                Check links carefully before clicking them.
            </p>

        </div>


        <!-- 5 -->

        <div class="safety-card"
             data-tip="Keep your phone, applications and operating system updated to receive important security fixes.">

            <h2>📲 Update Your Apps</h2>

            <p>
                Keep your phone, apps and operating system updated.
            </p>

        </div>


        <!-- 6 -->

        <div class="safety-card"
             data-tip="Do not approve unknown payment requests, login requests or other unexpected requests.">

            <h2>🚨 Avoid Unknown Requests</h2>

            <p>
                Do not approve unknown payment or login requests.
            </p>

        </div>


        <!-- 7 -->

        <div class="safety-card"
             data-tip="Avoid sharing personal information such as passwords, PINs, bank details and other sensitive information online.">

            <h2>🔒 Protect Personal Information</h2>

            <p>
                Keep your personal and financial information private.
            </p>

        </div>


    </div>


    <!-- BACK BUTTON -->

    <a href="index.php" class="back-button">
        ← Back to Home
    </a>


</div>


<!-- ================= FOOTER ================= -->

<footer>

    © 2026 CyberGuard | Cyber Safety & Digital Fraud Awareness

</footer>


</body>

</html>