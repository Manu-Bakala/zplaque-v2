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
    <title>zPlaque</title>
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
                                <li><a class="dropdown-item" href="./tow-trucks.php">Sortie de fourrière</a></li>
                            </ul>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="nav-link nav-book btn btn-light border-0" href="#professional"><div class="px-2">Demandez nos prix</div></a>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="nav-link nav-number btn" href="#professional"><div class="px-2">0496 673 927</div></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <section class="home bg-light">
            <div class="home-main">
                <div class="pt-2">
                    <div class="row">
                        <div class="col-lg-6 my-auto">
                            <h1 class="text-big-home mx-5">
                                Vous avez besoin de nos services pour <br><span id="text-home-rotate"></span>
                            </h1>
                        </div>
                        <div class="col-lg-6 mt-5 home-col-illustration">
                            <img class="img-fluid home-illustration text-center mx-5" src="img/illustration/illustration-01.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-ground"></div>
            <form class="home-form-container">
                <div class="container">
                    <div class="home-form p-5">
                        <div class="form-floating">
                            <select class="form-select form-select-service text-muted" id="service_book" aria-label="service_reservation">
                                <option selected disabled>Sélectionner un service</option>
                                <option value="1">Contrôle technique</option>à
                                <option value="2">Déplacement de véhicule</option>
                                <option value="3">Sortie de fourrière</option>
                            </select>
                            <label class="home-label-form" for="service_reservation">Service&nbsp;&nbsp;<i class="fas fa-car"></i></label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select form-select-city text-muted" id="city_book" aria-label="city_book">
                                <option selected disabled>Sélectionner une ville</option>
                                <option value="1">Ottignies</option>
                                <option value="2">Charleroi</option>
                                <option value="3">Waterloo</option>
                            </select>
                            <label class="home-label-form" for="city_book">Ville&nbsp;&nbsp;<i class="fas fa-map-marker-alt"></i></label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="phone_book" value="Numéro de téléphone">
                            <label class="home-label-form" for="phone_book">Téléphone&nbsp;&nbsp;<i class="fas fa-phone-alt"></i></label>
                        </div>
                        <div class="col-lg-1 my-auto">
                            <input type="submit" class="btn btn-green" value="Réserver">
                        </div>
                    </div>
                </div>
            </form>
        </section>
        
        <section class="service bg-white py-5">
            <div class="container">
                <h2 class="text-center mb-5">Nos services de conciergerie automobile</h2>
                <div class="card-carousel">
                    <div class="my-card card-car-inspection prev">
                        <div class="card pb-3">
                            <div class="card-title mt-4">
                                <h3 class="text-center">Contrôle technique</h3>
                            </div>
                            <img src="./img/car-inspection.jpg" class="card-img-top" alt="...">
                            <div class="card-body mx-4">
                                <p class="card-text">
                                    Laissez nos chauffeurs vous faire économiser du temps et du stress en réservant un 
                                    rendez-vous pour votre contrôle technique et en faisant la queue au centre agréé de 
                                    contrôle technique pour vous.
                                </p>
                                <a href="#" class="btn btn-primary d-block">Reserver</a>
                            </div>
                        </div>
                    </div>
                    <div class="my-card card-car-travel active">
                        <div class="card pb-3">
                            <div class="card-title mt-4">
                                <h3 class="text-center">Déplacement de véhicule</h3>
                            </div>
                            <img src="./img/car-travel.jpg" class="card-img-top" alt="...">
                            <div class="card-body mx-4">
                                <p class="card-text">
                                    Déplacement de votre véhicule d’un point A à un point B dans toute la Belgique, 
                                    même s’il n’est pas assuré ou pas en ordre de contrôle technique. 
                                    Le déplacement d’un véhicule avec des plaques Z vous coûtera deux fois moins cher 
                                    qu’une dépanneuse.
                                </p>
                                <a href="#" class="btn btn-primary d-block">Reserver</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="my-card card-tow-truck next">
                        <div class="card pb-3">
                            <div class="card-title mt-4">
                                <h3 class="text-center">Sortie de fourrière</h3>
                            </div>
                            <img src="./img/tow-truck.jpg" class="card-img-top" alt="...">
                            <div class="card-body mx-4">
                                <p class="card-text">
                                    Si vous souhaitez récupérer votre véhicule à la fouriere après un mauvais parking, 
                                    une inspection de police ou des problèmes d’assurance, veuillez contacter notre équipe 
                                    sympathique et fiable pour récupérer votre véhicule immédiatement.
                                </p>
                                <a href="#" class="btn btn-primary d-block">Reserver</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="conciergerie py-5">
            <div class="container">
                <h2 class="text-center mb-4">Qu’est-ce qu’une Conciergerie Automobile ?</h2>
                <p>C’ est un service de conciergerie spécialisé dans l’automobile qui s’occupe de prendre rendez-vous à votre place chez un prestataire et de conduire votre véhicule chez celui-ci.</p>
                <p>
                    Du contrôle technique obligatoire à la révision en passant par le rapatriement, la livraison, la sortie de fourrière ou tout autre besoin, 
                    nos professionnels prennent en charge tout le processus de A à Z sans que vous n’ayez à intervenir à aucun moment.
                </p>
                <p>L’équipe de zPlaque.be peut vous venir en aide et vous faire gagner du temps !</p>
                <p>
                    Ce concept très répandu aux Etats-Unis assiste tous les propriétaires d’automobile n’ayant pas le temps de s’occuper de celle-ci. 
                    Il permet d’éviter de perdre de longues heures en attente inutile et de les consacrer à son travail, à sa famille ou à des loisirs.
                </p>
            </div>
        </section>

        <section class="advantages py-5">
            <div class="container">
                <h2 class="text-center">Vos avantages ?</h2>
                <p class="text-muted text-center mb-5">Nous voulons garantir une expérience parfaite du début à la fin</p>
                <div class="row">
                    <div class="col-lg-4 col-sm-12">
                        <div class="card advantages-card border-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="advantages-title mb-3">
                                            <img src="./img/icone/easy.png" class="me-2 advantages-icon" alt="" srcset="">
                                            <h3>Simplicité</h3>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="advantages-text mx-4">
                                            Un coup de fil, une demande en ligne et le tour est joué !
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="card advantages-card border-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="advantages-title mb-3">
                                            <img src="./img/icone/security.png" class="me-2 advantages-icon" alt="" srcset="">
                                            <h3>Sécurité</h3>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="advantages-text mx-4">
                                            Le processus est intégralement assuré et sous contrôle.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="card advantages-card border-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="advantages-title mb-3">
                                            <img src="./img/icone/peace.png" class="me-2 advantages-icon" alt="" srcset="">
                                            <h3>Sérénité</h3>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="advantages-text mx-4">
                                            Tous nos chauffeurs viennent du secteur de l’automobile et son fiables.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-5 text-center">
                        <a href="#" class="btn btn-green px-4 py-2">Réserver un service</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="step py-5">
            <video autoplay muted loop id="timeline-background-video">
                <source src="./img/video/timeline-background.mp4" type="video/mp4">
            </video>
            <div class="step-content">
                <div class="container">
                    <div class="step-title">
                        <h2 class="font-weight-bold text-center">Comment ça marche ?</h2>
                        <p class="text-muted text-center">Nous avons rendus le processus de commande de service Plus facile et rapide.</p>
                    </div>
                    <div class="timeline mt-5">
                        <div class="timeline-item">
                            <img src="./img/icone/timeline-quote.png" alt="" class="timeline-img">
                        </div>
                        <div class="timeline-item">
                            <img src="./img/icone/timeline-accepted.png" alt="" class="timeline-img">
                        </div>
                        <div class="timeline-item">
                            <img src="./img/icone/timeline-deadline.png" alt="" class="timeline-img">
                        </div>
                        <div class="timeline-item">
                            <img src="./img/icone/timeline-driver.png" alt="" class="timeline-img">
                        </div>
                        <div class="timeline-item">
                            <img src="./img/icone/timeline-loupe.png" alt="" class="timeline-img">
                        </div>
                        <div class="timeline-item">
                            <img src="./img/icone/timeline-car.png" alt="" class="timeline-img">
                        </div>
                        <div class="timeline-item">
                            <img src="./img/icone/timeline-payment.png" alt="" class="timeline-img">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="customer-comment py-5">
            <div class="container">
                <h2 class="text-center">Ils nous font confiance</h2>   
            </div>
        </section>

        <section class="professional py-5" id="professional">
            <div class="container">
                <h2 class="text-center mb-5">Bienvenu(e) dans l'espace professional</h2>
                <div class="row">
                    <div class="col-mb-12 col-lg-6">
                        <form>
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="pro-email" class="form-label">Adresse mail</label>
                                        <input type="email" class="form-control" id="pro-email" aria-describedby="emailHelp">
                                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="mb-3">
                                        <label for="pro-firstname" class="form-label">Prénom</label>
                                        <input type="text" class="form-control" id="pro-firstname" >
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="mb-3">
                                        <label for="pro-lastname" class="form-label">Nom</label>
                                        <input type="text" class="form-control" id="pro-lastname" >
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="mb-3">
                                        <label for="pro-language" class="form-label">Langue</label>
                                        <input type="text" class="form-control" id="pro-language" >
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="mb-3">
                                        <label for="pro-phone" class="form-label">Numéro de téléphone</label>
                                        <input type="text" class="form-control" id="pro-phone" >
                                    </div>
                                </div> 
                                <div class="col-sm-12 col-md-6">
                                    <button type="submit" class="btn btn-green">Soumettre</button>
                                </div>
                            </div> 
                        </form>                        
                    </div>
                    <div class="col-mb-12 col-lg-6">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus necessitatibus distinctio ratione dolorem possimus! Debitis corporis dolor pariatur exercitationem, quia incidunt dicta quis, tempore minima consectetur ipsam iure delectus suscipit, quidem recusandae? Doloremque nihil consequatur eius animi corporis non illo? Est eos suscipit ullam sapiente fugiat ad ea doloribus eligendi sunt quo inventore quas unde nostrum, placeat aliquam necessitatibus itaque laboriosam minima voluptas totam deserunt voluptates optio rerum iure? Dolores sit assumenda facilis fugiat natus perferendis maiores enim architecto corrupti dolorem excepturi reiciendis eum dicta fugit qui autem voluptatum sint, impedit similique esse dolorum nobis voluptates! Sit praesentium ut magni deleniti libero a earum iure est dicta voluptas? Recusandae quae facere dolorum quibusdam distinctio assumenda laborum nostrum sit voluptate ipsum.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact py-5">
            <div class="container">
                <h2 class="text-center mb-5">Contactez zPlaque.be par email en remplissant ce formulaire</h2>
                <div class="row">
                    <div class="col-mb-12 col-lg-8">
                        <form>
                            <div class="row">
                                <div class="col-sm-12 col-lg-6">
                                    <div class="mb-3">
                                        <label for="contact-firstname" class="form-label">Prénom</label>
                                        <input type="text" class="form-control" id="contact-firstname">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6">
                                    <div class="mb-3">
                                        <label for="contact-lastname" class="form-label">Nom</label>
                                        <input type="text" class="form-control" id="contact-lastname">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6">
                                    <div class="mb-3">
                                        <label for="contact-phone" class="form-label">Téléphone</label>
                                        <input type="text" class="form-control" id="contact-phone">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6">
                                    <div class="mb-3">
                                        <label for="contact-mail" class="form-label">Adresse email</label>
                                        <input type="text" class="form-control" id="contact-mail">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-green">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-mb-12 col-lg-4">
                        <h3 class="text-center">Rappel gratuit</h3>
                        <img src="./img/illustration/illustration-02.svg" alt="" class="img-fluid">
                        <form class="mb-4">
                            <div class="mb-3">
                                <label for="callback-phone" class="form-label">Téléphone</label>
                                <input type="text" class="form-control" id="callback-phone">
                            </div>
                            <button type="submit" class="btn btn-green">Me rappeler</button>
                        </form>
                        <h4>Ou appelez-nous au +32 485 85 85 85 </h4>
                        <p>Horaires d'ouverture : Disponible 24h/24 7j/7</p>
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
    <!-- Rotate text -->
    <script src="js/text-rotate.js"></script>
    <!-- Main script -->
    <script src="js/carousel.js"></script>
    <script src="js/script.js"></script>
</body>
</html>