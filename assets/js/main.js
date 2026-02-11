// Car Craft - Main JavaScript File

document.addEventListener('DOMContentLoaded', function() {
    // Navbar scroll effect
    const navbar = document.querySelector('.glass-nav');
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Portfolio filter functionality
    const filterButtons = document.querySelectorAll('.filter-btn');
    const portfolioItems = document.querySelectorAll('.portfolio-item');

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const filterValue = this.getAttribute('data-filter');

            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            this.classList.add('active');

            // Filter portfolio items
            portfolioItems.forEach(item => {
                if (filterValue === 'all' || item.classList.contains(filterValue)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });

    // Contact form validation and submission
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();

            // Basic validation
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const message = document.getElementById('message').value.trim();

            if (!name || !email || !message) {
                alert('Please fill in all required fields.');
                return;
            }

            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert('Please enter a valid email address.');
                return;
            }

            // Submit form via AJAX
            const formData = new FormData(this);

            fetch('send-mail.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Thank you! Your message has been sent successfully.');
                    contactForm.reset();
                } else {
                    alert('Sorry, there was an error sending your message. Please try again.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Sorry, there was an error sending your message. Please try again.');
            });
        });
    }

    // Service booking modal (if implemented)
    const bookButtons = document.querySelectorAll('.book-service-btn');
    bookButtons.forEach(button => {
        button.addEventListener('click', function() {
            const serviceName = this.getAttribute('data-service');
            // You can implement a modal here or redirect to contact page with pre-filled service
            window.location.href = `contact.php?service=${encodeURIComponent(serviceName)}`;
        });
    });

    // Animate numbers (for stats section if added)
    function animateNumbers() {
        const counters = document.querySelectorAll('.counter');
        counters.forEach(counter => {
            const target = +counter.getAttribute('data-target');
            const increment = target / 200;

            function updateCount() {
                const count = +counter.innerText;
                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(updateCount, 10);
                } else {
                    counter.innerText = target;
                }
            }

            updateCount();
        });
    }

    // Trigger number animation when stats section is in view
    const statsSection = document.querySelector('.stats-section');
    if (statsSection) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateNumbers();
                    observer.unobserve(entry.target);
                }
            });
        });
        observer.observe(statsSection);
    }

    // Parallax effect for hero section (optional)
    const heroSection = document.querySelector('.hero-section');
    if (heroSection) {
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const rate = scrolled * -0.5;
            heroSection.style.transform = `translateY(${rate}px)`;
        });
    }

    // Mobile menu close on link click
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    const navbarCollapse = document.querySelector('.navbar-collapse');

    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            if (navbarCollapse.classList.contains('show')) {
                const bsCollapse = new bootstrap.Collapse(navbarCollapse, {
                    hide: true
                });
            }
        });
    });

    // Preloader (if needed)
    window.addEventListener('load', function() {
        const preloader = document.querySelector('.preloader');
        if (preloader) {
            preloader.style.display = 'none';
        }
    });

    // Back to top button
    const backToTopBtn = document.createElement('button');
    backToTopBtn.innerHTML = '<i class="fas fa-arrow-up"></i>';
    backToTopBtn.className = 'back-to-top-btn';
    backToTopBtn.style.cssText = `
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 50px;
        height: 50px;
        background: var(--gradient-primary);
        color: white;
        border: none;
        border-radius: 50%;
        cursor: pointer;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        z-index: 1000;
        box-shadow: var(--shadow);
    `;
    document.body.appendChild(backToTopBtn);

    window.addEventListener('scroll', function() {
        if (window.scrollY > 300) {
            backToTopBtn.style.opacity = '1';
            backToTopBtn.style.visibility = 'visible';
        } else {
            backToTopBtn.style.opacity = '0';
            backToTopBtn.style.visibility = 'hidden';
        }
    });

    backToTopBtn.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // Add fade-in animation to elements
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in-up');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.service-card, .portfolio-item, .glass-card').forEach(el => {
        observer.observe(el);
    });
});
