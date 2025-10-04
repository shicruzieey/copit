document.addEventListener('DOMContentLoaded', function() {
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Mobile navigation toggle
    const createMobileNav = () => {
        const header = document.querySelector('header');
        const nav = document.querySelector('nav');
        
        if (!header || !nav) return;
        
        const mobileToggle = document.createElement('div');
        mobileToggle.className = 'mobile-toggle';
        mobileToggle.innerHTML = `
            <span></span>
            <span></span>
            <span></span>
        `;
        
        header.insertBefore(mobileToggle, nav);
        
        mobileToggle.addEventListener('click', () => {
            nav.classList.toggle('active');
            mobileToggle.classList.toggle('active');
        });
    };

    // Only create mobile nav for smaller screens
    if (window.innerWidth <= 768) {
        createMobileNav();
    }

    // Add animation on scroll
    const animateOnScroll = () => {
        const elements = document.querySelectorAll('.feature-card, .phone-mockup, .hero-content, .bidding-content, .download-content');
        
        elements.forEach(element => {
            const elementPosition = element.getBoundingClientRect().top;
            const screenPosition = window.innerHeight / 1.3;
            
            if (elementPosition < screenPosition) {
                element.classList.add('animate');
            }
        });
    };

    // Add CSS for animations
    const addAnimationStyles = () => {
        const style = document.createElement('style');
        style.textContent = `
            .feature-card, .phone-mockup, .hero-content, .bidding-content, .download-content {
                opacity: 0;
                transform: translateY(30px);
                transition: opacity 0.6s ease, transform 0.6s ease;
            }
            
            .feature-card.animate, .phone-mockup.animate, .hero-content.animate, .bidding-content.animate, .download-content.animate {
                opacity: 1;
                transform: translateY(0);
            }
            
            .mobile-toggle {
                display: none;
            }
            
            @media (max-width: 768px) {
                .mobile-toggle {
                    display: flex;
                    flex-direction: column;
                    justify-content: space-between;
                    width: 30px;
                    height: 21px;
                    cursor: pointer;
                    position: absolute;
                    top: 20px;
                    right: 20px;
                }
                
                .mobile-toggle span {
                    display: block;
                    width: 100%;
                    height: 3px;
                    background-color: var(--text);
                    transition: all 0.3s ease;
                }
                
                .mobile-toggle.active span:nth-child(1) {
                    transform: translateY(9px) rotate(45deg);
                }
                
                .mobile-toggle.active span:nth-child(2) {
                    opacity: 0;
                }
                
                .mobile-toggle.active span:nth-child(3) {
                    transform: translateY(-9px) rotate(-45deg);
                }
                
                nav {
                    display: none;
                    width: 100%;
                }
                
                nav.active {
                    display: block;
                }
                
                nav ul {
                    flex-direction: column;
                    align-items: center;
                }
                
                nav ul li {
                    margin: 10px 0;
                }
            }
        `;
        document.head.appendChild(style);
    };

    addAnimationStyles();
    animateOnScroll();
    
    window.addEventListener('scroll', animateOnScroll);
    
    // Simulate loading state for Get Started button
    const getStartedBtn = document.querySelector('.get-started-btn');
    if (getStartedBtn) {
        getStartedBtn.addEventListener('click', function(e) {
            e.preventDefault();
            this.textContent = 'Loading...';
            this.style.opacity = '0.7';
            
            setTimeout(() => {
                this.textContent = 'Get Started';
                this.style.opacity = '1';
                alert('Thank you for your interest in COPit! The app is coming soon.');
            }, 1500);
        });
    }

    // Mobile Menu Toggle
    const mobileMenuIcons = document.querySelector('.mobile-menu-icons');
    const mobileNav = document.querySelector('.mobile-nav');
    const navLinks = document.querySelectorAll('.nav-link');
    const body = document.body;
    
    if (mobileMenuIcons && mobileNav) {
        mobileMenuIcons.addEventListener('click', function() {
            this.classList.toggle('active');
            mobileNav.classList.toggle('active');
            body.classList.toggle('menu-open');
        });

        // Close menu when clicking a link
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                mobileMenuIcons.classList.remove('active');
                mobileNav.classList.remove('active');
                body.classList.remove('menu-open');
            });
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!mobileNav.contains(e.target) && !mobileMenuIcons.contains(e.target)) {
                mobileMenuIcons.classList.remove('active');
                mobileNav.classList.remove('active');
                body.classList.remove('menu-open');
            }
        });

        // Close menu on window resize
        window.addEventListener('resize', function() {
            if (window.innerWidth > 768) {
                mobileMenuIcons.classList.remove('active');
                mobileNav.classList.remove('active');
                body.classList.remove('menu-open');
            }
        });
    }

    // Update active state on scroll
    function updateActiveState() {
        const sections = document.querySelectorAll('section[id]');
        const scrollY = window.pageYOffset;

        sections.forEach(section => {
            const sectionHeight = section.offsetHeight;
            const sectionTop = section.offsetTop - 100;
            const sectionId = section.getAttribute('id');
            const correspondingLink = document.querySelector(`.nav-link[href="#${sectionId}"]`);

            if (correspondingLink && scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                document.querySelectorAll('.nav-link').forEach(link => link.classList.remove('active'));
                correspondingLink.classList.add('active');
            }
        });
    }

    window.addEventListener('scroll', updateActiveState);
    updateActiveState();
});