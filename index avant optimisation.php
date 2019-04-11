<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Assurmf</title>

    <link rel="icon" href="images/logo.ico" />

    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="ASSURMF à LORMONT est votre courtier en assurance, avec une vaste offre d'assurances de personnes, de biens et à destination des entreprises.">
    <meta name="author" content="Cédric Avril">
    <link rel="stylesheet" href="css/normalize.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/jquery/jquery.ui.js"></script>
    <script src="js/jquery/jquery.mask.min.js"></script>
    <script src="js/script.extranet.js"></script>
    <script src="js/switchery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <!-- Optional theme -->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <link rel="stylesheet" href="css/switchery.min.css">
    <link rel="stylesheet" href="css/jquery.ui.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/indexStyle.css">

    <script>
        $( function () {
            $( '.menu-mobile-open' ).click( function ( e ) {
                e.preventDefault();

                var $menu     = $( '#menu-partenaire' );

                if ( $menu.hasClass( 'open' ) ) {
                    return;
                }

                $menu.addClass( 'open' );
            } );

            $( '.menu-mobile-close' ).click( function ( e ) {
                e.preventDefault();

                var $menu     = $( '#menu-partenaire' );

                if ( !$menu.hasClass( 'open' ) ) {
                    return;
                }

                $menu.removeClass( 'open' );
            } );
        } );
    </script>

    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <script type="text/javascript" src="js/jquery/wow.js"></script>
    <script type="text/javascript" src="js/jquery/wow.min.js"></script>

    <script>
        $(function(){
            $('#deja_inscrit').click(function(){
                $('#login_home').toggle();
            });
            $('.utilisateur').click(function(){
                $('#login_nav').toggle();
            });
            $('#accueil').addClass('active');
        })
    </script>
    <script>
        new WOW().init();
    </script>
</head>

<body xmlns="http://www.w3.org/1999/html">

    <nav class="navbar">
        <div class="container" id="navcontainer">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="images/logo.svg" title="Assurmf logo" alt="Assurmf logo" style="width: 90%"></a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav  navbar-right">
                    <li class="active"><a href="/">Accueil</a></li>
                    <li><a href="/#produits">Nos Produits</a></li>
                    <li><a href="Qui-sommes-nous">Qui Sommes-Nous ?</a></li>
                    <li><a href="Actualites">Actualités</a></li>
                    <li><a href="Contact">Contact</a></li>
                    <li class="utilisateur">
<!--
                        <form method="POST" action="https://www.gestion-assurances.com/clients/pages/spc_connexion_client.aspx?Domaine=assurmf.fr" >
                            <div id="nav_connect">
                                <button id="nav_connect_submit" type="submit" class="btn btn-lg fs-12"
                                style="background:#eb008b;">Go</button>
                                <span style="position:absolute;left:20px;color:#8c8c8c;"><i
                                    class="fa fa-id-card-o"></i></span>
                                    <input style="padding-left:25px;" class="fs-12 nav_connect_input" type="text"
                                    placeholder="Id ou e-mail" name="login" required=""
                                    class="nav_connect_input">

                                    <span style="position:absolute;left:20px;color:#8c8c8c;padding-top:3px;"><i class="fa fa-lock"></i></span>
                                    <input style="padding-left:25px;" id="nav_connect_password" style="margin-top:3px;" class="fs-12 nav_connect_input" type="password" placeholder="Mot de passe" name="pass" required="" class="nav_connect_input">
                                </div>
                            </form>-->
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <div class="blueContainer"  style="background-image: linear-gradient(to left, #009ee2, #43bdd5);">
            <div class="container home">
                <div id="home-space" class="row">

                    <div id="home-top-space" class="col-lg-5 col-md-10 col-lg-push-7">
                        <h3 class="mb-0">1<sup>er</sup> Comparateur Indépendant</h3>
                        <h1>en assurances</h1>

<!--                        <div id="home-chiffres-space">
                            <div id="dixhuit_contrats" class="chiffre-cle mt-30" style="clear:both;"><span>18</span> contrats comparés</div>
                            <div class="chiffre-cle"><span>3 000</span> courtiers actifs</div>
                            <div class="chiffre-cle"><span>200 000</span> assurés</div>
                        </div>-->
                        <div id="home-chiffres-space">
                            <div id="dixhuit_contrats" class="chiffre-cle mt-30" style="clear:both;"><span>Malussé ?</span></div>
                            <div class="chiffre-cle"><span>Sinistré ?</span></div>
                            <div class="chiffre-cle"><span>Non paiement ?</span></div>
                            <div class="chiffre-cle"><span>Permis étranger ?</span></div>
                        </div>

                        <div class="form-group chiffre-cle mt-30">
                            <div id="home-button-space" style="align-content: center">
                                <a href="/devenezPartenaire">
                                    <button class="btn btn-lg col-lg-offset-0 col-lg-9 col-xs-offset-2 col-xs-8">Cliquez ici<span><!--c'est gratuit&nbsp;!--></span></button>
                                </a>
                            </div>
                            <div class="clearfix" style="clear: both;">
                                <a id="deja_inscrit" class="mt-20 fs-16"> </a>
                            </div>
                            <div id="login_home" class="row">
                                <form method="POST" action="Auth">
                                    <div class="input-login mb-0 col-xs-6 col-sm-5">
                                        <input class="fs-14" type="text" placeholder="Code courtier" name="login" required="">
                                        <span style="opacity: 1;"><i class="fa fa-id-card-o"></i></span>
                                    </div>


                                    <div class="input-login mb-0 col-xs-6 col-sm-5">
                                        <input class="fs-14" type="password" placeholder="Mot de passe" name="mot_de_passe" required="">
                                        <span><i class="fa fa-lock"></i></span>
                                    </div>


                                    <div class="form-group col-xs-6 mb-0">
                                        <button type="submit" class="btn btn-lg fs-16">Connexion
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>

                    <div id="home-bottom-space" class="col-lg-7 hidden-xs col-lg-pull-5 text-center">
                        <img src="images/logoInitialModif.png" />
                    </div>


                </div>
            </div>
        </div>


        <div class="container">

            <div class="row home  row-eq-height mt-50 mb-50">
                <div class="col-sm-12 col-md-4 row-eq-height-panel">
                    <div class="panel panel-default" id="boutonPrets">
                        <div class="panel-heading"><img src="/medias/public/visuel_epargne_home.jpg" title="Assurance de prêt" alt="Assurance de prêt"/></div>
                        <div class="panel-body">
                            <h2 class="toggleText">ASSURANCE DE PRÊT</h2>
                            <img class="solidPicto" src="images/hand-holding-usd-solid.svg">
                            <img class="lightPicto" src="images/hand-holding-usd-light.svg">
                            <ul class="list-group">
                                <div class="accordion">
                                    <h4>ASSURANCE DE PRÊT<i class="fa pull-right"><span class="glyphicon glyphicon-new-window"></span></i></h4>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 row-eq-height-panel">
                    <div class="panel panel-default">
                        <div class="panel-heading"><img src="/medias/public/visuel_epargne_home.jpg" title="Auto" alt="Assurance Auto"/></div>
                        <div class="panel-body">
                                <h2 class="toggleText">AUTO</h2>
                                <img class="solidPicto" src="images/car-solid.svg">
                                <img class="lightPicto" src="images/car-light.svg">
                            <ul class="list-group">
                                <div class="accordion">
                                    <h4 id="boutonAuto1">
                                        <div href="#" data-toggle="tooltip" title="Auto Risques standards, risques aggravés et haut de gamme & VSP" id='ellipsisResponsive'>Auto Risques standards, risques aggravés et haut de gamme & VSP</div>
                                        <i class="fa pull-right">
                                            <div class="glyphicon glyphicon-new-window">
                                            </div>
                                        </i>
                                    </h4>
                                    <div>
                                    </div>
                                    <h4 id="boutonAuto2">Auto temporaire<i class="fa pull-right"><span class="glyphicon glyphicon-new-window"></span></i></h4>
                                    <div>
                                    </div>
                                    <h4 id="boutonAuto3">Camping-car<i class="fa pull-right"><span class="glyphicon glyphicon-new-window"></span></i></h4>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>

<!-- initial
                <div class="col-sm-12 col-md-4 row-eq-height-panel">
                    <div class="panel panel-default">
                        <div class="panel-heading"><img src="/medias/public/visuel_epargne_home.jpg" title="Assurance auto" alt="Assurance auto"/></div>
                        <div class="panel-body">
                            <div id="togglePicto" class="fas fa-car fa-10x" style="text-align: center; overflow: visible;">
                                <h2 class="toggleText">PRODUITS AUTO</h2>
                            </div>
                            <br>
                            <ul class="list-group">
                                <div class="accordion">
                                    <h4 id="boutonAuto1">
                                        <div href="#" data-toggle="tooltip" title="Auto Risques standards, risques aggravés et haut de gamme & VSP" id='ellipsisResponsive'>Auto Risques standards, risques aggravés et haut de gamme & VSP</div>
                                        <i class="fa pull-right">
                                            <div class="glyphicon glyphicon-new-window">
                                            </div>
                                        </i>
                                    </h4>
                                    <div>
                                    </div>
                                    <h4 id="boutonAuto2">Auto temporaire<i class="fa pull-right"><span class="glyphicon glyphicon-new-window"></span></i></h4>
                                    <div>
                                    </div>
                                    <h4 id="boutonAuto3">Camping-car<i class="fa pull-right"><span class="glyphicon glyphicon-new-window"></span></i></h4>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
-->

                <div class="col-sm-12 col-md-4 row-eq-height-panel">
                    <div class="panel panel-default">
                        <div class="panel-heading"><img src="/medias/public/visuel_epargne_home.jpg" title="2 roues" alt="2 roues"/></div>
                        <div class="panel-body">
                            <h2 class="toggleText">2 ROUES</h2>
                            <img class="solidPicto" src="images/motorcycle-solid.svg">
                            <img class="lightPicto" src="images/motorcycle-light.svg">
                            <ul class="list-group">
                                <div class="accordion">
                                    <h4 id="bouton2roues1">Moto<i class="fa pull-right"><span class="glyphicon glyphicon-new-window"></span></i></h4>
                                    <div>
                                        <ul>
                                            <li style="padding-top:0; width: 100%"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="accordion">
                                    <h4 id="bouton2roues2">Scooter<i class="fa pull-right"><span class="glyphicon glyphicon-new-window"></span></i></h4>
                                    <div>
                                        <ul>
                                            <li style="padding-top:0; width: 100%"></li>
                                        </ul>
                                    </div>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row home  row-eq-height mt-50 mb-50">
                <div class="col-sm-12 col-md-4 row-eq-height-panel">
                    <div class="panel panel-default" id="boutonMRH">
                        <div class="panel-heading"><img src="/medias/public/visuel_epargne_home.jpg" data-toggle="tooltip" title="PRODUITS MRH (risques standards et haut de gamme)" alt="PRODUITS MRH (risques standards et haut de gamme)" id='ellipsisResponsive'/></div>
                        <div class="panel-body">
                            <h2 class="toggleText">MRH</h2>
                            <img class="solidPicto" src="images/home-solid.svg">
                            <img class="lightPicto" src="images/home-light.svg">
                            <ul class="list-group">
                                <div class="accordion">
                                    <h4>produits mrh<i class="fa pull-right"><span class="glyphicon glyphicon-new-window"></span></i></h4>
                                    <div>
                                        <ul>
                                            <li style="padding-top:0; width: 100%">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 row-eq-height-panel">
                    <div class="panel panel-default" id="boutonChienChat">
                        <div class="panel-heading"><img src="/medias/public/visuel_epargne_home.jpg" title="produits chien-chat" alt="produits chien-chat"/></div>
                        <div class="panel-body">
                            <h2 class="toggleText">CHIEN - CHAT</h2>
                            <img class="solidPicto" src="images/paw-solid.svg">
                            <img class="lightPicto" src="images/paw-light.svg">
                            <ul class="list-group">
                                <div class="accordion">
                                    <h4>Chien - chat<i class="fa pull-right"><span class="glyphicon glyphicon-new-window"></span></i></h4>
                                    <div>
                                        <ul>
                                            <li style="padding-top:0; width: 100%">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 row-eq-height-panel">
                    <div class="panel panel-default" id="boutonSante">
                        <div class="panel-heading"><img src="/medias/public/visuel_epargne_home.jpg" title="produits sante" alt="produits sante"/></div>
                        <div class="panel-body">

<!--                        <div class="panel-body">
                            <h2 class="toggleText">ASSURANCE DE PRÊT</h2>
                            <img class="solidPicto" src="images/hand-holding-usd-solid.svg">
                            <img class="lightPicto" src="images/hand-holding-usd-light.svg">
                            <ul class="list-group">
                                <div class="accordion">
                                    <h4>ASSURANCE DE PRÊT<i class="fa pull-right"><span class="glyphicon glyphicon-new-window"></span></i></h4>
                                </div>
                            </ul>
                        </div>-->


                            <h2 class="toggleText">SANTÉ</h2>
                            <img class="solidPicto" src="images/briefcase-medical-solid.svg">
                            <img class="lightPicto" src="images/briefcase-medical-light.svg">
                            <ul class="list-group">
                                <div class="accordion">
                                    <h4>Santé<i class="fa pull-right"><span class="glyphicon glyphicon-new-window"></span></i></h4>
                                    <div>
                                        <ul>
                                            <li style="padding-top:0; width: 100%">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="container">
            <div class="row trois-pictos">
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="/medias/public/Picto1.svg" style="width:30%" alt="Assurance de prêt" title="Garantie Emprunteur" />
                        <div class="caption">
                            <h3 class="bold500">Comparateur Unique</h3>
                            <p>Les tarifs des leaders du marché en un clic</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="medias/public/Picto2.svg" style="width:30%" alt="Prévoyance" title="Garantie Prévoyance" />
                        <div class="caption">
                            <h3 class="bold500">Gestion Premium</h3>
                            <p>Souscription et suivi en ligne des contrats</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="medias/public/Picto3.svg" style="width:30%" alt="Epargne" title="Garantie Epargne" />
                        <div class="caption">
                            <h3 class="bold500">Suivi de Proximité</h3>
                            <p>En fonction de votre statut et du volume</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="blueContainer bg-city hidden-xs" style="padding-bottom: 50px;">
            <style>
            #partner {
                background: url(../img/partners/partner_bg.png) 50% 50% no-repeat;
                background-size: cover;
                text-align: center
            }

            .partners ul {
                list-style: none;
                margin: 0;
                padding: 0
            }

            .partners ul li {
                display: inline-block;
            }
        </style>

        <section id="partner" style="text-align: center;" >
            <div class="container">
                <div class="center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                    <h2 style="padding-bottom: 30px" class="mt-50">Comparez les leaders du marché</h2>
                </div>

                <div class="partners">
                    <!-- about us slider -->
                    <div id="about-slider">
                        <div id="carousel-slider" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators hidden">
                                <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-slider" data-slide-to="1"></li>
                                <li data-target="#carousel-slider" data-slide-to="2"</li>
                                </ol>

                                <div class="carousel-inner">
                                    <div class="item">
                                        <ul>
                                            <li><a href="#"><img class="img-responsive wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="100ms" src="/medias/public/logopartenaire/logo_premium.png" style="visibility: visible; -webkit-animation-duration: 1000ms;animation-duration: 1000ms;-webkit-animation-name: fadeIn;animation-name: fadeIn;"></a></li>
                                            <li><a href="#"><img class="img-responsive wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="200ms" src="/medias/public/logopartenaire/logo_allianz.png" style="visibility: visible; -webkit-animation-duration: 1000ms;animation-duration: 1000ms;-webkit-animation-name: fadeIn;animation-name: fadeIn;"></a></li>
                                            <li><a href="#"><img class="img-responsive wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="400ms" src="/medias/public/logopartenaire/logo_april.png" style="visibility: visible; -webkit-animation-duration: 1000ms;animation-duration: 1000ms;-webkit-animation-name: fadeIn;animation-name: fadeIn;"></a></li>
                                            <li><a href="#"><img class="img-responsive wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="300ms" src="/medias/public/logopartenaire/logo_cardif.png" style="visibility: visible; -webkit-animation-duration: 1000ms;animation-duration: 1000ms;-webkit-animation-name: fadeIn;animation-name: fadeIn;"></a></li>
                                        </ul>
                                    </div>
                                    <div class="item active">
                                        <ul>
                                            <li><a href="#"><img class="img-responsive wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="300ms" src="/medias/public/logopartenaire/logo_generali.png" style="visibility: visible; -webkit-animation-duration: 1000ms;animation-duration: 1000ms;-webkit-animation-name: fadeIn;animation-name: fadeIn;"></a></li>
                                            <li><a href="#"><img class="img-responsive wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="200ms" src="/medias/public/logopartenaire/logo_first.png" style="visibility: visible; -webkit-animation-duration: 1000ms;animation-duration: 1000ms;-webkit-animation-name: fadeIn;animation-name: fadeIn;"></a></li>
                                            <li><a href="#"><img class="img-responsive wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="400ms" src="/medias/public/logopartenaire/logo_metlife.png" style="visibility: visible; -webkit-animation-duration: 1000ms;animation-duration: 1000ms;-webkit-animation-name: fadeIn;animation-name: fadeIn;"></a></li>
                                            <li><a href="#"><img class="img-responsive wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="100ms" src="/medias/public/logopartenaire/logo_afi.png" style="visibility: visible; -webkit-animation-duration: 1000ms;animation-duration: 1000ms;-webkit-animation-name: fadeIn;animation-name: fadeIn;padding-left: 25px;"></a></li>

                                        </ul>
                                    </div>
                                    <div class="item">
                                        <ul>
                                            <li><a href="#"><img class="img-responsive wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="300ms" src="/medias/public/logopartenaire/logo_first.png" style="visibility: visible; -webkit-animation-duration: 1000ms;animation-duration: 1000ms;-webkit-animation-name: fadeIn;animation-name: fadeIn;"></a></li>
                                            <li><a href="#"><img class="img-responsive wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="100ms" src="/medias/public/logopartenaire/logo_spheria.png" style="visibility: visible; -webkit-animation-duration: 1000ms;animation-duration: 1000ms;-webkit-animation-name: fadeIn;animation-name: fadeIn;"></a></li>
                                            <li><a href="#"><img class="img-responsive wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="200ms" src="/medias/public/logopartenaire/logo_suravenir.png" style="visibility: visible; -webkit-animation-duration: 1000ms;animation-duration: 1000ms;-webkit-animation-name: fadeIn;animation-name: fadeIn;"></a></li>
                                            <li><a href="#"><img class="img-responsive wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="400ms" src="/medias/public/logopartenaire/logo_swiss.png" style="visibility: visible; -webkit-animation-duration: 1000ms;animation-duration: 1000ms;-webkit-animation-name: fadeIn;animation-name: fadeIn;"></a>
                                            </ul>
                                        </div>
                                    </div>

                                </div> <!--/#carousel-slider-->
                            </div><!--/#about-slider-->
                        </div>
                    </div><!--/.container-->
                </section>

            </div>


            <div class="bg-lightgrey">
                <div class="container">
                    <div class="row trois-pictos mt-50" id="produits">
                        <div class="col-sm-12">

                            <p class="specialistes">
                                Spécialiste de l'assurance de prêt et de personnes, <br/>
                                dédié
                                exclusivement aux professionnels de l'assurance
                            </p>

                        </div>

                        <div class="col-sm-4 col-md-4">

                        </div>
                        <div class="col-sm-4 col-md-4">

                            <div class="form-group text-center" style="margin-bottom:0px;">
                                <a href="/devenezPartenaire"><button type="submit" class="fs-16 col-xs-12 btn btn-lg mt-20">Devenez partenaire</button></a>
                            </div>

                        </div>
                        <div class="col-sm-4 col-md-4">

                        </div>

                    </div>



                    <script>
                        $(function(){
                            $('.accordion').accordion({
                                heightStyle: "content",
                                collapsible: true,
                                active: false
                            });

                            $('.accordion h4').click(function(){
                        //alert('test');
                        if($(this).hasClass('ui-state-active')){
                            //$(this).children('i').removeClass('fa-angle-right');
                            //$(this).children('i').addClass('fa-angle-down');
                        }else{
                            //$(this).children('i').removeClass('fa-angle-down');
                            //$(this).children('i').addClass('fa-angle-right');
                        }
                    });
                        });
                    </script>

                    <div class="row home  row-eq-height mt-50 mb-50">
                        <div class="col-sm-12 col-md-4 row-eq-height-panel">
                            <div class="panel panel-default">
                                <div class="panel-heading"><img src="/medias/public/visuel_assurance-pret_home.jpg" title="Assurance emprunteur" alt="Emprunteur"/></div>
                                <div class="panel-body">
                                    <h2 style="text-align: center">Assurance de Prêt</h2>
                                    <br>
                                    <ul class="list-group">

                                        <div class="accordion">
                                            <h4><i class="fa fa-2x fa-angle-right pull-right"></i>Adapté pour tous les profils </h4>
                                            <div>
                                                <ul>
                                                    <li style="padding-top:0;list-style-type:disc;">Les jeunes</li>
                                                    <li style="list-style-type:disc;">Les professions à risque</li>
                                                    <li style="list-style-type:disc;">Les fumeurs</li>
                                                    <li style="list-style-type:disc;">Les personnes de + de 55ans </li>
                                                    <li style="list-style-type:disc;">Les risques de santé </li>
                                                </ul>
                                            </div>
                                            <h4 style="border-bottom: 1px solid #f6f6f6;">Des garanties optionnelles incontournables <i class="fa fa-2x fa-angle-right pull-right"></i></h4>
                                            <div>
                                                <ul>
                                                    <li style="padding-top:0;list-style-type:disc;">Perte d'emploi</li>
                                                    <li style="list-style-type:disc;">Invalidité partielle et permanente</li>
                                                    <li style="list-style-type:disc;">Rachat possible d'exclusion</li>
                                                    <li style="list-style-type:disc;">Garantie Confort Dos et Psy</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 row-eq-height-panel">
                            <div class="panel panel-default">
                                <div class="panel-heading"><img src="/medias/public/visuel_prevoyance_home.jpg" title="Assurance prévoyance" alt="Prevoyance"/></div>
                                <div class="panel-body">
                                    <h2 style="text-align: center">Prévoyance</h2>
                                    <br>
                                    <ul class="list-group">
                                        <div class="accordion">
                                            <h4>Garantie Obsèques et DC / PTIA <i class="fa fa-2x fa-angle-right pull-right"></i></h4>
                                            <div>
                                                <ul>
                                                    <li style="padding-top:0;list-style-type:disc;">Déclaration de bonne santé jusqu'à 200000 €</li>
                                                    <li style="list-style-type:disc;">Doublement accident</li>
                                                    <li style="list-style-type:disc;" style="list-style-type:circle;">De 15 000 € à 5 000 000 €</li>
                                                </ul>
                                            </div>
                                            <h4>IJ TNS, Gérant Majoritaire <i class="fa fa-2x fa-angle-right pull-right"></i></h4>
                                            <div>
                                                <ul>
                                                    <li style="padding-top:0;list-style-type:disc;">Contrat modulable</li>
                                                    <li style="list-style-type:disc;">IJ de 15 € à 250 €</li>
                                                    <li style="list-style-type:disc;">Eligibilité Madelin</li>
                                                </ul>
                                            </div>
                                            <h4 style="border-bottom: 1px solid #f6f6f6;">Prévoyance Familiale Accidentelle <i class="fa fa-2x fa-angle-right pull-right"></i></h4>
                                            <div>
                                                <ul>
                                                    <li style="padding-top:0;list-style-type:disc;">Couverture accidentelle</li>
                                                    <li style="list-style-type:disc;">Vie privée, accidents de la circulation</li>
                                                    <li style="list-style-type:disc;">Pack Garanties : décès, invalidité, indemnités journalières, capital aménagement, assistance</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 row-eq-height-panel">
                            <div class="panel panel-default">
                                <div class="panel-heading"><img src="/medias/public/visuel_epargne_home.jpg" title="Assurance épargne" alt="Epargne"/></div>
                                <div class="panel-body">
                                    <h2 style="text-align: center">&Eacute;pargne</h2>
                                    <br>
                                    <ul class="list-group">
                                        <div class="accordion">
                                            <h4>&Eacute;pargne Salariés : versements programmés <i class="fa fa-2x fa-angle-right pull-right"></i></h4>
                                            <div>
                                                <ul>
                                                    <li style="padding-top:0;list-style-type:disc;">
                                                        Des contrats destinés à l'épargne et/ou à la retraite avec des garanties complémentaires et innovantes
                                                    </li>
                                                    <li style="padding-top:0;list-style-type:disc;">    Accessible à partir de 65 €</li>
                                                    <li style="padding-top:0;list-style-type:disc;">    Contrat d'assurance vie multi supports</li>
                                                    <li style="padding-top:0;list-style-type:disc;">   Garantie décès toutes causes
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal View error form-->
            <div class="modal fade" id="myModalErrorForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog  modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header label-warning">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Erreur de saisie</h4>
                            </div>
                            <div class="modal-body">

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal"><span
                                    class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> Fermer
                                </button>
                            </div>
                        </div>
                    </div>
                </div>





                <div class="blueurContainer">
                    <div class="container" id="footer">

                        <div class="row">
                            <div class="col-md-8">



                                <div class="col-xs-6" style="margin-bottom:15px;">
                                    <a href="/Qui-sommes-nous">Qui sommes-nous ?</a>
                                </div>
                                <div class="col-xs-6" style="margin-bottom:15px;">
                                    <li class="active"> <a href="/connexion">Espace Partenaire</a></li>
                                </div>

                                <div class="col-xs-6" style="margin-bottom:15px;">
                                    <a href="/Actualites">Actualités</a>
                                </div>
                                <div class="col-xs-6" style="margin-bottom:15px;">
                                    <a href="/Contact">Contact</a>
                                </div>
                                <div class="col-xs-6" style="margin-bottom:15px;">
                                    <a href="/mention-legale">Mentions Légales</a>
                                </div>
                                <div class="col-xs-6" style="margin-bottom:15px;">
                                    <a href="/charte-de-confidentialite">Charte de Confidentialité</a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4 text-center">
                                <h2>Suivez-nous

                                    <a href="https://www.facebook.com/SimulassurbyElois/" target="_blank">
                                        <img src="/medias/pictos/picto_facebook.svg" class="iconreso"></a>
                                        <a href="https://www.linkedin.com/company/elois-assurances" target="_blank">
                                            <img src="/medias/pictos/picto_linkedin.svg" class="iconreso"></a>
                                            <a href="https://twitter.com/EloisAssurances" target="_blank">
                                                <img src="/medias/pictos/picto_twitter.svg" class="iconreso"></a>
                                            </h2>
                                            <a style="margin-bottom:15px;">© 2019 Assurmf. Tous droits réservés.</a>
                                        </div>
                                    </div>





                                </div>
                            </div>

                        </body>

    <!-- Global site tag (gtag.js) - Google Analytics 
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125888227-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-125888227-1');
		
		
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

        elems.forEach(function(html) {
            var switchery = new Switchery(html, { size: 'small' });
        });
    </script>-->

    <script type="text/javascript">
        $( document ).ready(function() {

            $("#boutonPrets").click( function(){
                window.open("https://www.simulassur.fr/iframer/9689/2", '_blank');
            });
            $("#boutonAuto1").click( function(){
                window.open("http://www.gestion-assurances.com/site_partenaire.aspx?code=OPE16861&dst=2", '_blank');
            });
            $("#boutonAuto2").click( function(){
                window.open("http://www.gestion-assurances.com/site_partenaire.aspx?code=OPE16861&dst=62", '_blank');
            });
            $("#boutonAuto3").click( function(){
                window.open("http://www.gestion-assurances.com/site_partenaire.aspx?code=OPE16861&dst=42", '_blank');
            });
            $("#bouton2roues1").click( function(){
                window.open("http://www.gestion-assurances.com/site_partenaire.aspx?code=OPE16861&dst=22", '_blank');
            });
            $("#bouton2roues2").click( function(){
                window.open("http://www.gestion-assurances.com/site_partenaire.aspx?code=OPE16861&dst=32", '_blank');
            });
            $("#boutonMRH").click( function(){
                window.open("http://www.gestion-assurances.com/site_partenaire.aspx?code=OPE16861&dst=12", '_blank');
            });
            $("#boutonChienChat").click( function(){
                window.open("http://www.gestion-assurances.com/site_partenaire.aspx?code=OPE16861&dst=52", '_blank');
            });
            $("#boutonSante").click( function(){
                window.open("http://www.gestion-assurances.com/site_partenaire.aspx?code=OPE16861&dst=72", '_blank');
            });
        });
    </script>
    </html>