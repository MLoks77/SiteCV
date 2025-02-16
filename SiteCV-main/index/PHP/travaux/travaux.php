<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Maxime Derènes | Travaux</title>

    <link rel="icon" type="image/png" href="images/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="images/favicon-16x16.png" sizes="16x16" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <link href="../CSS/stylesheet.css" rel="stylesheet">
    <link href="../JS/script.js" rel="javascript">

</head>

<body class="bg-danger bg-opacity-75 text-white scroll-behavior: smooth;">

    <div id="top"></div>

    <header>
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="../MAXIMECV.php">MAXIME DERENES</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="images/box.png" alt="menu" width="25" height="25"
                                    class="d-inline-block align-text-top">
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="../moi/moi.php">Qui suis-je ?</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item text-danger" href="#top">Mes travaux &nbsp <i
                                            class="fa-solid fa-location-arrow"></i></a></li>
                                <li><a class="dropdown-item" href="../projets/projets.php">Mes Hobbys</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="../cvcontact/cvcontact.php">Fiche de contact & CV</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <footer class="bg-dark text-white text-center py-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <h5><i class="fa-solid fa-user"></i>&nbsp Contact</h5>
                    <p><i class="fa-solid fa-envelope"></i>&nbsp maximederenes@gmail.com</p>
                    <p><i class="fa-solid fa-phone"></i>&nbsp Téléphone: +33 07 69 83 94 50</p>
                </div>
                <div class="col-md-4">
                    <h5>Suivez-moi</h5>
                    <a href="https://www.linkedin.com/in/maxime-derènes-9b997932a"
                        class="text-white text-decoration-none"><i class="fa-brands fa-linkedin"></i> &nbsp Sur
                        Linkedin</a>
                </div>
                <div class="col-md-4">
                    <h5>Liens utiles</h5>
                    <ul class="list-unstyled">
                        <li><a href="../MAXIMECV.php" class="text-white text-decoration-none">Accueil</a></li>
                        <li><a href="../moi/moi.php" class="text-white text-decoration-none">Qui suis-je ?</a></li>
                        <li><a href="#top" class="text-white text-decoration-none">Mes travaux</a></li>
                        <li><a href="../projets/projets.php" class="text-white text-decoration-none">Mes hobbys</a></li>
                        <li><a href="../cvcontact/cvcontact.php" class="text-white text-decoration-none">CV & Fiche
                                Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-3">
                <p>&copy; 2025 Maxime Derènes. Tous droits réservés.</p>
                <p>Site réalisé par Maxime Derènes </p>
                <p><i class="fa-brands fa-html5"></i>
                    <i class="fa-brands fa-css3"></i>
                    <i class="fa-brands fa-js"></i>
                    <i class="fa-brands fa-php"></i>
                    <i class="fa-brands fa-bootstrap"></i>
                </p>
            </div>
            <div class="mt-12">
                <a href="#top" class="btn btn-danger"><i class="fa-solid fa-arrow-up"></i></a>
            </div>
        </div>
    </footer>

</body>

</html>