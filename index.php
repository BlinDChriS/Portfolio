<!DOCTYPE html>
<html lang="fr">

<head>

    <head>
        <meta charset="utf-8">
        <title>BlinDChriS, Développeur, intégrateur Web & graphiste</title>
        <meta name="description" content="BlinDChriS, un développeur Web créatif et à votre écoute">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="Content-Type" content="text/html" />
        <meta name="author" content="BlinDChriS">
        <link rel="shortcut icon" href="favicon.ico">


        <!--======================================== Bootstrap CSS ========================================-->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!--======================================== FONTS ========================================-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'
            type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
        
        <!--======================================== MAP CSS ========================================-->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"/>

        <!--======================================== My CSS ========================================-->
        <link href="css/blindchris.css" rel="stylesheet">







        <!-- MAPBOX SCRIPT -->

        <!-- Nous chargeons les fichiers CDN de Leaflet. Le CSS AVANT le JS -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"/>
        <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"></script>
		<script type="text/javascript">
			// On initialise la latitude et la longitude de Paris (centre de la carte)
			var lat = 47.23464;
			var lon = 6.02069;
            var macarte = null;
            // Nous initialisons une liste de marqueurs
            var villes = {
                "Besançon": { "lat": 47.23464, "lon": 6.02069 },
                "Antony": { "lat": 48.7358961, "lon": 2.3038353 }
            };
			// Fonction d'initialisation de la carte
			function initMap() {
				// Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
                macarte = L.map('map').setView([lat, lon], 17);
                // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
                L.tileLayer('//{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png', {
                    // Il est toujours bien de laisser le lien vers la source des données
                    attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
                    minZoom: 1,
                    maxZoom: 20
                }).addTo(macarte);
                // Nous parcourons la liste des villes
	            for (ville in villes) {
                var marker = L.marker([villes[ville].lat, villes[ville].lon]).addTo(macarte);
                // Nous ajoutons la popup. A noter que son contenu (ici la variable ville) peut être du HTML
                marker.bindPopup(ville);
                }
            }
			window.onload = function(){
				// Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
                initMap(); 
                // Nous ajoutons un marqueur
            var marker = L.marker([lat, lon]).addTo(macarte);
            
			};
		</script>

    </head>

<body id="page-top">

    <!--======================================== Navbar ========================================-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img id="navbar-logo" src="img/blindchris.svg"
                    alt="BlinDChriS"></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-caret-down"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">À propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--========================================  H E A D E R  ========================================-->
    <header class="masthead">
        <div class="container">
            <div class="intro-text">
                    <div class="intro-heading"><img class="logointro" src="img/blindchris.svg" alt="BlinDChriS"></div>
                <div class="intro-lead-in">Bienvenue sur le portfolio du développeur Web<br>Front-end et graphiste
                    illustrateur BlinDChriS</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Dites m'en plus.</a>
            </div>
        </div>
    </header>


    <!--========================================  S E R V I C E S  ========================================-->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">Ce que je peux vous apporter </h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-3">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="spin fas fa-flask fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Vos besoins</h4>
                    <p class="hvr-float-shadow text-muted">C'est une affaire d'alchimie et c'est en échangeant des idées que nous
                        arriverons à la formule qui marche. Je vous écoute et je crée le plan qu'il vous faut.</p>
                </div>
                <div class="col-lg-3">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="spin fas fa-tablet-alt fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Responsive Design</h4>
                    <p class="hvr-float-shadow text-muted">Votre site Web sera sexy quelque soit l'écran, sur mobile, tablette,
                        ordinateurs, téléviseurs... ça fera peut-être même le café.</p>
                </div>
                <div class="col-lg-3">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="spin fas fa-code fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Codé avec soin</h4>
                    <p class="hvr-float-shadow text-muted">Un site web optimisé et bien référencé, un véritable travail de fourmi pour
                        un résultat propre et efficace</p>
                </div>
                <div class="col-lg-3">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="spin fas fa-heart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Fait avec amour</h4>
                    <p class="hvr-float-shadow text-muted">Il faut faire les choses avec amour de nos jours. Le site Web sera livré
                        fonctionnel et à jour.</p>
                </div>
            </div>
        </div>
    </section>

    <!--========================================  P O R T F O L I O  ========================================-->
    <section class="bg-light" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Portfolio</h2>
                    <h3 class="section-subheading text-muted">Mes réalisations.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/portfolio/restaurant-thumbnail.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Restaurant</h4>
                        <p class="text-muted">Site Web</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/portfolio/blueasy-thumbnail.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Blueasy</h4>
                        <p class="text-muted">Site Web</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/portfolio/invader-thumbnail.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Quel nombre?</h4>
                        <p class="text-muted">Jeu javascript</p>
                    </div>
                </div>

            </div>
        </div>
    </section>




    <!--==========================================  A  P R O P O S   ==========================================-->
    <section id="about">
        <div class="container">
            <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>À PROPOS</h2>
                         <h3 class="section-subheading text-muted"> Développeur Front-End ... mais aussi un passionné de cultures numériques</h3>
                    </div>
            </div>
        </div>
    </section>

    <!--======================================== M O N  P A R C O U R S ========================================-->
    <section id="parcours">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Mon parcours</h2>
                    <h3 class="section-subheading text-muted">Quelques points-clés de mon parcours</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="parcours">
                        <li>
                            <div class="parcours-image">
                                <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
                            </div>
                            <div class="parcours-panel">
                                <div class="parcours-heading">
                                    <h4>2018-2019</h4>
                                    <h4 class="subheading">Développement Web</h4>
                                </div>
                                <div class="parcours-body">
                                    <p class="text-muted">Une remise à niveau et une formation professionnalisante
                                        auprès de <br><i>Code Access School</i> me permettent d'acquérir des
                                        compétences de développeur et intégrateur Web à travers la pratique du coding
                                        et la réalisation de projets formateurs.</p>
                                </div>
                            </div>
                        </li>
                        <li class="parcours-inverted">
                            <div class="parcours-image">
                                <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
                            </div>
                            <div class="parcours-panel">
                                <div class="parcours-heading">
                                    <h4>Mai 2011</h4>
                                    <h4 class="subheading">Assistant de communication</h4>
                                </div>
                                <div class="parcours-body">
                                    <p class="text-muted">Responsable de la création de chaînes Youtube et Dailymotion
                                        de l'<i>adami</i>, j'étais également en charge d'alimenter l'actualité
                                        culturelle du site officiel et les bases de données relatives.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="parcours-image">
                                <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
                            </div>
                            <div class="parcours-panel">
                                <div class="parcours-heading">
                                    <h4>Octobre 2010</h4>
                                    <h4 class="subheading">Médiation culturelle<br>Arts Numériques.<br>Le Cube</h4>
                                </div>
                                <div class="parcours-body">
                                    <p class="text-muted">Un séjour enrichissant dans le monde des arts numérique sau
                                        centre Le Cube à Issy-les-Moulineaux, des rencontres avec des artistes, souvent
                                        des codeurs et développeurs. Présentation d'oeuvres originales auprès de
                                        publics néophytes, animation d'ateliers de programmation de jouets
                                        intelligents.</p>
                                </div>
                            </div>
                        </li>
                        <li class="parcours-inverted">
                            <div class="parcours-image">
                                <img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="">
                            </div>
                            <div class="parcours-panel">
                                <div class="parcours-heading">
                                    <h4>2009-2011</h4>
                                    <h4 class="subheading">Master<br>Administration culturelle & <br>ingénierie
                                        artistique</h4>
                                </div>
                                <div class="parcours-body">
                                    <p class="text-muted">Un Master orienté Multimédia et internet avec un mémoire sur
                                        les arts numériques. Musicien autoproduit, bloggueur, graphiste freelance à mes
                                        heures, création de sites Web via CMS Wordpress.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="parcours-image">
                                <img class="rounded-circle img-fluid" src="img/about/5.jpg" alt="">
                            </div>
                            <div class="parcours-panel">
                                <div class="parcours-heading">
                                    <h4>2006-2009</h4>
                                    <h4 class="subheading">Licence<br>Arts du spectacle & Musique</h4>
                                </div>
                                <div class="parcours-body">
                                    <p class="text-muted">Des années productives, en plus des enseignements culturels,
                                        Histoire des Arts, Musicologie, ateliers de théâtre, musique, vidéo, j'ai
                                        contribué à diverses créations étudiantes (prints & illustrations) . J'ai également été
                                        co-rédacteur en chef et maquettiste pour le journal culturel de l'université
                                        d'Evry Val d'Essonne.</p>
                                </div>
                            </div>
                        </li>
                        <li class="parcours-inverted">
                            <div class="parcours-image">
                                <h4>Point
                                    <br>de
                                    <br>départ</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!--========================================  C O N T A C T  ========================================-->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Me contacter</h2>
                    <h3 class="section-subheading text-muted">Rien de plus facile. Utilisez ce formulaire.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-12">
                    <form id="contactForm" name="sentMessage" novalidate="novalidate">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" id="name" type="text" placeholder="Nom *" required="required"
                                        data-validation-required-message="Renseignez votre nom et prénom, je vous prie.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="email" type="email" placeholder="Email *" required="required"
                                        data-validation-required-message="Veuillez renseigner votre adresse Email.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="phone" type="tel" placeholder="Téléphone *"
                                        required="required" data-validation-required-message="Renseignez votre numéro de téléphone, je vous prie.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control" id="message" placeholder="Message *" required="required"
                                        data-validation-required-message="Veuillez taper un message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send
                                    Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                    <div class="col-lg-8 col-12">
                        <div id="map">
                    <!-- Ici s'affichera la carte -->
                        </div>
                    </div>
            </div>
        </div>
    </section>


    <!--========================================  F O O T E R  ========================================-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; BlinDChriS 2018</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item">
                            <a href="https://twitter.com/BlinDChriS_" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.linkedin.com/in/christiananismoroni/" target="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://github.com/BlinDChriS" target="_blank">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item">
                            <a href="#">Conditions d'utilisation</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!--========================================  P O R T F O L I O détails  ========================================-->

    <!--======================================== portfolio 1 ========================================-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mx-auto">
                            <div class="modal-body">
                                <h2 class="text-uppercase">Restaurant Lambda</h2>
                                <p class="item-intro text-muted">Création d'un site Web & intégration d'après maquette</p>
                                <img class="img-fluid d-block mx-auto" src="img/portfolio/restaurant-full.jpg" alt="Site Web d'un restaurant lambda">
                                <p>Ce site a été codé en HTML et CSS en intégrant un framework. Il s'agissait d'un
                                    exercice dans le cadre de la formation <b><i>Code Access School</i></b>. Ce travail
                                    d'équipe a été accompli en exportant les ressources depuis une maquette Photoshop.</p>
                                <ul class="list-inline">
                                    <li>Date: Décembre 2018</li>
                                    <li>Client: Code Access School</li>
                                    <li>Categorie: Site web One page.</li>
                                </ul>
                                <a class="buttonlnk btn btn-primary" href="https://christiana.promo-27.codeur.online/restaurant/"
                                    target="_blank"><i class="fas fa-eye"></i> Voir le site</a>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times"></i>
                                    Fermer le projet</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--======================================= portfolio 2 ========================================-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mx-auto">
                            <div class="modal-body">
                                <h2 class="text-uppercase">Virus-Invader</h2>
                                <p class="item-intro text-muted">Codage d'un jeu en javascript</p>
                                <img class="img-fluid d-block mx-auto" src="img/portfolio/invader-full.jpg" alt="">
                                <p>Ce jeu en javascript se présente sur une page web. Il a été codé dans le cadre de la
                                    formation <b><i>Code Access School</i></b>. Nous avons créé une maquette design
                                    avant de l'intégrer en CSS et HTML.</p>
                                <ul class="list-inline">
                                    <li>Date: Janvier 2019</li>
                                    <li>Client: Code Access School</li>
                                    <li>Categorie: Jeu</li>
                                </ul>
                                <a class="buttonlnk btn btn-primary" href="https://christiana.promo-27.codeur.online/JS-Virus-Invader/"
                                    target="_blank"><i class="fas fa-eye"></i> Voir le site</a>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times"></i>
                                    Fermer le projet</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--======================================== portfolio 3 ========================================-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mx-auto">
                            <div class="modal-body">
                                <h2 class="text-uppercase">Portfolio Blueasy</h2>
                                <p class="item-intro text-muted">Création d'un site Web & intégration d'après maquette</p>
                                <img class="img-fluid d-block mx-auto" src="img/portfolio/blueasy-full.jpg" alt="Modèle de portfolio">
                                <p>Ce site a été codé en HTML et CSS en intégrant un framework. C'est un travail
                                    accompli en solo pendant la formation <b><i>Code Access School</i></b>. Le site a
                                    été réalité en exportant les ressources depuis une maquette Photoshop.</p>
                                <ul class="list-inline">
                                    <li>Date: Janvier 2019</li>
                                    <li>Client: Code Access School</li>
                                    <li>Categorie: Site web One page</li>
                                </ul>
                                <a class="buttonlnk btn btn-primary" href="https://christiana.promo-27.codeur.online/blueasy/"
                                    target="_blank"><i class="fas fa-eye"></i> Voir le site</a>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times"></i>
                                    Fermer le projet</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>

    <!--========================================  Contact form JavaScript  ========================================-->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    
    <!--========================================  OpenMap JS  ========================================-->
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"></script>

    <!--========================================  Custom scripts  ========================================-->
    <script src="js/blindchris.js"></script>

</body>

</html>