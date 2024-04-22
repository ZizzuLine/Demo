<div class="container-fluid footer bg-dark wow fadeIn" data-wow-delay=".3s">
    <div class="container pt-5 pb-4">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <a href="index.php">
                    <h1 class="text-white fw-bold d-block">Zizzu<span class="text-secondary">Line</span> </h1>
                </a>
                <p class="mt-4 text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta facere delectus qui placeat inventore consectetur repellendus optio debitis.</p>
                <div class="d-flex hightech-link">
                    <a href="https://www.facebook.com/polotecnologicoimperiese" target="_blank" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-facebook-f text-primary"></i></a>
                    <a href="https://telegram.me/ptifamiglie" target="_blank" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-telegram text-primary"></i></a>
                    <a href="https://www.instagram.com/polotecnologicoimperiese/" target="_blank" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-instagram text-primary"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="#" class="h3 text-secondary">Short Link</a>
                <div class="mt-4 d-flex flex-column short-link">
                    <?php
                    $current_page = $_SERVER['REQUEST_URI'];
                    // team
                    if ($current_page == "/zizzuline/Webserver/index.php" || $current_page ==  "/zizzuline/Webserver/index.php%20#services") {
                        echo '<a href="index.php" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Home</a>
                        <a href="src/team.php" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Our Team</a>
                        <a href="#services" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Services</a>';
                    } else {
                        echo '<a href="../index.php" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Home</a>
                        <a href="team.php" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Our Team</a>
                        <a href="../index.php #services" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Services</a>';
                    }
                    ?>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="#" class="h3 text-secondary">Service Link</a>
                <div class="mt-4 d-flex flex-column help-link">
                    <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Temperatura</a>
                    <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Umidità</a>
                    <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Velocità</a>
                    <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Carburante</a>
                    <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Percorso</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="#" class="h3 text-secondary">Contact Us</a>
                <div class="text-white mt-4 d-flex flex-column contact-link">
                    <a href="https://www.polotecnologicoimperiese.edu.it" target="_blank" class="pb-3 text-light border-bottom border-primary"><i class="fas fa-map-marker-alt text-secondary me-2"></i> Via S.Lucia 31, Imperia, Italia</a>
                    <a href="https://www.polotecnologicoimperiese.edu.it" target="_blank" class="py-3 text-light border-bottom border-primary"><i class="fas fa-phone-alt text-secondary me-2"></i> (+39) 0183295958</a>
                    <a href="https://www.polotecnologicoimperiese.edu.it" target="_blank" class="py-3 text-light border-bottom border-primary"><i class="fas fa-envelope text-secondary me-2"></i> imis002001@istruzione.it</a>
                </div>
            </div>
        </div>
        <hr class="text-light mt-5 mb-4">
        <div class="row">
            <div class="col-md-6 text-center text-md-start">
                <span class="text-light"><a href="#" class="text-secondary"><i class="fas fa-copyright text-secondary me-2"></i>ZizzuLine</a>, All right reserved.</span>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                <span class="text-light">Designed By <a href="https://htmlcodex.com" class="text-secondary">HTML Codex</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a></span>
            </div>
        </div>
    </div>
</div>