<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COPit - Competitive Thrift Shopping App</title>
    <link rel="stylesheet" href="assets/css/advertisement.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>
    <?php include 'views/components/header.php'; ?>

    <main>
        <section class="hero">
            <div class="container">
                <div class="hero-image">
                    <div class="phone-mockup">
                        <div class="phone-screen">
                            <div class="app-content">
                                <div class="app-logo">
                                    <img src="assets/images/copit_logo.png" alt="COPit Logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-content">
                    <h1><span style="color: #83AFA7;">Welcome to</span> <span class="highlight">COPit!</span></h1>
                    <p>Discover the thrill of competitive thrift shopping with our unique Mine-Steal-Lock system.</p>
                    <div class="cta-buttons">
                        <a href="#download" class="btn-primary">Get Started</a>
                        <a href="#how-it-works" class="btn-secondary">Learn More</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="how-it-works" class="how-it-works">
            <div class="container">
                <h2><span style="color: #83AFA7;">How it</span> <span class="highlight">works?</span></h2>
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="phone-mockup small">
                            <div class="phone-screen">
                                <div class="feature-icon mine-icon">
                                    <img src="assets/images/mine.png" alt="Mine Icon">
                                </div>
                            </div>
                        </div>
                        <div class="feature-description">
                            <h3 style="color: #83AFA7; font-size: 1.2rem; margin-bottom: 10px;"><span style="color: #FF7F5C;">Mine</span> - Instantly claim an item</h3>
                            <p>See something you like? Claim it instantly before someone else does!</p>
                        </div>
                    </div>

                    <div class="feature-card">
                        <div class="phone-mockup small">
                            <div class="phone-screen">
                                <div class="feature-icon steal-icon">
                                    <img src="assets/images/steal.png" alt="Steal Icon">
                                </div>
                            </div>
                        </div>
                        <div class="feature-description">
                            <h3 style="color: #83AFA7; font-size: 1.2rem; margin-bottom: 10px;"><span style="color: #FF7F5C;">Steal</span> - Outbid and take it</h3>
                            <p>See an item someone else claimed? Place a higher bid and steal it!</p>
                        </div>
                    </div>

                    <div class="feature-card">
                        <div class="phone-mockup small">
                            <div class="phone-screen">
                                <div class="feature-icon lock-icon">
                                    <img src="assets/images/lock.png" alt="Lock Icon">
                                </div>
                            </div>
                        </div>
                        <div class="feature-description">
                            <h3 style="color: #83AFA7; font-size: 1.2rem; margin-bottom: 10px;"><span style="color: #FF7F5C;">Lock</span> - Secure the item at the highest price</h3>
                            <p>Lock in your item at the highest price to ensure it's yours!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="features" class="bidding">
            <div class="container">
                <div class="bidding-content">
                    <h2><span style="color: #83AFA7; font-weight: 800;">Bid and</span> <span style="color: #FF7F5C; font-weight: 800;">Win!</span></h2>
                    <div class="bidding-details">
                        <p>Place your bids and stay on top.</p>
                        <p>The highest bidder takes the win when the timer runs out!</p>
                        <a href="sample-app.apk" download="COPit-Sample.apk" class="btn-primary">Start Bidding Now</a>
                    </div>
                </div>
                <div class="bidding-image">
                    <div class="phone-mockup">
                        <div class="phone-screen">
                            <div class="feature-icon" style="transform: scale(2.5);">
                                <img src="assets/images/bid_icon.png" alt="Bid Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="download" class="download">
            <div class="container">
                <div class="download-content">
                    <h2 style="color: #83AFA7;">Ready to start your thrifting adventure?</h2>
                    <p>Pag nakita mo na, COPit na!</p>
                    <div class="download-buttons">
                        <a href="sample-app.apk" download="COPit-Sample.apk" class="btn-store">
                            <svg width="20" height="24" viewBox="0 0 20 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.1,3.5L10.4,0L0,10.4L10.4,20.8L14.1,17.3V3.5Z" fill="#5EBFB5"/>
                                <path d="M14.1,17.3L17.8,13.8L20,12L17.8,10.2L14.1,6.7L16.3,12L14.1,17.3Z" fill="#FF7F5C"/>
                                <path d="M14.1,3.5L17.8,6.9L16.3,12L14.1,3.5Z" fill="#5EBFB5"/>
                                <path d="M14.1,17.3L16.3,12L17.8,17.1L14.1,20.8V17.3Z" fill="#5EBFB5"/>
                            </svg>
                            Download APK (Test)
                        </a>
                        <a href="#" class="btn-store">
                            <svg width="20" height="24" viewBox="0 0 20 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.3,12.8C16.3,10.2,18.4,9.1,18.5,9C17.2,7.1,15.1,6.8,14.4,6.8C12.6,6.6,10.9,7.8,10,7.8C9,7.8,7.6,6.8,6.1,6.8C4.2,6.8,2.4,7.9,1.4,9.6C-0.6,13.1,0.9,18.2,2.8,21C3.8,22.3,4.9,23.8,6.4,23.7C7.8,23.6,8.3,22.8,10,22.8C11.6,22.8,12.1,23.7,13.6,23.7C15.1,23.6,16.1,22.3,17,21C18.2,19.5,18.7,18.1,18.7,18C18.6,18,16.3,17.1,16.3,12.8Z" fill="#5EBFB5"/>
                                <path d="M13.3,4.8C14.1,3.8,14.7,2.4,14.5,1C13.3,1.1,11.8,1.8,11,2.8C10.2,3.7,9.5,5.1,9.8,6.5C11.1,6.6,12.5,5.9,13.3,4.8Z" fill="#FF7F5C"/>
                            </svg>
                            Download on App Store
                        </a>
                    </div>
                </div>
                <div class="download-image">
                    <div class="phone-mockup">
                        <div class="phone-screen">
                            <div style="height: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 40px 20px; gap: 30px;">
                                <div class="app-logo">
                                    <img src="assets/images/copit_logo.png" alt="COPit Logo" style="width: 100px; height: auto;">
                                </div>
                                <div style="text-align: center;">
                                    <p style="color: #83AFA7; font-size: 0.9rem; margin: 0;">Pag nakita mo na,<br><span style="color: #FF7F5C;">COPit</span>-in mo!</p>
                                </div>
                                <a href="sample-app.apk" download="COPit-Sample.apk" class="get-started-btn" style="background-color: #83AFA7; border-radius: 25px; padding: 8px 24px; color: white; text-decoration: none; font-weight: 500; font-size: 0.9rem;">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'views/components/footer.php'; ?>

    <script src="assets/js/advertisement.js"></script>
</body>
</html>