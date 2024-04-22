<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HighTech - IT Solutions Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        /* Stile per la finestra modale */
        .popup {
            display: none;
            margin-right: 20%;
            position: fixed;
            color: black;
            z-index: 1;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .popup-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid green;
            width: 80%;
            border-radius: 20px;
        }
    </style>
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- navbar star -->
    <div class="container-fluid bg-primary">
        <div class="container">
            <nav class="navbar navbar-dark navbar-expand-lg py-0">
                <a href="index.php" class="navbar-brand">
                    <h1 id="title" class="text-white fw-bold d-block">Zizzu<span class="text-secondary">Line</span> </h1>
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                    <div class="navbar-nav ms-auto mx-xl-auto p-0">
                        <a href="index.php" class="nav-item nav-link active text-secondary">Home</a>
                        <a href="src/team.php" class="nav-item nav-link">Our Team</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                            <div class="dropdown-menu rounded">
                                <a href="src/blog.php" class="dropdown-item">Our Blog</a>
                                <a href="src/team.php" class="dropdown-item">Our Team</a>
                                <a href="src/testimonial.php" class="dropdown-item">Testimonial</a>
                                <a href="src/404.php" class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        <a href="src/login.html" class="nav-item nav-link">Login</a>
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
    <!-- navbar end -->

    <!-- Carousel Start -->
    <div class="container-fluid px-0">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="img/bus.jpg" class="img-fluid" alt="First slide" style="width: 100%">
                    <div class="carousel-caption">
                        <div class="container carousel-content">
                            <h6 class="text-secondary h4 animated fadeInUp">ZizzuLine</h6>
                            <h1 class="text-white display-1 mb-4 animated fadeInRight">Autobus System</h1>
                            <p class="mb-4 text-white fs-5 animated fadeInDown"></p>
                            <a href="#introduzione" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">Leggi di più</button></a>
                            <a href="src/team.php" class="ms-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Contattaci</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div id="introduzione" class="container-fluid py-5 my-5">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                    <div class="h-100 position-relative">
                        <img src="img/t1.jpg" class="img-fluid w-75 rounded" alt="" style="margin-bottom: 25%;">
                        <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                            <img src="img/t2.jpg" class="img-fluid w-100 rounded" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                    <h5 class="text-primary">ZizzuLine</h5>
                    <h1 class="mb-4">Ottimizzazione dei Trasporti Pubblici</h1>
                    <p>Nel costante sforzo di migliorare l'efficienza dei trasporti pubblici, l'introduzione del sistema di monitoraggio degli autobus attraverso RFID ha rivoluzionato il modo in cui gli utenti interagiscono con questo servizio essenziale. Grazie a questa innovativa tecnologia, ora è possibile accedere a informazioni in tempo reale sull'arrivo degli autobus alle fermate, rendendo i viaggi più prevedibili e comodi per tutti.
                        Il sistema sfrutta l'RFID, una tecnologia di identificazione a radiofrequenza, per tracciare e monitorare gli autobus lungo il loro percorso. Gli autobus sono equipaggiati con dispositivi RFID che comunicano con i tag RFID installati alle fermate. Questa comunicazione permette di determinare con precisione la posizione degli autobus e di fornire agli utenti informazioni aggiornate sull'orario di arrivo stimato.
                        Con l'aiuto di apposite applicazioni per smartphone o pannelli informativi installati alle fermate, gli utenti possono consultare facilmente l'orario previsto di arrivo degli autobus. Questo elimina l'incertezza e l'attesa prolungata alle fermate, consentendo agli utenti di pianificare i propri spostamenti in modo più efficiente e di ridurre i disagi legati ai ritardi.</p>
                    <a onclick="openPopup()" class="btn btn-secondary rounded-pill px-5 py-3 text-white">Più dettagli</a><br>
                </div>
            </div>
        </div>
    </div>

    <!-- About End -->
    <div id="popup" class="popup" onclick="closePopup(event)">
        <div class="popup-content">
            <p>Contenuto popup</p>
        </div>
    </div>

    <!-- Project Start -->
    <div class="container-fluid project py-5 mb-5">
        <div class="container">
            <div class="navbar navbar-expand-lg py-0">
                <div class="nav-item dropdown">
                    <a style="color:black" href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Servizi</a>
                    <div class="dropdown-menu rounded">
                        <a href="index.php" class="dropdown-item">
                            <?php
                            echo '<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 50 50">
                        <path d="M 22.78125 0 C 21.605469 -0.00390625 20.40625 0.164063 19.21875 0.53125 C 12.902344 2.492188 9.289063 9.269531 11.25 15.59375 L 11.25 15.65625 C 11.507813 16.367188 12.199219 18.617188 12.625 20 L 9 20 C 7.355469 20 6 21.355469 6 23 L 6 47 C 6 48.644531 7.355469 50 9 50 L 41 50 C 42.644531 50 44 48.644531 44 47 L 44 23 C 44 21.355469 42.644531 20 41 20 L 14.75 20 C 14.441406 19.007813 13.511719 16.074219 13.125 15 L 13.15625 15 C 11.519531 9.722656 14.5 4.109375 19.78125 2.46875 C 25.050781 0.832031 30.695313 3.796875 32.34375 9.0625 C 32.34375 9.066406 32.34375 9.089844 32.34375 9.09375 C 32.570313 9.886719 33.65625 13.40625 33.65625 13.40625 C 33.746094 13.765625 34.027344 14.050781 34.386719 14.136719 C 34.75 14.226563 35.128906 14.109375 35.375 13.832031 C 35.621094 13.550781 35.695313 13.160156 35.5625 12.8125 C 35.5625 12.8125 34.433594 9.171875 34.25 8.53125 L 34.25 8.5 C 32.78125 3.761719 28.601563 0.542969 23.9375 0.0625 C 23.550781 0.0234375 23.171875 0 22.78125 0 Z M 9 22 L 41 22 C 41.554688 22 42 22.445313 42 23 L 42 47 C 42 47.554688 41.554688 48 41 48 L 9 48 C 8.445313 48 8 47.554688 8 47 L 8 23 C 8 22.445313 8.445313 22 9 22 Z M 25 30 C 23.300781 30 22 31.300781 22 33 C 22 33.898438 22.398438 34.6875 23 35.1875 L 23 38 C 23 39.101563 23.898438 40 25 40 C 26.101563 40 27 39.101563 27 38 L 27 35.1875 C 27.601563 34.6875 28 33.898438 28 33 C 28 31.300781 26.699219 30 25 30 Z"></path></svg>';
                            ?> Pubblico
                        </a>
                        <a href="src/login.html" class="dropdown-item">
                            <?php
                            echo '<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 50 50">
                        <path d="M 25 3 C 18.363281 3 13 8.363281 13 15 L 13 20 L 9 20 C 7.355469 20 6 21.355469 6 23 L 6 47 C 6 48.644531 7.355469 50 9 50 L 41 50 C 42.644531 50 44 48.644531 44 47 L 44 23 C 44 21.355469 42.644531 20 41 20 L 37 20 L 37 15 C 37 8.363281 31.636719 3 25 3 Z M 25 5 C 30.566406 5 35 9.433594 35 15 L 35 20 L 15 20 L 15 15 C 15 9.433594 19.433594 5 25 5 Z M 9 22 L 41 22 C 41.554688 22 42 22.445313 42 23 L 42 47 C 42 47.554688 41.554688 48 41 48 L 9 48 C 8.445313 48 8 47.554688 8 47 L 8 23 C 8 22.445313 8.445313 22 9 22 Z M 25 30 C 23.300781 30 22 31.300781 22 33 C 22 33.898438 22.398438 34.6875 23 35.1875 L 23 38 C 23 39.101563 23.898438 40 25 40 C 26.101563 40 27 39.101563 27 38 L 27 35.1875 C 27.601563 34.6875 28 33.898438 28 33 C 28 31.300781 26.699219 30 25 30 Z"></path></svg>';
                            ?> Privato
                        </a>
                    </div>
                </div>
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <h5 class="text-primary">Technologie</h5>
                    <h1>Utilizzate nel progetto</h1>
                </div>
            </div>
            <br><br>
            <div id="services" class="row g-5" >
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                    <div class="project-item" >
                        <div class="project-img">
                            <img src="img/temperatura.jpg" class="img-fluid w-100 rounded" alt="">
                            <div class="project-content">
                                <a class="text-center" href="src/bus.php?id_argument=1">
                                    <h4 class="text-secondary">Temperatura</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                    <div class="project-item" >
                        <div class="project-img">
                            <img src="img/umidita.jpg" class="img-fluid w-100 rounded" alt="">
                            <div class="project-content">
                            <a class="text-center" href="src/bus.php?id_argument=2">
                                    <h4 class="text-secondary">Umidità</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                    <div class="project-item" >
                        <div class="project-img">
                            <img src="img/velocita.jpg" class="img-fluid w-100 rounded" alt="">
                            <div class="project-content">
                            <a class="text-center" href="src/bus.php?id_argument=3">
                                    <h4 class="text-secondary">Velocità</h4>
                                    <!-- <p class="m-0 text-white">Upcomming Phone</p> -->
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center g-5">
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                        <div class="project-item" >
                            <div class="project-img">
                                <img src="img/carburante.jpg" class="img-fluid w-100 rounded" alt="">
                                <div class="project-content">
                                <a class="text-center" href="src/bus.php?id_argument=4">
                                        <h4 class="text-secondary">Carburante</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                        <div class="project-item" >
                            <div class="project-img">
                                <img src="img/percorso.jpg" class="img-fluid w-100 rounded" alt="">
                                <div class="project-content">
                                <a class="text-center" href="src/bus.php?id_argument=5">
                                        <h4 class="text-secondary">Percorso</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project End -->

    <?php include 'src/footer.php'  ?>

    <!-- Back to Top -->
    <a href="#title" class="btn btn-secondary btn-square rounded-circle back-to-top"><i class="fa fa-arrow-up text-white"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- script -->
    <script>
        // Funzione per aprire la finestra modale
        function openPopup() {
            document.getElementById("popup").style.display = "block";
        }

        // Funzione per chiudere la finestra modale
        function closePopup(event) {
            var popup = document.getElementById("popup");
            if (event.target == popup) {
                popup.style.display = "none";
            }
        }
    </script>

    <!-- Template Javascript -->
    <script src="src/js/main.js"></script>
</body>

</html>