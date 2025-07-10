<?php

use App\Core\Helper;

include __DIR__ . '/inc/header.php'; ?>
<main class="main">
    <!-- hero starts -->
    <section class="hero">
        <h1 class="heading">Reliable Home Appliance Repair</h1>
        <p class="detail">Your one-stop solution for fast & efficient technical services in Dubai.</p>
        <a href="tel:+0563447645"><button class="btn">Get a Free Qoute</button></a>
    </section>
    <!-- services section starts -->
    <section class="services">
        <h2 class="heading">Our Services</h2>
        <div class="services-wrapper">
            <?php foreach ($services as $service): ?>
                <div class="service-card">
                    <div class="service-header">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-cyan-400">
                            <path d="M17.7 7.7a2.5 2.5 0 1 1 1.8 4.3H2"></path>
                            <path d="M9.6 4.6A2 2 0 1 1 11 8H2"></path>
                            <path d="M12.6 19.4A2 2 0 1 0 14 16H2"></path>
                        </svg>
                        <h2 class="heading"><i class=""></i><?= $service['title'] ?? "" ?></h2>
                    </div>

                    <p class="detail"><?= $service['detail'] ?></p>
                    <a href="#" class="btn">
                        Learn More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-2">
                            <line x1="5" x2="19" y1="12" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>
            <?php endforeach ?>
        </div>
    </section>
    <!-- why choose us -->
    <section class="question-section">
        <div class="question-wrapper">
            <h2 class="heading">Why Choose Us?</h2>
            <p class="detail">We are committed to providing high-quality, reliable, and affordable technical services. Our experienced technicians are ready to solve your problems quickly and efficiently.</p>
            <div class="data">
                <div class="card">
                    <h2 class="heading highlights">10+</h2>
                    <p class="detail">Years of Experience</p>
                </div>
                <div class="card">
                    <h2 class="heading highlights">1000+</h2>
                    <p class="detail">Happy Customers</p>
                </div>
                <div class="card">
                    <h2 class="heading highlights">24/7</h2>
                    <p class="detail">Emergency Support</p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include __DIR__ . '/inc/footer.php'; ?>