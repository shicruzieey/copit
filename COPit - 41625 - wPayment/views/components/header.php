<link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
<header>
    <div class="container">
        <div class="logo">
            <a href="#">
                <img src="assets/images/copit_logo.png" alt="COPit Logo">
            </a>
        </div>
        <div class="mobile-menu-icons">
            <i class="ri-menu-line hamburger-menu"></i>
            <i class="ri-close-line close-menu"></i>
        </div>
        <nav class="mobile-nav">
            <ul>
                <?php 
                $currentPage = basename($_SERVER['PHP_SELF']);
                $isAboutPage = $currentPage === 'ad-about.php';
                ?>
                <li><a href="<?php echo $isAboutPage ? 'index.php#hero' : '#hero'; ?>" class="nav-link" data-section="hero">Home</a></li>
                <li><a href="<?php echo $isAboutPage ? 'index.php#how-it-works' : '#how-it-works'; ?>" class="nav-link" data-section="how-it-works">How It Works</a></li>
                <li><a href="<?php echo $isAboutPage ? 'index.php#features' : '#features'; ?>" class="nav-link" data-section="features">Features</a></li>
                <li><a href="ad-about.php" class="nav-link <?php echo $isAboutPage ? 'active' : ''; ?>">About Us</a></li>
                <li><a href="<?php echo $isAboutPage ? 'index.php#download' : '#download'; ?>" class="btn-primary nav-link" data-section="download">Download Now</a></li>
            </ul>
        </nav>
    </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const menuIcons = document.querySelector('.mobile-menu-icons');
    const mobileNav = document.querySelector('.mobile-nav');
    const body = document.body;
    const navLinks = document.querySelectorAll('.nav-link');
    
    // Function to open menu
    function openMenu() {
        mobileNav.classList.add('active');
        menuIcons.classList.add('active');
        body.classList.add('menu-open');
    }

    // Function to close menu
    function closeMenu() {
        mobileNav.classList.remove('active');
        menuIcons.classList.remove('active');
        body.classList.remove('menu-open');
    }
    
    menuIcons.addEventListener('click', function() {
        if (mobileNav.classList.contains('active')) {
            closeMenu();
        } else {
            openMenu();
        }
    });

    // Close menu when clicking a link
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            if (this.getAttribute('data-section')) {
                e.preventDefault();
                const targetId = this.getAttribute('data-section');
                const targetSection = document.getElementById(targetId);
                
                if (targetSection) {
                    closeMenu();
                    targetSection.scrollIntoView({ behavior: 'smooth' });
                    updateActiveState(targetId);
                } else if (this.href.includes('#')) {
                    // If we're on the about page and clicking a link to advertisement.php
                    window.location.href = this.href;
                }
            }
            closeMenu();
        });
    });

    // Close menu when clicking outside
    document.addEventListener('click', function(event) {
        const isClickInside = mobileNav.contains(event.target) || menuIcons.contains(event.target);
        if (!isClickInside && mobileNav.classList.contains('active')) {
            closeMenu();
        }
    });

    // Handle window resize
    window.addEventListener('resize', function() {
        if (window.innerWidth > 768) {
            closeMenu();
        }
    });

    // Function to update active state
    function updateActiveState(sectionId) {
        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('data-section') === sectionId) {
                link.classList.add('active');
            }
        });
    }

    // Update active state on scroll
    window.addEventListener('scroll', function() {
        const sections = document.querySelectorAll('section[id]');
        let currentSection = '';
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (pageYOffset >= (sectionTop - sectionHeight / 3)) {
                currentSection = section.getAttribute('id');
            }
        });
        
        if (currentSection) {
            updateActiveState(currentSection);
        }
    });

    // Set initial active state based on URL hash
    if (window.location.hash) {
        const initialSection = window.location.hash.substring(1);
        updateActiveState(initialSection);
    } else {
        // Set home as active by default on the index page
        const currentPage = '<?php echo $currentPage; ?>';
        if (currentPage === 'index.php') {
            updateActiveState('hero');
        }
    }
});
</script> 