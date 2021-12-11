<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Select -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/54dd5a7101.js" crossorigin="anonymous"></script>
    <title>zPlaque - Controle technique</title>
</head>
<body>
    <div class="wrapper">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid mx-4">
                <a class="navbar-brand" href="#">
                    <img class="img-fluid" src="img/logo/logo-menu-black.png"/>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars text-light"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item mx-4">
                            <a class="nav-link active" aria-current="page" href="./">Entreprises</a>
                        </li>
                        <li class="nav-item dropdown mx-4">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Particuliers
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="./car-inspection.php">Contrôle technique</a></li>
                                <li><a class="dropdown-item" href="./car-travel.php">Déplacement de véhicule</a></li>
                                <li><a class="dropdown-item" href="./tow-truck.php">Sortie de fourrière</a></li>
                            </ul>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="nav-link nav-book btn btn-light border-0" data-bs-toggle="modal" data-bs-target="#exampleModal"><div class="px-2">Reserver</div></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content border-0">
                    <div class="modal-body border-0">
                        <div class="row">
                            <div class="col-12 mb-5">
                                <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-sm-12 col-md-4 px-5 modal-body-content">
                                <img src="./img/illustration/illustration-01.svg" alt="" class="img-fluid">
                                <div class="modal-description text-center mt-3">Contrôle technique</div>
                                <a href="./car-inspection.php" class="btn btn-green mt-3">Reserver</a>
                            </div>
                            <div class="col-sm-12 col-md-4 px-5 modal-body-content">
                                <img src="./img/illustration/illustration-03.svg" alt="" class="img-fluid">
                                <div class="modal-description text-center mt-3">Deplacement de véhicule</div>
                                <a href="./car-travel.php" class="btn btn-green mt-3">Reserver</a>
                            </div>
                            <div class="col-sm-12 col-md-4 px-5 modal-body-content">
                                <img src="./img/illustration/illustration-05.svg" alt="" class="img-fluid">
                                <div class="modal-description text-center mt-3">Sortie de fourrière</div>
                                <a href="./tow-truck.php" class="btn btn-green mt-3">Reserver</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="car-inspection py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="car-inspection-title">
                            <h1 class="h4">Réservez un chauffeur pour amener votre voiture à son<br><span class="h1 car-inspection-h1-title">Contrôle technique</span></h1>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <img src="./img/illustration/illustration-05.svg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-12 col-lg-6">
                        <p>
                            Laissez nos chauffeurs vous faire économiser du temps et du stress en réservant un rendez-vous pour 
                            votre contrôle technique et en faisant la queue au centre agréé de contrôle technique pour vous.
                        </p>
                        <p>Voici comment cela fonctionne :</p>
                        <div class="car-inspection-step">
                            <div class="car-inspection-step-content mb-4">
                                Faites-nous savoir quand vous souhaitez que notre collaborateur vous appelle en remplissant le formulaire.
                            </div>
                            <div class="car-inspection-step-content mb-4">
                                Lorsque notre centre d’appel vous contacte, veuillez avoir à votre disposition votre certificat de conformité à jour, 
                                votre certificat d’immatriculation, votre dernier certificat de visite en date et votre attestation d’assurance.
                            </div>
                            <div class="car-inspection-step-content mb-4">
                                Nous organiserons les détails avec vous et l’heure et l’emplacement de la prise en charge de votre véhicule par notre chauffeur.
                            </div>
                            <div class="car-inspection-step-content mb-4">
                                Nous prendrons rendez-vous pour votre contrôle technique.
                            </div>
                            <div class="car-inspection-step-content mb-4">
                                Notre chauffeur ira chercher votre voiture chez vous ou à votre bureau, la passera au contrôle technique, et la ramènera après. Vous pourrez suivre votre voiture par GPS pour plus de tranquillité d’esprit.
                            </div>
                            <div class="car-inspection-step-content mb-4">
                                Lorsque le chauffeur revient, vous payerez par carte de débit ou de crédit le contrôle technique et le déplacement du chauffeur.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <p>Laissez-nous vos coordonnées et nous vous appellerons au moment choisi pour organiser la réservation de votre chauffeur.</p>
                        <form>
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="car-inspection-form-language" class="form-label">Langue</label>
                                        <input type="text" class="form-control" id="car-inspection-form-language">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="car-inspection-form-firstname" class="form-label">Prénom</label>
                                        <input type="text" class="form-control" id="car-inspection-form-firstname">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="car-inspection-form-lastname" class="form-label">Nom</label>
                                        <input type="text" class="form-control" id="car-inspection-form-lastname">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="car-inspection-form-email" class="form-label">Adresse mail</label>
                                        <input type="email" class="form-control" id="car-inspection-form-email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="car-inspection-form-phone" class="form-label">N° de téléphone</label>
                                        <input type="text" class="form-control" id="car-inspection-form-phone">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="car-inspection-form-postcode" class="form-label">Code postal</label>
                                        <input type="text" class="form-control" id="car-inspection-form-postcode">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="car-inspection-form-promo" class="form-label">Code promo</label>
                                        <input type="text" class="form-control" id="car-inspection-form-promo">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-green">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
    <!-- SCRIPT -->
    <!-- Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Select -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- Main script -->
    <script src="js/script.js"></script>
</body>
</html>