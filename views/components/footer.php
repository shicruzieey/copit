<footer>
    <div class="container">
        <div class="footer-logo">
            <img src="assets/images/copit_logo.png" alt="COPit Logo">
        </div>
        <div class="footer-links">
            <div class="footer-column">
                <h4>Company</h4>
                <ul>
                    <li><a href="ad-about.php" class="<?php echo basename($_SERVER['PHP_SELF']) === 'ad-about.php' ? 'active' : ''; ?>">About Us</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>Legal</h4>
                <ul>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>Follow Us</h4>
                <div class="social-links">
                    <a href="#" class="social-icon">
                        <i class="ri-instagram-line"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="ri-twitter-line"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="ri-facebook-line"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <p>&copy; 2025 COPit. All rights reserved.</p>
        </div>
    </div>
</footer>

<script src="assets/js/advertisement.js"></script>
<script>
    // Handle mobile navigation
    document.addEventListener('DOMContentLoaded', function() {
        const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
        const nav = document.querySelector('nav');
        
        mobileNavToggle.addEventListener('click', () => {
            mobileNavToggle.classList.toggle('active');
            nav.classList.toggle('active');
        });

        // Close mobile nav when clicking a link
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileNavToggle.classList.remove('active');
                nav.classList.remove('active');
            });
        });

        <?php if(basename($_SERVER['PHP_SELF']) === 'index.php'): ?>
        // Handle active states for navigation on advertisement page
        const sections = document.querySelectorAll('section');
        
        // Update active state on scroll
        window.addEventListener('scroll', () => {
            let current = '';
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (pageYOffset >= (sectionTop - sectionHeight / 3)) {
                    current = section.getAttribute('id');
                }
            });
            
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('data-section') === current) {
                    link.classList.add('active');
                }
            });
        });
        
        // Update active state on click
        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                navLinks.forEach(link => link.classList.remove('active'));
                this.classList.add('active');
            });
        });
        <?php endif; ?>
    });
</script> 