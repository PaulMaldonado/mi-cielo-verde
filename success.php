<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Cielo Verde</title>
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Fira+Sans:ital,wght@0,200;0,400;1,700&family=Poppins:wght@800&display=swap" rel="stylesheet">   
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
        .nav-link {
            color: #997206 !important;
            font-weight: bold;
            font-family: 'Dancing Script', cursive;
            font-family: 'Fira Sans', sans-serif;
            font-family: 'Poppins', sans-serif;
        }

        .py-7 {
            padding-top: 10rem !important;
            padding-bottom: 10rem !important;
        }

        .text-main {
            animation: fluid 10s ease-in-out infinite;
            background: linear-gradient(-45deg, #34bfa6, #e73c7e, #23a6d5, #23d5ab);
            background-size: 300%;
            -webkit-background-clip: text;
                    background-clip: text;      
            -webkit-text-fill-color: transparent;
        }

        @keyframes fluid {
            0% { background-position: 0 50% }
            50% { background-position: 100% 50% }
            100% { background-position: 0 50% }
        }
    </style>
</head>
<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-light px-0 py-2">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <span class="fa fa-phone-alt me-2"></span>
                    <span>+52  33 3149 1845</span>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <span class="far fa-envelope me-2"></span>
                    <span>quiero@micieloverde.com </span>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <span>Contactanos:</span>
                    <a href="" class="btn btn-link text-light"><i class="fab fa-facebook"></i></a>
                    <a href="" class="btn btn-link text-light"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-link text-light" href="https://wa.me/523327154184?text=Me%20interesa%20in%20el%20lo%20que%20vendes" target="_blank"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-5 border-bottom shadow-lg">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <img src="./img/CIELO VERDE- SIN FONDO.png" alt="" class="img-fluid" width="260" height="120">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link fw-bold text-uppercase">Inicio</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <section class="section-hero py-7 d-flex">
        <div class="container align-self-center">
            <div class="row">
                <div class="col-lg-7">
                    <img src="./img/mailbox.svg" alt="imagen de email" class="img-fluid">
                </div>

                <div class="col-lg-5 d-flex">
                    <div class="align-self-center">
                        <h1 class="display-4 text-dark fw-bold mb-3 text-uppercase text-main">Gracias por enviarnos tu propuesta!</h1>
                        <p class="text-muted mb-4">
                            Nos pondremos en contacto contigo inmediatamente.
                        </p>
                        
                        <div class="d-grid gap-2">
                            <a href="index.php" class="btn btn-primary shadow-lg p-2">
                                <i class="bi bi-arrow-return-left"></i>
                                Regresar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
</body>
</html>