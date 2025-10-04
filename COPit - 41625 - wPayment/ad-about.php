<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - COPit</title>
    <link rel="stylesheet" href="assets/css/advertisement.css">
    <link rel="stylesheet" href="assets/css/ad-about.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>
    <?php include 'views/components/header.php'; ?>

    <main>
        <section class="hero" style="border: none;">
            <div class="container">
                <div class="hero-content">
                    <h1><span style="color: #83AFA7;">About</span> <span class="highlight">COPit</span></h1>
                    <p>Revolutionizing thrift shopping through competitive bidding and real-time interactions.</p>
                </div>
                <div class="hero-image">
                    <img src="assets/images/copit_logo.png" alt="COPit Logo" class="large-logo">
                </div>
            </div>
        </section>

        <section class="mission">
            <div class="container">
                <div class="section-header">
                    <h2>
                        <span class="title-primary">Our</span>
                        <span class="title-secondary">Mission</span>
                    </h2>
                </div>
                <div class="mission-intro">
                    <p class="mission-statement">At COPit, we're revolutionizing the thrift shopping experience by creating an exciting and competitive marketplace where sustainability meets style.</p>
                </div>
                
                <div class="values-grid">
                    <div class="value-card">
                        <i class="ri-shopping-bag-line"></i>
                        <h3>Sustainable Shopping</h3>
                        <p>Promoting eco-friendly fashion through pre-loved items, reducing waste, and encouraging conscious consumption.</p>
                        <ul class="value-points">
                            <li><i class="ri-check-line"></i> Reduce fashion waste</li>
                            <li><i class="ri-check-line"></i> Support circular economy</li>
                            <li><i class="ri-check-line"></i> Affordable fashion</li>
                        </ul>
                    </div>
                    <div class="value-card">
                        <i class="ri-group-line"></i>
                        <h3>Community First</h3>
                        <p>Building meaningful connections between buyers and sellers in the thrifting community.</p>
                        <ul class="value-points">
                            <li><i class="ri-check-line"></i> Connect enthusiasts</li>
                            <li><i class="ri-check-line"></i> Share experiences</li>
                            <li><i class="ri-check-line"></i> Build relationships</li>
                        </ul>
                    </div>
                    <div class="value-card">
                        <i class="ri-shield-check-line"></i>
                        <h3>Trust & Security</h3>
                        <p>Ensuring safe and reliable transactions with our innovative Mine-Steal-Lock system.</p>
                        <ul class="value-points">
                            <li><i class="ri-check-line"></i> Secure payments</li>
                            <li><i class="ri-check-line"></i> Verified sellers</li>
                            <li><i class="ri-check-line"></i> Quality assurance</li>
                        </ul>
                    </div>
                </div>

                <div class="mission-stats">
                    <div class="stat-item">
                        <span class="stat-number">10K+</span>
                        <span class="stat-label">Active Users</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">50K+</span>
                        <span class="stat-label">Items Listed</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">95%</span>
                        <span class="stat-label">Satisfied Users</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="team">
            <div class="container">
                <h2><span style="color: #83AFA7;">Meet Our</span> <span class="highlight">Team</span></h2>
                <div class="team-grid">
                    <div class="team-member">
                        <div class="member-photo">
                            <img src="assets/images/team1.jpg" alt="UI/UX & Front End Developer">
                        </div>
                        <h3>Claire Cruz</h3>
                        <p class="role">UI/UX & Front End Developer</p>
                        <p class="bio">Expert in creating beautiful user interfaces and seamless front-end experiences that bring the thrift shopping journey to life.</p>
                    </div>
                    <div class="team-member">
                        <div class="member-photo">
                            <img src="assets/images/team2.png" alt="Back End Developer">
                        </div>
                        <h3>Francis Canapati</h3>
                        <p class="role">Back End Developer</p>
                        <p class="bio">Masterful in building robust server-side solutions and database architectures that power our innovative bidding system.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact">
            <div class="container">
                <h2><span style="color: #83AFA7;">Get in</span> <span class="highlight">Touch</span></h2>
                <p>Have questions or suggestions? We'd love to hear from you!</p>
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="ri-mail-line"></i>
                        <p>support@copit.com</p>
                    </div>
                    <div class="contact-item">
                        <i class="ri-map-pin-line"></i>
                        <p>Manila, Philippines</p>
                    </div>
                    <div class="contact-item">
                        <i class="ri-customer-service-line"></i>
                        <p>+63 XXX XXX XXXX</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'views/components/footer.php'; ?>

    <script src="assets/js/advertisement.js"></script>
</body>
</html> 