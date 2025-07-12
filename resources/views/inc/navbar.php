<header class="header">
    <div class="topbar">
        <div class="left">
            <div class="address">
                <address> <i class="fa-solid fa-location-dot"></i>Sharjah</address>
            </div>
            <div class="email"><a href="mailto:info@marhabatechnicalservices.com"><i class="fa-solid fa-envelope"></i>info@marhabatechnicalservices.com</a></div>
            <div class="phone"><a href="tel:+0563447645"> <i class="fa-solid fa-phone"></i> 0563447645 </a></div>
        </div>
        <div class="right">
            <p><a href="#"><i class="fa-brands fa-facebook"></i></a></p>
            <p><a href="#"><i class="fa-brands fa-instagram"></i></a></p>
            <p><a href="#"><i class="fa-brands fa-tiktok"></i></a></p>
            <p><a href="#"><i class="fa-brands fa-youtube"></i></a></p>
        </div>
    </div>
    <nav class="navbar">
        <div class="logo-container">
            <?php
            $logo = true;
            if ($logo):
            ?>
            <a href="/">
                <img class="logo" src="/images/trnsp-logo.png?v=<?= filemtime($_SERVER['DOCUMENT_ROOT'] . '/images/trnsp-logo.png') ?>" alt="Marhaba Technical Services Logo">
            </a>
                <?php else: ?>
                <h2 class="logo"><a href="/"><i class="fa-solid fa-gear"></i> Marhaba Technical Services</a></h2>
            <?php endif ?>
        </div>
        <ul class="nav-links">
            <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
            <li class="nav-item"><a href="/services" class="nav-link">Services</a></li>
            <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="/blog" class="nav-link">Blog</a></li>

        </ul>
        <div class="cta">
            <button class="support"><a href="tel:+0563447645 "><i class="fa-solid fa-headset"></i>
                    <p>Quick Call</p>
                </a></button>
        </div>
    </nav>
</header>