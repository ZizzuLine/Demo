<div class="container-fluid bg-primary">
            <div class="container">
                <nav class="navbar navbar-dark navbar-expand-lg py-0">
                    <a href="../index.php" class="navbar-brand">
                        <h1 class="text-white fw-bold d-block">Zizzu<span class="text-secondary">Line</span> </h1>
                    </a>
                    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                        <div class="navbar-nav ms-auto mx-xl-auto p-0">
                            <a href="../index.php" class="nav-item nav-link">Home</a>
                            <?php
                                $current_page = $_SERVER['REQUEST_URI'];
                                // team
                                if ($current_page == "/zizzuline/Webserver/src/team.php") {
                                    echo '<a href="team.php" class="nav-item nav-link active text-secondary">Our Team</a>';
                                } else {
                                    echo '<a href="team.php" class="nav-item nav-link">Our Team</a>';
                                }
                            ?>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                                <div class="dropdown-menu rounded">
                                    <a href="src/blog.php" class="dropdown-item">Our Blog</a>
                                    <a href="src/team.php" class="dropdown-item">Our Team</a>
                                    <a href="src/testimonial.php" class="dropdown-item">Testimonial</a>
                                    <a href="src/404.php" class="dropdown-item">404 Page</a>
                                </div>
                            </div>
                            <?php
                                // Login
                                if ($current_page == "/zizzuline/Webserver/src/login.php") {
                                    echo '<a href="login.php" class="nav-item nav-link active text-secondary">Login</a>';
                                } else {
                                    echo '<a href="login.php" class="nav-item nav-link">Login</a>';
                                }
                            ?>
                        </div>
                    </div>
                    <div class="d-none d-xl-flex flex-shirink-0">
                        <div class="d-flex align-items-center justify-content-center ms-4 ">
                            <a href="#"><i class="bi bi-search text-white fa-2x"></i> </a>
                        </div>
                    </div>
                </nav>
            </div>
</div>