<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Maxime Derènes | Accueil</title>

    <link rel="icon" type="image/png" href="../images/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="../images/favicon-16x16.png" sizes="16x16" />

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
                <a class="navbar-brand" href="#top">MAXIME DERENES &nbsp <i class="fa-solid fa-location-arrow"></i></a>
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
                                <img src="../images/box.png" alt="icone" width="25" height="25"
                                    class="d-inline-block align-text-top">
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="moi/moi.php">Qui suis-je ?</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="travaux/travaux.php">Mes travaux</a></li>
                                <li><a class="dropdown-item" href="projets/projets.php">Mes Hobbys</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="cvcontact/cvcontact.php">Fiche de contact & CV</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container-fluid justified-content-center mt-5">

        <div class="row">
            <div class="col-md-12 justified-content-center text-center">
                <img src="../images/user.png" alt="Maxime Derènes" class="img-fluid rounded-circle" width="150" height="125">
            </div>
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <h1 class="justified-content-center text-center mt-4">Maxime Derènes</h1>
                <p class="text-center mt-2">Je suis un développeur junior passionné par le développement et la création
                    numérique. <br>
                    Je suis actuellement élève à l'IUT Gustave Eiffel de Meaux et je suis à la recherche d'un stage de 4
                    semaines à partir de début juin 2025,
                    je suis à l'écoute de toutes propositions via mail et téléphone hors mes horaires de cours.
                </p>
            </div>
            <div class="col-md-3">
            </div>
        </div>
    </div>

    <section class="container-fluid justified-content-center mt-5">
        <div class="row">
            <div class="col-md-6 mt-5 mb-5 justified-content-center text-center">
                <h2>Qui suis-je ?</h2>
                <p>Une présentation de ma personne.</p><br>
                <a href="moi/moi.php"><img src="../images/bocchig.jpg" alt="hobby" class="rounded-circle" width="150" height="150"></a>
            </div>
            <div class="col-md-6 mt-5 mb-5 justified-content-center text-center">
                <h2>Mes travaux</h2>
                <p>Cette partie est consacré à mes travaux,<br>elle pourrait être considéré comme mon portfolio.</p>
                <a href="travaux/travaux.php"><img src="../images/bocchi.jpg" alt="hobby" class="rounded-circle" width="150" height="150"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mt-5 mb-5 justified-content-center text-center">
                <h2>Mes Hobbys</h2>
                <p>Les hobbys et passe-temps qui m'occupent dans mon temps libre.</p>
                <a href="projets/projets.php"><img src="../images/bocchi.jpg" alt="hobby" class="rounded-circle" width="150" height="150"></a>
            </div>
            <div class="col-md-6 mt-5 mb-5 justified-content-center text-center">
                <h2>Fiche de contact & CV</h2>
                <p>Une fiche comprenant : mail, téléphone et mon CV.</p>
                <a href="cvcontact/cvcontact.php"><img src="../images/bocchig.jpg" alt="hobby" class="rounded-circle" width="150" height="150"></a>
            </div>
        </div>
    </section>






    <footer class="bg-dark text-white text-center py-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 mt-2">
                    <h5><i class="fa-solid fa-user"></i>&nbsp Contact</h5>
                    <p><i class="fa-solid fa-envelope"></i>&nbsp maximederenes@gmail.com</p>
                    <p><i class="fa-solid fa-phone"></i>&nbsp Téléphone: +33 07 69 83 94 50</p>
                </div>
                <div class="col-md-4 mt-2">
                    <h5>Suivez-moi</h5>
                    <a href="https://www.linkedin.com/in/maxime-derènes-9b997932a"
                        class="text-white text-decoration-none"><i class="fa-brands fa-linkedin"></i> &nbsp Sur
                        Linkedin</a>
                </div>
                <div class="col-md-4 mt-2">
                    <h5>Liens utiles</h5>
                    <ul class="list-unstyled">
                        <li><a href="#top" class="text-white text-decoration-none">Accueil</a></li>
                        <li><a href="moi/moi.php" class="text-white text-decoration-none">Qui suis-je ?</a></li>
                        <li><a href="travaux/travaux.php" class="text-white text-decoration-none">Mes travaux</a></li>
                        <li><a href="projets/projets.php" class="text-white text-decoration-none">Mes hobbys</a></li>
                        <li><a href="cvcontact/cvcontact.php" class="text-white text-decoration-none">CV & Fiche
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