	<!doctype html>
	<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
	    <title> Plateforme nationale dédiée aux normes et à l'étiquetage énergétique au Bénin </title>
	    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />

	    <!-- BEGIN GLOBAL MANDATORY STYLES -->
	    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
	    <link href="{{ asset('back/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
	    <link href="{{ asset('back/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
	    <link href="{{ asset('back/assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
	    <link href="{{ asset('back/plugins/sliders/owlCarousel/css/owl.carousel.min.css') }}" rel="stylesheet"
	        type="text/css" />
	    <link href="{{ asset('back/plugins/sliders/owlCarousel/css/owl.theme.default.min.css') }}" rel="stylesheet"
	        type="text/css" />
		<link href="{{ asset('back/plugins/flaticon/style.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('back/plugins/table/datatable/datatables.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('back/plugins/table/datatable/custom_dt_zero_config.css') }}" rel="stylesheet" type="text/css" />
	    <link href="{{ asset('back/assets/css/pages/landing-page/style.css') }}" rel="stylesheet" type="text/css" />
	    <!-- END GLOBAL MANDATORY STYLES -->


	</head>

	<body>
	    <div id="eq-loader">
	        <div class="eq-loader-div">
	            <div class="eq-loading dual-loader mx-auto mb-5"></div>
	        </div>
	    </div>

	    <div id="navHeadWrapper" class="navHeaderWrapper header-image">
	        <!-- NavBar -->
	        <!-- Brand -->
	        <div class="">
	            <nav class="navbar navbar-expand-lg bg-faded header-nav">
	                <div class="container">
	                    <div class="col-xl-2 col-lg-1 col-2 mx-auto ">
	                        <a class="navbar-brand" href="#">
	                            <h4><img src="back/assets/img/amoiries.svg" alt="" class="img-fluid cover"></h4>
	                        </a>
	                    </div>
	                    <div class="col-xl-2 col-lg-1 col-4 mx-auto ">
	                        <a class="navbar-brand" href="#">
	                            <h4 class="mylogo">PNEE</h4>
	                        </a>
	                    </div>

	                    <div class="col-6 text-right d-lg-none d-block">
	                        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
	                            data-target="#nav-content" aria-controls="nav-content" aria-expanded="false"
	                            aria-label="Toggle navigation">
	                            <span class="navbar-toggler-icon flaticon-left-menu"></span>
	                        </button>
	                    </div>

	                    <div class="col-xl-8 col-lg-9">
	                        <!-- Links -->
	                        <div class="collapse navbar-collapse justify-content-end" id="nav-content">
	                            <ul class="navbar-nav text-center mt-lg-0 mt-5">
	                                
	                                <li class="nav-item ">
	                                    <a class="nav-link js-scroll-trigger" href="#apropos"">A propos</a>
	</li>
	<li class=" nav-item">
	                                        <a class="nav-link js-scroll-trigger" href="#whyusWrapper">Ressources</a>
	                                </li>
									<!--<li class="nav-item">
	                                    <a class="nav-link js-scroll-trigger" href="#cancel-row"">Base de données</a>
	                                </li> -->
	                                <li class="nav-item">
	                                    <a class="nav-link js-scroll-trigger" href="#companyWrapper">Partenaires</a>
	                                </li>
	                                <!-- <li class="nav-item">
	<a class="nav-link js-scroll-trigger" href="#latestNewsWrapper">News</a>
	</li>
	<li class="nav-item">
	<a class="nav-link js-scroll-trigger" href="#footerWrapper">Contact Us</a>
	</li> -->
	                            </ul>
	                            <form class="form-inline justify-content-lg-start justify-content-center mt-lg-0 mt-5">
	                                <a class="btn ml-xl-4" href="{{ route('login') }}">Connexion</a>
	                            </form>
	                        </div>
	                    </div>
	                </div>
	            </nav>
	        </div>
	        <!-- /NavBar -->

	        <!-- Header -->
	        <div id="headerWrapper" class="container">
	            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-lg-0 mt-5">
	                <div class="row">
	                    <div
	                        class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-1 order-2 align-self-center  mb-lg-0 mb-5">
	                        <div class="site-header-inner  mt-lg-0 mt-5">
	                            <h2 class="">Plateforme nationale dédiée aux normes et à l'étiquetage énergétique</h2>
	                            <a href="#apropos" class="nav-link js-scroll-trigger"><button
	                                    class="btn btn-primary mt-5">En savoir plus</button></a>
	                        </div>
	                    </div>
	                    <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-2 order-1 text-center">
	                        <div class="banner-image">
	                            <img alt="cover-image" src="back/assets/img/cover-energy.png" class="img-fluid cover"
	                                style="">
	                            <!-- <img alt="cover-image" src="back/assets/img/code.png" class="img-fluid code" style="">
	<img alt="cover-image" src="back/assets/img/cloud.png" class="img-fluid cloud" style="">
	<img alt="cover-image" src="back/assets/img/globe.png" class="img-fluid globe" style="">
	
	<img alt="cover-image" src="back/assets/img/wave-1.png" class="img-fluid wave-1" style="">
	<img alt="cover-image" src="back/assets/img/wave-2.png" class="img-fluid wave-2" style="">
	<img alt="cover-image" src="back/assets/img/wave-3.png" class="img-fluid wave-3" style=""> -->
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- /Header -->
	    </div>





	    <!-- A propos -->
	    <div id="apropos" class="container scroll-offset">
	        <div  class="row">

	            <div class="col-md-12">
	                <div class="tab-content" id="pills-tabContent">
	                    <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="pills-sketch-tab">
	                        <div class="row">
	                            <div class="col-md-4 text-center">
	                                <img alt="image-sample" src="back/assets/img/header-img-7.png" class="img-fluid">
	                            </div>
	                            <div class="col-md-8 align-self-center">
	                                <h4 class="mb-4">A propos</h4>
	                                <p class="mb-4" id="def-energie" >Cette plateforme a pour objectif de servir d’interface entre les opérateurs privés, 
									les structures gouvernementales de vérification et de surveillance des frontières et du marché,
									 la structure en charge du contrôle qualité des équipements et celle en charge de la mise en œuvre du 
									 programme de normes et d’étiquetage énergétique au Bénin. Cette plateforme  fournit également des informations
									   sur les enjeux de l’efficacité énergétique.Cette plateforme est un outil indépendant conçu en synergie avec 
									   les outils existants des organismes de contrôle béninois. </p>
	                           		<h4 class="mb-4">Qu’est-ce que l’efficacité énergétique ?</h4>
									<p>L’efficacité énergétique est un concept qui permet de définir les moyens pour rationaliser la consommation d’énergie utile pour un service rendu. C’est une des clefs pour à la fois assurer toujours plus de services en consommant le moins possible d’énergie et endiguer les émissions de gaz à effet de serre.</p>
							   		<p>L'efficacité énergétique d’un dispositif/système est le rapport entre ce que produit le dispositif ou le système, et ce qu'il absorbe comme énergie électrique.</p>
							   		<p>Elle est d'autant meilleure que le système énergétique utilise le moins d'énergie possible pour produire le service demandé, que cela soit la réfrigération, de la climatisation, de l'éclairage ou toute sorte de besoin énergétique.</p>
							    	<p>Consommer moins pour le même confort ou pour le même travail, tel est l'objectif de tout concept d'efficacité énergétique.</p>
									<p>L’efficacité énergétique se définit comme une consommation en énergie moindre pour le même service rendu.</p>
									<p class="mb-4">Il s’agit d'éviter le gaspillage de l'énergie en rationalisant l’utilisation de l’énergie et d’utiliser des technologies appropriées qui ne sont pas gourmandes en énergie.</p>
									<h4 class="mb-4">Pourquoi devons-nous économiser de l’énergie ?</h4>
									<ul class="mb-4">
										<li>
											<p>
											Parce que l'énergie au consommateur final est une ressource précieuse, onéreuse, utile mais épuisable ;
											</p>
										</li>

										<li>
											<p>
											Parce que réduire les dépenses énergétiques revient à réduire le coût de production pour être plus compétitif sur le marché ;

											</p>
										</li>

										<li>
											<p>
											Parce que la demande énergétique est en forte croissance dépassant souvent l’offre disponible (cause par exemple des délestages répétés de l’énergie électrique au Bénin) ;
											</p>
										</li>

										<li>
											<p>
											Parce que toutes les formes d'énergie ont une empreinte environnementale et il faut veiller à réduire cette empreinte pour ne pas compromettre les générations futures.
											</p>
										</li>
									</ul>

									<h4 class="mb-4">
									Quels sont les intérêts du programme de normes de performance énergétique et du système d’étiquetage des appareils électroménagers ? 
									</h4>
									<p class="mb-4">Les normes de performance énergétique et le système d’étiquetage d’efficacité énergétique des appareils électroménagers contribuent à : </p>
									<ul class="mb-4">
										<li>
											<p>
											Inciter le consommateur à comparer les appareils électroménagers et à choisir les appareils les plus performants dans une même catégorie ; 

											</p>
										</li>
										<li>
											<p>
											Retirer progressivement du marché les produits inefficaces au profit d’appareils plus performants ;
											</p>
										</li>

										<li>
											<p>
											Renforcer la concurrence sur les marchés ; 
											</p>
										</li>

										<li>
											<p>
											Réduire la puissance électrique de pointe ;
											</p>
										</li>

										<li>
											<p>
											Améliorer l’efficience économique nationale ;
											</p>
										</li>

										<li>
											<p>
											Améliorer le bien-être des consommateurs ; 
											</p>
										</li>

										<li>
											<p>
											Eviter les impacts négatifs de l’exploitation des appareils électroménagers sur la santé humaine ; 
											</p>
										</li>

										<li>
											<p>
											Atteindre des objectifs pour lutter contre le changement climatique
											</p>
										</li>
									</ul>
									<!-- <h4>Comment fonctionne la procédure d’étiquetage des appareils électroménagers au Bénin ? </h4> -->

								</div>
	                            <!-- <div class="col-md-12 text-center">
	<button class="btn mt-5 mb-4">En savoir plus</button>
	</div> -->
	                        </div>
	                    </div>

	                </div>
	            </div>
	        </div>
	    </div>
	    <!-- Documentation-->

	    <div class="container scroll-offset">
	        <div id="whyusWrapper" class="row">
	            <div class="col-md-12 text-center mb-5">
	                <!-- <p class="section-subtitle">Programme d'étiquetage energétique en République du bénin</p> -->
	                <h2 class="section-title mb-5">Ressources</h2>
	            </div>

	            <div class="col-md-12 ">
	                <ul class="nav nav-pills mb-5 justify-content-between" id="pills-tab" role="tablist">
	                    <li class="col-xl-3 col-lg-3 col-md-6 col-12 nav-item mb-4 text-center">
	                        <a class="nav-link active" id="pills-sketch-tab" data-toggle="pill" href="#pills-sketch"
	                            role="tab" aria-controls="pills-sketch" aria-selected="true">
	                            <i class="flaticon-document-3"></i>
	                            <h6 class="mt-3 mb-3">Etiquette énergie</h6>
	                            <span class="arrow"></span>
	                        </a>
	                    </li>

	                    <li class="col-xl-3 col-lg-3 col-md-6 col-12 nav-item mb-4 text-center">
	                        <a class="nav-link" id="pills-design-tab" data-toggle="pill" href="#pills-design" role="tab"
	                            aria-controls="pills-design" aria-selected="false">
	                            <i class="flaticon-setting-2"></i>
	                            <h6 class="mt-3 mb-3"> Normes </h6>
	                            <span class="arrow"></span>
	                        </a>
	                    </li>

	                    <li class="col-xl-3 col-lg-3 col-md-6 col-12 nav-item mb-4 text-center">
	                        <a class="nav-link" id="pills-development-tab" data-toggle="pill" href="#pills-development"
	                            role="tab" aria-controls="pills-development" aria-selected="false">
	                            <i class="flaticon-lock"></i>
	                            <h6 class="mt-3 mb-3">Cadre règlementaire</h6>
	                            <span class="arrow"></span>
	                        </a>
	                    </li>

	                    <li class="col-xl-3 col-lg-3 col-md-6 col-12 nav-item mb-md-0 mb-4 text-center">
	                        <a class="nav-link" id="pills-branding-tab" data-toggle="pill" href="#pills-branding"
	                            role="tab" aria-controls="pills-branding" aria-selected="false">
	                            <i class="flaticon-idea-bulb"></i>
	                            <h6 class="mt-3 mb-3">Bonnes pratiques</h6>
	                            <span class="arrow"></span>
	                        </a>
	                    </li>

	                </ul>
	            </div>

	            <div class="col-md-12">
	                <div class="tab-content" id="pills-tabContent">
	                    <div class="tab-pane fade show active" id="pills-sketch" role="tabpanel"
	                        aria-labelledby="pills-sketch-tab">
	                        <div class="row">
	                            <div class="col-md-3 text-center">
	                                <img alt="image-sample" src="back/assets/img/efficacite-energy.jpg" class="img-fluid">
	                            </div>
	                            <div class="col-md-9 align-self-center">
	                                <h4 class="mb-4">Etiquette énergie, la bonne référence à l’achat </h4>
	                                <p>L’étiquette énergie est désormais obligatoire pour les lampes, les réfrigérateurs et les climatiseurs
									. Elle renseigne sur les consommations d’énergie de chaque équipement et facilite ainsi le choix du consommateur lors de l’achat de son équipement. </p>
	                            	<p class="mb-4">L’étiquette présente une étoile, deux étoiles ou trois étoiles en fonction du niveau <a href="#def-energie">d’efficacité énergétique</a>  de l’équipement :</p>
									<ul>
										<li>
											<p>
											Une étoile : équipements peu efficaces et moins d’économies,  
											</p>
										</li>

										<li>
											<p>
											Deux étoiles : équipements efficaces et quelques économies, 
											</p>
										</li>

										<li>
											<p>
											Trois étoiles : équipements très efficaces et plus d’économies
											</p>
										</li>
									</ul>
									
									
									<p class="ml-4">
										<strong class="etiquette">Etiquette énergie pour les lampes </strong>
									</p> 
									
									<div class=" mb-4 col-md-10">
	                                	<img alt="image-sample" src="back/assets/img/etiquette-energy-x.png" class="img-fluid">
									</div>

									
									<p class="ml-4">
										<strong class="etiquette">Etiquette-Energie pour les Climatiseurs </strong>
									</p> 
									
									<div class=" mb-4 col-md-10">
	                                	<img alt="image-sample" src="back/assets/img/etiquette-energy-3.png" class="img-fluid">
									</div>

									<p>L’étiquette énergie contient les renseignements suivants :</p>
									<ul>
										<li>
											<p>Le drapeau national du Bénin</p>
										</li>
										<li>
											<p>Le nom du fabricant ou le modèle </p>
										</li>
										<li>
											<p>XY, Z : la puissance frigorifique en kilowatt (KW)</p>
										</li>
										<li>
											<p>X, Y : le ratio d’efficacité énergétique du climatiseur (EER) sans unité ou W/W</p>
										</li>
										<li>
											<p>XYZ : la consommation énergétique en KWh/an</p>
										</li>
										<li>
											<p>La classe d'efficacité énergétique du climatiseur correspond au nombre d’étoiles allant d’une à trois en nombre</p>
										</li>
									</ul>

									<p>Ces graphes présentent l’étiquette pour les lampes et des climatiseurs, des étiquettes analogues sont proposés pour les réfrigérateurs.</p>

								</div>
	                            <!-- <div class="col-md-12 text-center">
	<button class="btn mt-5 mb-4">En savoir plus</button>
	</div> -->
	                        </div>
	                    </div>

	                    <div class="tab-pane fade" id="pills-design" role="tabpanel" aria-labelledby="pills-design-tab">
	                        <div class="row">
	                            <div class="col-md-6 text-center">
	                                <img alt="image-sample" src="back/assets/img/les-normes.jpg" class="img-fluid">
	                            </div>
	                            <div class="col-md-6 align-self-center">
	                                <h4 class="mb-4">Normes </h4>
	                                <p>Les normes ou exigences techniques minimales de performance énergétique et leurs autres caractéristiques visent à assurer une qualité minimale des équipements électroménagers fabriqués au Bénin ou importés pour être utilisés au Bénin.</p>
							   		<p>Selon la réglementation en vigueur, sont interdites la fabrication, l’importation, la commercialisation ou la distribution à titre payant ou gratuit, sur toute l’étendue du territoire national, les lampes ou climatiseurs ne présentant pas les caractéristiques spécifiées dans les normes béninoises NB 10.07.001 et NB 17.02.001. </p>
								</div>
	                            <!-- <div class="col-md-12 text-center">
	<button class="btn mt-5 mb-4">En savoir plus</button>
	</div> -->
	                        </div>
	                    </div>

	                    <div class="tab-pane fade" id="pills-development" role="tabpanel"
	                        aria-labelledby="pills-development-tab">
	                        <div class="row">
	                            <div class="col-md-6 text-center">
	                                <img alt="image-sample" src="back/assets/img/cadre-reglementaire.jpg"
	                                    class="img-fluid">
	                            </div>
	                            <div class="col-md-6 align-self-center">
	                                <h4 class="mb-4">Cadre règlementaire</h4>

	                                <ul>
	                                    <li>
	                                        <a href="back/assets/doc/Decret-2018-563.pdf" target="_blank"
	                                            class="lien-a">Décret n° 2018-563 du 19 Décembre 2018</a>

	                                    </li>

	                                    <li>
	                                        <a href="back/assets/doc/PANEE.pdf" target="_blank" class="lien-a">Plan
	                                            d’Action National d’Efficacité Energétique (PANEE)</a>

	                                    </li>

	                                    <li>
	                                        <a href="back/assets/doc/presentation_se4all_action_agenda_benin.pdf"
	                                            target="_blank" class="lien-a">
	                                            Energie Durable pour Tous(SE4ALL) - Agenda d’Actions (Bénin)

	                                        </a>
	                                    </li>

	                                    <li>
	                                        <a href="back/assets/doc/EEA-Prodoc-Etiquetage.pdf" target="_blank"
	                                            rel="noopener noreferrer" class="lien-a">Projet régional d’étiquetage
	                                            énergétique d’appareils électromenagers dans la zone de l’UEMOA (Phase
	                                            II)</a>
	                                    </li>
	                                </ul>

	                            </div>
	                            <!-- <div class="col-md-12 text-center">
	<button class="btn mt-5 mb-4">En savoir plus</button>
	</div> -->
	                        </div>
	                    </div>

	                    <div class="tab-pane fade" id="pills-branding" role="tabpanel"
	                        aria-labelledby="pills-branding-tab">
	                        <div class="row">
	                            <div class="col-md-4 text-center">
	                                <img alt="image-sample" src="back/assets/img/bonne-p.png" class="img-fluid">
	                            </div>
	                            <div class="col-md-8 align-self-center">
	                                <h4 class="mb-4">Bonnes pratiques</h4>


	                                <div class=">
	
	<div class=" widget-content widget-content-area icon-change-content">
	                                    <div id="toggleAccordion">
	                                        
	                                        <div class="card mb-1">
	                                            <div class="card-header" id="headingTwo4">
	                                                <h5 class="mb-0 mt-0">
	                                                    <span role="menu" class="collapsed" data-toggle="collapse"
	                                                        data-target="#iconChangeAccordionTwo" aria-expanded="false"
	                                                        aria-controls="iconChangeAccordionTwo">
	                                                        Comment économise-t-on l'énergie ? <i
	                                                            class="flaticon-down-arrow float-right mt-1"></i>
	                                                    </span>
	                                                </h5>
	                                            </div>
	                                            <div id="iconChangeAccordionTwo" class="collapse"
	                                                aria-labelledby="headingTwo4" data-parent="#toggleAccordion">
	                                                <div class="card-body mb-3">
	       

	                                                    <div class="article-text addMarginBottom-30">
	                                                        <p>"Faire des économies d'énergie au quotidien" c'est une
	                                                            préoccupation pour bon nombre de personnes et cela devra
	                                                            être ainsi. Il faut économiser l'énergie en adoptant de
	                                                            bonnes pratiques et des équipements efficaces ! Économiser
	                                                            l'énergie c'est rationnaliser notre consommation d’énergie
	                                                            pour la satisfaction de nos besoins. Par exemple, s’assurer
	                                                            que les portes et fenêtres sont bien fermées quand le
	                                                            climatiseur est en marche ou acquérir une lampe LED de 9 W
	                                                            en lieu et place d’une lampe fluorescente de 20W.</p>

	                                                        <h3>Eclairage</h3>

	                                                        <p>Pour rationnaliser la consommation d’électricité au niveau
	                                                            de ce poste de consommation, il faudra&nbsp;:</p>

	                                                        <ul style="margin-bottom: 20px">
	                                                            <li><strong>Adopter des lampes
	                                                                    économiques:</strong>&nbsp;De nos jours, les lampes
	                                                                LED sont plus économique que les lampes fluorescentes
	                                                                compactes : 20% d’économie d’énergie est encore
	                                                                possible en passant des ampoules fluorescentes
	                                                                compactes vers les ampoules de type LED de
	                                                                qualité&nbsp;;</li>
	                                                            <li>Veiller à éteindre les ampoules en quittant une pièce.
	                                                            </li>
	                                                        </ul>

	                                                        <p style="margin-left:4.5pt;"><strong>Trois éléments pour
	                                                                choisir ces éclairages sont à
	                                                                considérer&nbsp;:</strong></p>

	                                                        <ul style="margin-bottom: 20px">
	                                                            <li><strong>la&nbsp;</strong><strong>puissance
	                                                                    électrique&nbsp;en watts (W)&nbsp;;</strong></li>
	                                                            <li><strong>le&nbsp;flux lumineux&nbsp;exprimé en lumens
	                                                                    (lm), une unité qui traduit la quantité de lumière
	                                                                    émise par une source lumineuse&nbsp;;</strong></li>
	                                                            <li><strong>l’efficacité lumineuse, exprimée en lumens par
	                                                                    watt (lm/W)&nbsp;: plus elle est grande, plus la
	                                                                    lampe émet de lumière, à consommation
	                                                                    identique.</strong></li>
	                                                        </ul>

	                                                        <p><strong>Quelles ampoules choisir pour nos usages
	                                                                domestiques&nbsp;et pourquoi?</strong></p>

	                                                        <ul style="margin-bottom: 20px">
	                                                            <li><strong>Les lampes halogènes haute efficacité</strong>
	                                                            </li>
	                                                        </ul>

	                                                        <p>Durée de vie&nbsp;: 2&nbsp;000 à 3&nbsp;000 heures en
	                                                            moyenne</p>

	                                                        <p>Efficacité lumineuse&nbsp;: 15 à 27 lm/W</p>

	                                                        <p>Economies d’énergie par rapport à une ampoule à
	                                                            incandescence&nbsp;: 30 à 50 %</p>

	                                                        <p>Dedans ou dehors, les lampes halogènes passent partout. Mais
	                                                            elles <strong>restent gourmandes en énergie</strong>. Les
	                                                            lampes fluocompactes et les LED offrent une efficacité
	                                                            lumineuse plus importante que les halogènes. On les
	                                                            choisira donc pour équiper ses luminaires, y compris les
	                                                            luminaires halogènes.</p>

	                                                        <ul style="margin-bottom: 20px">
	                                                            <li><strong>Les lampes fluocompactes</strong></li>
	                                                        </ul>

	                                                        <p>Durée de vie&nbsp;: 6&nbsp;000 à 7&nbsp;000 heures en
	                                                            moyenne, plus de 10&nbsp;000 heures pour celles classées A+
	                                                            ou A++ suivant l’étiquetage énergétique de l’UE.</p>

	                                                        <p>Efficacité lumineuse&nbsp;: 50 à 100 lm/W voire plus.</p>

	                                                        <p>Economies d’énergie par rapport à une ampoule à
	                                                            incandescence&nbsp;: jusqu’à 80 %</p>

	                                                        <p>Elles se sont beaucoup améliorées ces dernières années,
	                                                            s’allument plus vite et offrent des ambiances lumineuses
	                                                            plus agréables que les premières générations. Elles
	                                                            s’utilisent cependant surtout à l’intérieur en raison de
	                                                            leur faible tolérance aux températures basses.</p>

	                                                        <ul style="margin-bottom: 20px">
	                                                            <li><strong>Les lampes à LED</strong></li>
	                                                        </ul>

	                                                        <p>Durée de vie&nbsp;: plus de 20&nbsp;000 heures pour les LED
	                                                            classées A+ ou A++</p>

	                                                        <p>Efficacité lumineuse&nbsp;: 60 à 120 lm/W</p>

	                                                        <p>Economies d’énergie par rapport à une ampoule à
	                                                            incandescence&nbsp;: jusqu’à 90 - 96 %</p>

	                                                        <p>Elles sont particulièrement adaptées aux luminaires dont on
	                                                            ne voit pas directement la source lumineuse. Durables,
	                                                            sobres, résistantes et permettant de varier l’intensité de
	                                                            l’éclairage, elles s’imposent comme la meilleure
	                                                            alternative avec en plus, un prix à la baisse.</p>

	                                                        <h3>Nos équipements multimédia</h3>

	                                                        <ul style="margin-bottom: 20px">
	                                                            <li><strong>Lorsque vous avez terminé de les utiliser,
	                                                                    éteignez complètement les appareils fonctionnant
	                                                                    avec télécommande (projecteur, écran, lecteur
	                                                                    vidéo, lecteur DVD, etc.).&nbsp;</strong>Les
	                                                                témoins lumineux de veille qui restent allumés ou
	                                                                clignotent jour et nuit consomment en effet beaucoup de
	                                                                courant. Cette «&nbsp;consommation passive» alourdit
	                                                                inutilement votre facture d'électricité.</li>
	                                                            <li><strong>Une fois les appareils chargés, débranchez les
	                                                                    chargeurs.&nbsp;</strong>Un chargeur (de GSM par
	                                                                exemple) ou un transformateur (d'imprimante par
	                                                                exemple) continue à consommer, même si vous n'utilisez
	                                                                pas l'appareil.</li>
	                                                        </ul>

	                                                        <h3>Nos climatiseurs</h3>

	                                                        <ul style="margin-bottom: 20px">
	                                                            <li>ne pas dépasser &nbsp;8 °C d’écart entre l’intérieur et
	                                                                l’extérieur, pour ce faire, il est recommandé de mettre
	                                                                la consigne du thermostat du climatiseur souvent à 24
	                                                                ou 25°C (zone de confort normal)&nbsp;: Eviter de
	                                                                régler trop bas le thermostat car pour un climatiseur
	                                                                en bon état et bien dimensionné la température de la
	                                                                pièce ne baissera pas plus vite.</li>
	                                                            <li>Eteindre la climatisation en quittant la pièce ou quand
	                                                                vous n'êtes pas dans la pièce pour longtemps.&nbsp;
	                                                            </li>
	                                                            <li>Fermer bien vos fenêtres et portes dans une pièce
	                                                                climatisée pour éviter de surconsommer de
	                                                                l’énergie&nbsp;!</li>
	                                                            <li>Faire régulièrement des entretiens de vos
	                                                                climatiseurs.&nbsp;</li>
	                                                        </ul>

	                                                        <h3>Nos Réfrigérateurs</h3>

	                                                        <ul style="margin-bottom: 20px">
	                                                            <li><strong>Dégivrez&nbsp;</strong>régulièrement le
	                                                                compartiment congélateur de votre réfrigérateur (s'il
	                                                                ne possède pas le système de froid ventilé) car il
	                                                                empêche le froid de circuler correctement et entraîne
	                                                                une consommation d'énergie plus importante. Sachez que
	                                                                3 mm de givre suffisent à augmenter de 30% sa
	                                                                consommation.</li>
	                                                            <li>Ne placez pas votre appareil près
	                                                                d'une&nbsp;<strong>source de
	                                                                    chaleur&nbsp;</strong>(four, radiateur, cuisinière)
	                                                                car son efficacité serait réduite et il solliciterait
	                                                                davantage le moteur pour produire du froid, d'où une
	                                                                surconsommation d'électricité.</li>
	                                                            <li>Laissez au moins&nbsp;<strong>5 cm de distance entre le
	                                                                    mur et le réfrigérateur&nbsp;</strong>pour éviter
	                                                                les risques de surchauffe.</li>
	                                                            <li>Ne placez&nbsp;<strong>pas d'aliments encore chauds
	                                                                    dans le réfrigérateur</strong>&nbsp;</li>
	                                                            <li>Choisissez un&nbsp;<strong>modèle de meilleure classe
	                                                                    énergétique </strong>(A titre d’exemples modèles
	                                                                A++ ou A+ pour les climatiseurs provenant de l’UE,
	                                                                modèles quatre ou cinq étoiles pour les climatiseurs
	                                                                venant du Ghana) qui, bien que plus cher à l'achat, se
	                                                                révèlera plus économique à long terme.</li>
	                                                            <li><strong>Ne laissez pas la porte inutilement
	                                                                    ouverte</strong>. La chaleur se répand vite à
	                                                                l'intérieur de l'appareil qui consomme plus
	                                                                d'électricité pour revenir à un niveau de froid
	                                                                convenable.</li>
	                                                            <li>Noter qu'un réfrigérateur neuf consomme 50% moins
	                                                                d'énergie qu'un réfrigérateur d'occasion.</li>
	                                                        </ul>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        <div class="card mb-1">
	                                            <div class="card-header" id="headingThree4">
	                                                <h5 class="mb-0 mt-0">
	                                                    <span role="menu" class="collapsed" data-toggle="collapse"
	                                                        data-target="#iconChangeAccordionThree" aria-expanded="false"
	                                                        aria-controls="iconChangeAccordionThree">
	                                                        Votre ampoule à la maison est-elle économique ?<i
	                                                            class="flaticon-down-arrow float-right mt-1"></i>
	                                                    </span>
	                                                </h5>
	                                            </div>
	                                            <div id="iconChangeAccordionThree" class="collapse"
	                                                aria-labelledby="headingThree4" data-parent="#toggleAccordion">
	                                                <div class="card-body mb-4 mt-4">
	                                                    <div class="article-text addMarginBottom-30">
	                                                   		<p>L’industrie des lampes a subi une évolution importante grâce à l’investissement des pouvoirs publics, des fournisseurs mais aussi par le changement de comportement des consommateurs qui se tournent de plus en plus vers des lampes économes et performantes, dans un souci 
																économique mais aussi de préservation de l’environnement.
															</p>
															<p>
																Ainsi pour aider à faire le bon choix, l’étiquette énergie apposée sur l’emballage indique la performance énergétique de l’équipement.
															</p>
															<p>
															Plusieurs types de lampes se retrouvent sur le marché allant des lampes à LED (plus efficaces) aux lampes incandescences (moins efficaces) :
															</p>

															<ol class="mb-4">
																<li>
																<p>Les lampes à LED consomment peu d’électricité et durent longtemps (80% d’économies énergétiques par rapport aux lampes à incandescence et jusqu’à 20% si l’on passe d’une lampe LFC  envisagées et 30 000 heures de durée de vie) ; Elles sont la meilleure solution d’éclairage domestique à condition qu’elles respectent les conditions de normes de performance énergétique, elles sont utilisables partout dans le logement et à l’extérieur, s’allument instantanément, supportent très bien les allumages répétés, résistent aux chocs, au froid et à la chaleur. De plus, les lampes à LED consomment peu d’électricité, qui représente un coût d’utilisation plus faible, ce qui compense leur prix d’achat plus élevé. </p>
																</li>
																<li>
																 <p>Les lampes fluo compactes (LFC) consomment également peu d’électricité et durent longtemps (60% d’économies énergétiques par rapport aux lampes à incandescence envisagées et 8 000 heures de durée de vie). Sans pour autant atteindre l’efficacité des lampes à LED, elles sont également une bonne solution car souvent moins chères que les lampes à LED.
																</p>
																<p>
																Elles s’allument progressivement et sont donc particulièrement adaptées aux pièces qui restent longtemps allumées. Par contre, elles résistent peu au froid et à la chaleur, donc doivent être évités pour l’utilisation extérieur, elles chauffent peu et sont encore équipées pour certaines de culot à baïonnette qui évite de remplacer les douilles 
																</p>
																</li>

																<li>
																	<p>
																	Les lampes halogènes sont moins économiques que les lampes à LED et les LFC et durent moins longtemps (30% d’économies énergétiques envisagées aux lampes à incandescences traditionnelles et 1000 heures de durée de vie).
																	</p>
																</li>

																<li>
																	<p>
																	Les lampes à incandescences sont moins économiques que les lampes à LED, les LFC et les halogènes et durent moins longtemps que les halogènes (0% d’économies énergétiques envisagées et 1000 heures de durée de vie). Elles ne sont pas du tout efficaces, elles ne se retrouvent presque plus sur le marché. Ces lampes sont énergivores et proscrites de la commercialisation et de l’usage dans les ménages.
																	</p>
																</li>
															</ol>
															<p>
																
															</p>
														</div>
														
														<div class=" mb-4 col-md-12 mx-auto">
	                                						<img alt="image-sample" src="back/assets/img/etiquette-1.jpg" class="img-fluid">
														</div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>


	                                    <div class="card mb-1">
	                                        <div class="card-header" id="headingThree5">
	                                            <h5 class="mb-0 mt-0">
	                                                <span role="menu" class="collapsed" data-toggle="collapse"
	                                                    data-target="#iconChangeAccordionFour" aria-expanded="false"
	                                                    aria-controls="iconChangeAccordionThree">
	                                                    Conseils pratiques pour un meilleur usage de mon climatiseur <i
	                                                        class="flaticon-down-arrow float-right mt-1"></i>
	                                                </span>
	                                            </h5>
	                                        </div>
	                                        <div id="iconChangeAccordionFour" class="collapse"
	                                            aria-labelledby="headingThree5" data-parent="#toggleAccordion">
	                                            <div class="card-body mb-4 mt-4">
	                                                <div class="article-text addMarginBottom-30">
	                                                   <ul>
															<li>
																<p>
																Je choisis les climatiseurs les plus étoilés pour une faible consommation d’électricité.
																</p>
															</li>

															<li>
																<p>
																J’adapte la température des climatiseurs avec le thermostat  de l’appareil pour maintenir une température constante dans la pièce.
																</p>
															</li>

															<li>
																<p>
																J’évite de laisser les portes et fenêtres d’une salle ouvertes lorsque le climatiseur fonctionne.

																</p>
															</li>

															<li>
																<p>
																J’arrête systématiquement la climatisation lorsque les fenêtres sont ouvertes.
																</p>
															</li>

															<li>
																<p>
																Je règle le thermostat à 25°C afin de profiter d’un confort maximum : votre climatiseur consomme de 3 à 5 % plus d’énergie pour chaque degré en dessous de 24°C.
																</p>
															</li>

															<li>
																<p>
																J’effectue une maintenance régulière de mon climatiseur au moins une fois au six mois.
																</p>
															</li>
													   </ul>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>

	                                
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>

	        </div>
	    </div>
	    </div>
	    </div>
	    </div>
	    </div>
		<!-- Base de données -->

	

	    <!-- Partners -->
	    <div class="container">
	        <div id="companyWrapper">
	            <div class="row">
	                <div class="col-xl-12 col-lg-12 col-md-12 text-center site-header-inner mb-5">
	                    <h2 class="section-title mb-5"> Partenaires</h2>
	                </div>

	                <div class="col-xl-12">
	                    <div class="partnersSlider owl-carousel owl-theme">
	                        <div class="slide-item">
	                            <a href="#" target="_blank" rel="noopener noreferrer">
	                                <img src="back/assets/img/logo-aberme.jpeg" class="img-fluid"
	                                    alt="image-clients">
	                            </a>

	                        </div>
	                        <div class="slide-item">
	                            <a href="https://www.mcabenin2.bj " target="_blank" rel="noopener noreferrer">
	                                <img src="back/assets/img/logo-mca.png" class="img-fluid" alt="image-clients">
	                            </a>

	                        </div>
	                        <div class="slide-item">
	                            <a href="http://douanes-benin.net" target="_blank" rel="noopener noreferrer">
	                                <img src="back/assets/img/logo-douanes.png" class="img-fluid" alt="image-clients">
	                            </a>

	                        </div>
	                        <div class="slide-item">
	                            <a href="https://anmbenin.com" target="_blank" rel="noopener noreferrer">
	                                <img src="back/assets/img/logo-anm.png" class="img-fluid" alt="image-clients">
	                            </a>

	                        </div>

	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!-- /Partners -->






	    <!-- Mini Footer -->
	    <div id="miniFooterWrapper" class="">
	        <div class="container">
	            <div class="row">
	                <div class="col-xl-12 col-lg-12 col-md-12">
	                    <div class="position-relative">
	                        <div class="arrow text-center">
	                            <img alt="image-icon" src="back/assets/img/footer-arrow.svg" class="img-fluid">
	                        </div>
	                    </div>
	                    <div class="row">
	                        <div
	                            class="col-lg-5 mx-auto col-lg-6 col-md-6 site-content-inner text-md-left text-center copyright align-self-center">
	                            <a href="https://www.mcabenin2.bj">
	                                <p class="mt-md-0 mt-4 mb-0">© 2019 MCA BENIN II</p>
	                            </a>
	                        </div>
	                        <div
	                            class="col-xl-5 mx-auto col-lg-6 col-md-6 site-content-inner text-md-right text-center align-self-center">
	                            <p class="mb-0"></p>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!-- /Mini Footer -->



	    <!-- <div class="flex-center position-ref full-height">
	@if (Route::has('login'))
	<div class="top-right links">
	@auth
	<a href="{{ url('/home') }}">Home</a>
	@else
	<a href="{{ route('login') }}">Login</a>
	@endauth
	</div>
	@endif
	</div> -->

	    <script src="{{ asset('back/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
	    <script src="{{ asset('back/assets/js/loader.js') }}"></script>
	    <script src="{{ asset('back/bootstrap/js/popper.min.js') }}"></script>
	    <script src="{{ asset('back/plugins/sliders/owlCarousel/js/owl.carousel.min.js') }}"></script>
	    <script src="{{ asset('back/bootstrap/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('back/assets/js/pages/landing-page/script.js') }}"></script>
		<script src="{{ asset('back/plugins/table/datatable/datatables.js') }}"></script>
		<script src="{{ asset('back/assets/js/app.js') }}"></script>
		<script src="{{ asset('back/assets/js/custom.js') }}"></script>
		<script>
        $(document).ready(function() {
            App.init();
        });
		</script>
		<script>
        $('#zero-config').DataTable({
            "language": {
                "paginate": { "previous": "<i class='flaticon-arrow-left-1'></i>", "next": "<i class='flaticon-arrow-right'></i>" },
                "info": "Showing page _PAGE_ of _PAGES_"
            }
        });
    	</script>
	</body>

	</html>