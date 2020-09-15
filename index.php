<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" media="screen and (max-width: 1500px)" href="css/screenMobile.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/script.js"></script>
    <link rel="shortcut icon" type="image/png" href="img/logoEd1.png"/>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin="" />
    <title>Edouard LIEGEON, développeur web</title>
</head>
<body> 
  <header id="home" class="container-fluid" >
    <nav>
    <?php include("php/navbar.php"); ?>
          </nav>
          <div class="row">
        <div class="col-md-4 offset-md-8 col-sm-6 offset-sm-3 mainLink">
            <a href="#about"> <p>#PRESENTATION</p></a> <br>
            <a href="#works"><p>#REALISATIONS</p></a> <br>
            <a href="#contact"><p>#ME CONTACTER</p></a>
          </ul>
        </div>
        </div>
    </header>
    <section id="about" class="container-fluid">
      <h2>PRESENTATION...</h2>

      <div class="row">
        <div class="col-md-4 offset-2 sm-12 about2">
      <h3>Du commerce au Web</h3>
      <p>Après 10 ans passés dans la grande distribution, des problèmes de santé m'ont permit de réfléchir à une reconversion. 
         J'ai donc décidé de me lancer dans le web, cherchant un métier où la créativité est de mise. <br>
        j'ai ainsi pu réaliser un titre professionnel <b>"Développeur web junior"</b>, mais à la fin de cette formation j'ai su que ce n'était que la première étape 
        d'un périple enrichissant où je savais vraiment où aller. Pour moi la polyvalence est importante et même essentielle, je sais que je ne m'arrêterai pas au Front-end.
         <br> <br> Ma deuxième étape est en marche...
      </p>
    </div>
    <div class="col-md-4 offset-1 about2">
      <h3>Un site inspiré des 80's</h3>
      <p>Je vous parle d'un temps que les moins de 30 ans ne peuvent pas connaître... <br>
        J'ai donc décidé de créer ce portfolio comme une vitrine de mes projets et compétences mais aussi de ma personnalité. Etant un enfant des 80's, 
        j'ai voulu retranscrire cette époque incroyable avec un look rétro futuriste où les lasers croisent le fluo. C'est assez aggressif visuellement mais on retrouve l'ambiance des boîtes de nuit à la Scarface. <br>
        On peut aussi retrouver des éléments inspirés de "Tron" ou de "Miami Vice" et plus récemment de "Stranger things" et "Thor Ragnarok". Pour les plus sportifs 
        d'entre vous ça rappelle aussi le maillot city edition NBA des Miami Heat.</p>
      </div>
    </div>
    <div class="row">
        <div class="col-lg-4 offset-4 logoEd">
          <img src="img/logoEd1.png" width="300px" height="280px" alt="Logo">
        </div>
      </div>
</section>
<section id="skills">
  <div class="container-fluid">
    <h2> Mes competences</h2>
      <div class="row">
        <div class="col-xl-6 offset-3">
          <div class="skillsText">
          Toutes les technologies présentes ont été apprises lors de ma formation à l'ACS, ensuite j'ai continué à m'auto-former pour pratiquer, en maîtriser certaines
          et parfaire mes connaissances sur d'autres. Je me sens plutôt attiré vers le front-end mais j'ai une préférence pour PHP dans la programmation, je trouve son écriture 
          plus intituive. <br>
          Mon objectif à court terme est la maîtrise de SASS, Bootstrap, JavaScript et PHP, et à moyen terme je compte me lancer sur Symfony, ReactJs et VueJs.
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-8 offset-2">
          <img class="skillsImage"src="img/skillsImage.png" alt="">
        </div>
      </div> 
        <div class="col-xl-6 offset-3">
          <div class="skillsText">
            Les 3 notions suivantes sont des plus importantes pour un bon développeur, elles sont toutes essentielles au bon fonctionnement d'un site et font 
            partie de ces techniques en perpétuelle évolution. Tout d'abord car les habitudes des utilisateurs changent régulièrement comme 
            par exemple avec l'apparition des réseaux sociaux et des smartphones.
          </div>
        </div>
      <div class="row skills2Global">
        <div class="col-lg-2 offset-2">
          <figure class="skills2">
          <img src="img/bays.jpg" alt="Hébergement" />
          <figcaption><p><span class="skills2Maj">L'Hébergement</span><br><br>Etape essentielle et obligatoire pour une application internet, sans ça 
          pas de mise en ligne...
            </p></figcaption>
          </figure>
        </div>
        <div class="col-lg-2 offset-1">
        <figure class="skills2">
          <img src="img/seo.jpg" alt="SEO" />
          <figcaption><p><span class="skills2Maj">Le référencement (SEO)</span> <br><br>C'est un concept qui évolue et apporte son lot de nouveautés régulièrement. J'ai des notions, à
          parfaire.
            </p></figcaption>
        </figure>
        </div>
        <div class="col-lg-2 offset-1">
        <figure class="skills2">
          <img src="img/responsive.jpg" alt="Responsive design" />
          <figcaption><p><span class="skills2Maj">Responsive design</span><br><br>Un site doit être compatible sur tout supports pour une meilleure visibilité. </p></figcaption>
        </figure>
        </div>
      </div>
  </div>
    </section> 
    <section id="works">
    
      <h2>Réalisations</h2>
      <div class="container-fluid">
          <div class="row work1">
            <div class="col-xl-4">
              <figure class="work">
                <img src="img/lambdaLogo.jpg" alt="Restaurant Lambda"/>
                <figcaption>
                  <p>Projet 1: Restaurant Lambda</p>
                  <p>Intégration d'un site One-page avec Bootstrap</p>
                  <a href='projet.php?id=1'target="blank"><span class="linkWork">En savoir plus</span></a><a href="projets/restaurant_lambda/index.html" target="blank"><span class="linkWork">Visiter le site</span></a>
                </figcaption>
              </figure>
            </div>
            <div class="col-xl-4">
              <figure class="work">
                <img src="img/virusLogo.jpg" alt="Virus Invaders"/>
                <figcaption>
                  <p>Projet 2: Virus Invader</p>
                  <p>Développement d'un jeu du style "Space invaders" en JavaScript</p>
                  <a href="projet.php?id=2" target="blank"><span class="linkWork">En savoir plus</span></a><a href="projets/virus_invader/index.html" target="blank"><span class="linkWork">Visiter le site</span></a>
                </figcaption>
              </figure>
            </div>
            <div class="col-xl-4">
              <figure class="work">
                <img src="img/snakeLogo.jpg" alt="Virus Invaders" />
                <figcaption>
                  <p>projet 3: Le jeu du snake</p>
                  <p>Développement d'un autre jeu en JavaScript, le jeu du serpent</p>
                  <a href="projet.php?id=3" target="blank"><span class="linkWork">En savoir plus</span></a><a href="projets/Snake/welcome.html" target="blank"><span class="linkWork">Visiter le site</span></a>
                </figcaption>
              </figure>
            </div>
          </div>
          <div class="row work2">
            <div class="col-xl-4">
              <figure class="work">
                <img src="img/yakwaLogo.jpg" alt="Yakwa"/>
                <figcaption>
                  <p>Projet 4: L'annuaire de films Yakwa</p>
                  <p>Développement d'un site de films avec Symfony, Twig, Php et les bases de données</p>
                  <a href="projet.php?id=4" target="blank"><span class="linkWork">En savoir plus</span></a><!--<a href="yakwa/" target="blank"><span class="linkWork">Visiter le site</span></a>-->
                </figcaption>
              </figure>
            </div>
            <div class="col-xl-4">
              <figure class="work">
              <img src="img/cafeInlineLogo.jpg" alt="portfolio"/>
              <figcaption>
                <p>projet 5: Le blog wordpress de la promotion ACS</p>
                <p>Développement from scratch d'un thème Wordpress</p>
                <!--<a href="" target="blank">--><span class="linkWork">En cours......</span></a><!--<a href="" target="blank"><span class="linkWork">Visiter le site</span></a>-->
                </figcaption>
              </figure>
            </div>
            <div class="col-xl-4">
            <figure class="work">
            <img src="img/burgerLogo.jpg" alt=""/>
                <figcaption>
                <p>projet 6: Le site de fast-foot dynamique en PHP</p>
                <p>Développement d'un site en PHP avec une base de données et un admin pour les gérer</p>
                  <a href="projet.php?id=5" target="blank"><span class="linkWork">En savoir plus</span></a><a href="projets/burgerCode/" target="blank"><span class="linkWork">Visiter le site</span></a>
              </figcaption>
            </figure>
            </div> 
          </div>
      </div>
  </div>
    </section>
    <section id="contact">
      <div class="container">
        <h2>Pour me contacter</h2>
        <div class="row">
          <div class="col-lg-10 offset-1">
            <form id="contact-form" method="post" action="" role="form"> <!-- On se protège contre les failles XSS avec specialchars -->
              <div class="row">
                <div class="col-md-6">
                  <label for="firstname">Prénom <span class="red">*</span></label>
                  <input id="firstname" type="text" name="firstname" class="form-control" placeholder="" value=""> 
                  <p class="comments"></p>
                </div>
                <div class="col-md-6">
                  <label for="name">Nom <span class="red">*</span></label>
                    <input id="name" type="text" name="name" class="form-control" placeholder=""value="">
                    <p class="comments"></p>
                </div>
                <div class="col-md-6">
                  <label for="email">Email <span class="red">*</span></label>
                  <input id="email" type="email" name="email" class="form-control" placeholder=""value="">
                  <p class="comments"></p>
                </div>
                <div class="col-md-6">
                  <label for="phone">Téléphone</label>
                  <input id="phone" type="tel" name="phone" class="form-control" placeholder=""value="">
                  <p class="comments"></p>
                </div>
                <div class="col-md-12">
                  <label for="message">Message <span class="red">*</span></label>
                  <textarea id="message" name="message" class="form-control" placeholder="" rows="4"></textarea>
                  <p class="comments"></p>
                </div>
                <div class="col-md-12">
                  <p class="red">* Ces informations sont requises.</p>
                </div>
                <div class="col-md-12">
                  <input type="submit" class="button1" value="Envoyer">
                </div>  
                </div>
            </form>
          </div>
        </div>
        <div class="row">
            <div id="map">
          </div>
      </div>
    </section>
    <footer>
      <?php include("php/footer.php"); ?> 
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
	<script type="text/javascript">
            // On initialise la latitude et la longitude de Paris (centre de la carte)
            var lat = 47.069;
            var lon = 5.484;
            var macarte = null;
            // Fonction d'initialisation de la carte
            function initMap() {
                // Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
                macarte = L.map('map').setView([lat, lon], 11);
                // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
                L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
                    // Il est toujours bien de laisser le lien vers la source des données
                    attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
                    minZoom: 1,
                    maxZoom: 20
                }).addTo(macarte);
            }
            window.onload = function(){
		// Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
		initMap(); 
            };
        </script>
        <script>
          const app = new Vue({
            el : "#app",
            data : {
              
            }

          })
        </script>
        <style type="text/css">
          #map{ /* la carte DOIT avoir une hauteur sinon elle n'apparaît pas */
              height:400px;
              width: 1700px;
              border: solid 5px #2c75ff;
              border-radius: 5px;
              box-shadow: 5px 5px #2c75ff;
          }
      </style>
</body>
</html>