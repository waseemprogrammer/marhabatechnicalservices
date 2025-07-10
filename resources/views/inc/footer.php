<?php
$siteName = "Marhaba Technical";
?>
<footer class="footer">

    <div class="columns">
        <div class="col about">
            <a href="/">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-cyan-400">
                    <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
                </svg>
                <span><?= $siteName ?? "" ?></span>
            </a>
            <p class="about-us">Your trusted partner for all home appliance repairs and installations.</p>
        </div>
        <div class="col quick-links">
            <h2>Quick Links</h2>
            <ul>
                <li><a href="#">About us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="col services-links">
            <h2>Services</h2>
            <ul>
                <li><a href="#">Ac Repair</a></li>
                <li><a href="#">Washing Machine Repair</a></li>
                <li><a href="#">Refrigerator Repair</a></li>
                <li><a href="#">Installation</a></li>
            </ul>
        </div>
        <div class="col contact">
            <h2>Contact us</h2>
            <ul>
                <li>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-cyan-400">
                            <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        <span>UAE, Dubai</span>
                    </a>
                </li>
                 <li>
                    <a href="#">
                       <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-cyan-400"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        <span>0563447645</span>
                    </a>
                </li>
                 <li>
                    <a href="#">
                       <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-cyan-400"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>
                        <span>info@marhabaservices.com</span>
                    </a>
                </li>
            </ul>
           
            
        </div>
    </div>
    <div class="copyright">
        <p> <?= date('Y') ?> &copy; <?= $siteName ?? "" ?> All Rights Reserved</p>
    </div>
</footer>
</body>

</html>