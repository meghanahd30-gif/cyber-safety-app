<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CyberGuard - Cyber Safety Awareness</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f8fc;
            color: #172033;
        }

        /* NAVIGATION BAR */

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

        /* HERO SECTION */

        .hero {
            min-height: 520px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 70px 20px;
            background: linear-gradient(135deg, #0b1f3a, #123c69);
            color: white;
        }

        .shield {
            font-size: 65px;
            margin-bottom: 20px;
            animation: float 3s ease-in-out infinite;
        }

        .hero h1 {
            font-size: 44px;
            margin-bottom: 18px;
        }

        .hero h1 span {
            color: #38bdf8;
        }

        .hero p {
            max-width: 700px;
            font-size: 18px;
            line-height: 1.7;
            color: #dbeafe;
            margin-bottom: 30px;
        }

        .hero-buttons {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .hero-buttons a {
            text-decoration: none;
            padding: 13px 24px;
            border-radius: 8px;
            font-weight: bold;
            transition: 0.3s;
        }

        .primary-btn {
            background: #38bdf8;
            color: #06203a;
        }

        .primary-btn:hover {
            background: #7dd3fc;
            transform: translateY(-3px);
        }

        .secondary-btn {
            border: 2px solid #38bdf8;
            color: white;
        }

        .secondary-btn:hover {
            background: #38bdf8;
            color: #06203a;
            transform: translateY(-3px);
        }

        /* FEATURES */

        .features {
            padding: 65px 7%;
            text-align: center;
        }

        .section-title {
            font-size: 30px;
            margin-bottom: 10px;
            color: #0b1f3a;
        }

        .section-subtitle {
            color: #64748b;
            margin-bottom: 40px;
        }

        .cards {
            max-width: 1100px;
            margin: auto;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .card {
            background: white;
            padding: 30px 25px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(15, 23, 42, 0.10);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 25px rgba(15, 23, 42, 0.16);
        }

        .card-icon {
            font-size: 42px;
            margin-bottom: 18px;
        }

        .card h2 {
            color: #0b1f3a;
            margin-bottom: 12px;
            font-size: 21px;
        }

        .card p {
            color: #64748b;
            line-height: 1.6;
            margin-bottom: 22px;
        }

        .card a {
            display: inline-block;
            text-decoration: none;
            background: #0b1f3a;
            color: white;
            padding: 10px 18px;
            border-radius: 7px;
            transition: 0.3s;
        }

        .card a:hover {
            background: #2563eb;
        }

        /* INFO SECTION */

        .info {
            padding: 60px 7%;
            background: #eaf4fb;
            text-align: center;
        }

        .info h2 {
            color: #0b1f3a;
            margin-bottom: 15px;
        }

        .info p {
            max-width: 750px;
            margin: auto;
            color: #526174;
            line-height: 1.7;
        }

        /* FOOTER */

        footer {
            background: #0b1f3a;
            color: #cbd5e1;
            text-align: center;
            padding: 22px;
            font-size: 14px;
        }

        /* ANIMATION */

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        /* MOBILE */

        @media (max-width: 800px) {

            .navbar {
                flex-direction: column;
                gap: 12px;
            }

            .nav-links {
                gap: 15px;
                flex-wrap: wrap;
                justify-content: center;
            }

            .hero h1 {
                font-size: 32px;
            }

            .hero p {
                font-size: 16px;
            }

            .cards {
                grid-template-columns: 1fr;
                max-width: 500px;
            }
        }
    </style>
</head>

<body>

<!-- NAVIGATION BAR -->

<nav class="navbar">

    <div class="logo">
        🛡️ Cyber<span>Guard</span>
    </div>

    <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="frauds.php">Fraud Awareness</a></li>
        <li><a href="safety-tips.php">Safety Tips</a></li>
        <li><a href="help.php">Help & Report</a></li>
    </ul>

</nav>


<!-- HERO SECTION -->

<section class="hero">

    <div class="shield">🛡️</div>

    <h1>Stay Safe in the <span>Digital World</span></h1>

    <p>
        Learn about common digital frauds, recognize warning signs,
        and discover simple ways to protect your personal information
        and online accounts.
    </p>

    <div class="hero-buttons">

        <a href="frauds.php" class="primary-btn">
            🚨 Explore Fraud Awareness
        </a>

        <a href="safety-tips.php" class="secondary-btn">
            🛡️ Safety Tips
        </a>

    </div>

</section>


<!-- FEATURES -->

<section class="features">

    <h2 class="section-title">Protect Yourself Online</h2>

    <p class="section-subtitle">
        Everything you need to improve your digital safety.
    </p>


    <div class="cards">

        <div class="card">

            <div class="card-icon">🚨</div>

            <h2>Fraud Awareness</h2>

            <p>
                Learn about phishing, OTP scams, UPI scams,
                smishing and other common digital frauds.
            </p>

            <a href="frauds.php">Learn More</a>

        </div>


        <div class="card">

            <div class="card-icon">🔐</div>

            <h2>Safety Tips</h2>

            <p>
                Follow simple security practices to protect
                your accounts, passwords and personal information.
            </p>

            <a href="safety-tips.php">View Tips</a>

        </div>


        <div class="card">

            <div class="card-icon">🆘</div>

            <h2>Help & Report</h2>

            <p>
                Find useful steps to follow if you encounter
                or suspect a digital fraud.
            </p>

            <a href="help.php">Get Help</a>

        </div>

    </div>

</section>


<!-- INFORMATION SECTION -->

<section class="info">

    <h2>Think Before You Click 🔎</h2>

    <p>
        Cyber fraud can happen to anyone. Stay alert, verify
        suspicious messages and links, and never share sensitive
        information such as passwords or OTPs with others.
    </p>

</section>


<!-- FOOTER -->

<footer>

    © 2026 CyberGuard | Cyber Safety & Digital Fraud Awareness

</footer>

</body>
</html>