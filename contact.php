<?php include("includes/config.php"); ?>
<?php include("includes/header.php"); ?>

<!-- Page Header -->
<section class="page-header" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 100px 0; color: white;">
    <div class="container text-center" data-aos="fade-up">
        <h1>Contact Us</h1>
        <p>Get in touch for your free consultation and quote</p>
    </div>
</section>

<!-- Contact Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="contact-info">
                    <h2 class="mb-4">Get In Touch</h2>
                    <p class="mb-4">Ready to give your vehicle the premium treatment it deserves? Contact us today for a free consultation and personalized quote.</p>

                    <div class="contact-item mb-4">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h5>Address</h5>
                            <p>123 Auto Street<br>Car City, CC 12345</p>
                        </div>
                    </div>

                    <div class="contact-item mb-4">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-details">
                            <h5>Phone</h5>
                            <p><?php echo SITE_PHONE; ?></p>
                        </div>
                    </div>

                    <div class="contact-item mb-4">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h5>Email</h5>
                            <p><?php echo SITE_EMAIL; ?></p>
                        </div>
                    </div>

                    <div class="contact-item mb-4">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="contact-details">
                            <h5>Business Hours</h5>
                            <p>Monday - Saturday: 8:00 AM - 6:00 PM<br>Sunday: Closed</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="contact-form glass-card">
                    <h3 class="mb-4">Send Us a Message</h3>
                    <form id="contactForm" action="send-mail.php" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Full Name *</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address *</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" name="phone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="service" class="form-label">Service Interested In</label>
                                    <select class="form-control" id="service" name="service">
                                        <option value="">Select Service</option>
                                        <option value="exterior-detailing">Exterior Detailing</option>
                                        <option value="interior-detailing">Interior Detailing</option>
                                        <option value="ceramic-coating">Ceramic Coating</option>
                                        <option value="paint-correction">Paint Correction</option>
                                        <option value="headlight-restoration">Headlight Restoration</option>
                                        <option value="complete-detail">Complete Detail Package</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="vehicle" class="form-label">Vehicle Make & Model</label>
                            <input type="text" class="form-control" id="vehicle" name="vehicle" placeholder="e.g., BMW 3 Series">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message *</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required placeholder="Tell us about your vehicle and detailing needs..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="section-title text-center" data-aos="fade-up">
            <h2>Find Us</h2>
            <p>Visit our location for consultations and service drop-offs</p>
        </div>
        <div class="row" data-aos="fade-up">
            <div class="col-12">
                <div class="map-container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.2412648713906!2d-73.98784868459375!3d40.75889597932781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes%20Square!5e0!3m2!1sen!2sus!4v1643123456789!5m2!1sen!2sus"
                        width="100%"
                        height="400"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Areas -->
<section class="py-5">
    <div class="container">
        <div class="section-title text-center" data-aos="fade-up">
            <h2>Service Areas</h2>
            <p>We provide mobile detailing services throughout the greater metropolitan area</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-area-card text-center">
                    <i class="fas fa-map-marker-alt mb-3"></i>
                    <h4>Downtown</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-area-card text-center">
                    <i class="fas fa-map-marker-alt mb-3"></i>
                    <h4>Westside</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-area-card text-center">
                    <i class="fas fa-map-marker-alt mb-3"></i>
                    <h4>Eastside</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-area-card text-center">
                    <i class="fas fa-map-marker-alt mb-3"></i>
                    <h4>Suburbs</h4>
                </div>
            </div>
        </div>
        <div class="text-center mt-4" data-aos="fade-up">
            <p class="mb-3">Don't see your area? Contact us to check availability.</p>
            <a href="tel:<?php echo SITE_PHONE; ?>" class="btn btn-primary">Call Now</a>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="section-title text-center" data-aos="fade-up">
            <h2>Frequently Asked Questions</h2>
            <p>Common questions about our services</p>
        </div>
        <div class="row">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="faq-item mb-4">
                    <h5>How long does a typical detail take?</h5>
                    <p>Most detailing services take 4-8 hours depending on the package and vehicle condition. We'll provide you with an estimated timeline during your consultation.</p>
                </div>
                <div class="faq-item mb-4">
                    <h5>Do you offer mobile service?</h5>
                    <p>Yes! We offer mobile detailing services and can come to your home or office for your convenience.</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="faq-item mb-4">
                    <h5>What products do you use?</h5>
                    <p>We use only premium, professional-grade products from trusted manufacturers. All our products are safe for your vehicle's surfaces and the environment.</p>
                </div>
                <div class="faq-item mb-4">
                    <h5>Do you provide warranties?</h5>
                    <p>Yes, we offer warranties on our ceramic coating and paint protection services. Warranty terms vary by service.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("includes/footer.php"); ?>
