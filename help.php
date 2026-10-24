<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Help & Report - CyberGuard</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f4f8fc;
            color: #172033;
        }

        /* Navigation Bar */
        nav {
            background: #0b1f3a;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 7%;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 3px 12px rgba(0,0,0,0.15);
        }

        .logo {
            color: white;
            font-size: 24px;
            font-weight: bold;
        }

        .logo span {
            color: #38bdf8;
        }

        .nav-links {
            display: flex;
            gap: 28px;
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

        /* Header */
        .page-header {
            text-align: center;
            padding: 60px 20px 35px;
        }

        .page-header .icon {
            font-size: 50px;
            margin-bottom: 12px;
        }

        .page-header h1 {
            font-size: 38px;
            color: #0b1f3a;
            margin-bottom: 12px;
        }

        .page-header p {
            color: #64748b;
            font-size: 17px;
        }

        /* Help Cards */
        .help-container {
            width: 90%;
            max-width: 1100px;
            margin: 20px auto 60px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .help-card {
            background: white;
            padding: 30px 25px;
            border-radius: 14px;
            text-align: center;
            border-top: 4px solid #38bdf8;
            box-shadow: 0 6px 20px rgba(11,31,58,0.08);
            transition: 0.3s;
        }

        .help-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 28px rgba(11,31,58,0.15);
        }

        .help-icon {
            font-size: 42px;
            margin-bottom: 15px;
        }

        .help-card h2 {
            color: #0b1f3a;
            margin-bottom: 12px;
            font-size: 22px;
        }

        .help-card p {
            color: #64748b;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .help-btn {
            display: inline-block;
            padding: 11px 20px;
            background: #123c69;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            transition: 0.3s;
        }

        .help-btn:hover {
            background: #38bdf8;
            color: #0b1f3a;
        }

        /* Emergency Information */
        .report-box {
            width: 90%;
            max-width: 1000px;
            margin: 0 auto 60px;
            padding: 35px;
            background: #0b1f3a;
            color: white;
            border-radius: 16px;
            text-align: center;
        }

        .report-box h2 {
            color: #38bdf8;
            margin-bottom: 15px;
        }

        .report-box p {
            line-height: 1.7;
            color: #dbeafe;
        }

        /* Back Button */
        .back-home {
            text-align: center;
            margin-bottom: 60px;
        }

        .back-home a {
            display: inline-block;
            background: #38bdf8;
            color: #0b1f3a;
            padding: 12px 25px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .back-home a:hover {
            background: #123c69;
            color: white;
        }

        /* Footer */
        footer {
            background: #0b1f3a;
            color: #cbd5e1;
            text-align: center;
            padding: 25px;
            font-size: 14px;
        }

        /* Responsive */
        @media (max-width: 800px) {
            .help-container {
                grid-template-columns: 1fr;
            }

            nav {
                padding: 0 4%;
            }

            .nav-links {
                gap: 12px;
            }

            .nav-links a {
                font-size: 13px;
            }

            .page-header h1 {
                font-size: 30px;
            }
        }

        @media (max-width: 550px) {
            nav {
                height: auto;
                padding: 15px;
                flex-direction: column;
                gap: 12px;
            }

            .nav-links {
                flex-wrap: wrap;
                justify-content: center;
            }
        }
    </style>
</head>

<body>

    <!-- Navigation -->
    <nav>
        <div class="logo">
            🛡️ Cyber<span>Guard</span>
        </div>

        <div class="nav-links">
            <a href="index.php">Home</a>
            <a href="frauds.php">Fraud Awareness</a>
            <a href="safety-tips.php">Safety Tips</a>
            <a href="help.php">Help & Report</a>
        </div>
    </nav>


    <!-- Page Header -->
    <section class="page-header">
        <div class="icon">🆘</div>

        <h1>Help & Report</h1>

        <p>
            Get guidance on what to do if you face a cyber scam or suspicious activity.
        </p>
    </section>


    <!-- Help Cards -->
    <section class="help-container">

        <div class="help-card">
            <div class="help-icon">🚨</div>

            <h2>Report a Cyber Fraud</h2>

            <p>
                If you have been a victim of online fraud, report the incident
                to the appropriate cybercrime authorities as soon as possible.
            </p>

            <a href="https://www.cybercrime.gov.in/"
               target="_blank"
               class="help-btn">
                Report Fraud
            </a>
        </div>


        <div class="help-card">
            <div class="help-icon">🏦</div>

            <h2>Contact Your Bank</h2>

            <p>
                If money has been transferred without your permission,
                immediately contact your bank or payment service provider.
            </p>

            <a href="#" class="help-btn">
                Contact Bank
            </a>
        </div>


        <div class="help-card">
            <div class="help-icon">🔐</div>

            <h2>Secure Your Account</h2>

            <p>
                Change your password, enable two-factor authentication,
                and check your account for suspicious activity.
            </p>

            <a href="safety-tips.php" class="help-btn">
                Safety Tips
            </a>
        </div>

    </section>


    <!-- Important Information -->
    <section class="report-box">

        <h2>⚠️ What Should You Do?</h2>

        <p>
            Do not share OTPs, passwords, PINs, or banking information with anyone.
            Avoid clicking suspicious links and keep screenshots or other evidence
            of suspicious messages or transactions. Report the incident through
            official channels.
        </p>

    </section>


    <!-- Back Home -->
    <div class="back-home">
        <a href="index.php">← Back to Home</a>
    </div>


    <!-- Footer -->
    <footer>
        © 2026 CyberGuard | Cyber Safety & Digital Fraud Awareness
    </footer>

</body>
</html>