@include('layouts/navbar')

        <div class="about container-fluid zoomIn">
        <h1> Mon parcours </h1>
                    <div class="about-first">
                    <div class="about-first-responsive">

                        <p>
                        Anciennement technicienne du son et plus récemment conseillère de vente en multimédia, j'ai entamé une reconversion professionnelle dans un domaine qui me passionne depuis toujours : l'informatique. <br>
                        J'ai suivi une formation intensive chez O'clock afin d'y parvenir : celle de développeur web et web mobile basé sur un socle orienté PHP qui constitue la première partie de l'apprentissage. </p>

                            <img class="about-first-img-shiba" src="{{ asset('images/shiba.svg') }}" alt="decorative image with shiba">

                    </div>
                    </div>
                    <h1> Ma formation </h1>
                    <div class="about-first">

                    <div class="about-first-img">
                            <img class="about-first-img-dango" src="{{ asset('images/dango.svg') }}" alt="decorative image with cat eating dango">
                        </div>
                        <p>
                        Durant le socle de la formation, on apprend les bases avec HTML5, CSS3, JavaScript et PHP. On se familiarise même avec certains outils comme Bootstrap, Lumen ou encore l'outil de gestion Trello.
                        Ensuite, j'ai dû choisir une spécialisation. Ayant une certaine curiosité pour JavaScript, j'ai orienté mon choix sur la bibliothèque React.
                        Pour finaliser notre formation, nous avons dû créer un projet en équipe de A à Z sur un mois complet. J'ai travaillé sur la partie front avec React et j'ai eu la chance de porter deux casquettes pendant cette période de travail ce qui fût très enrichissant : celle de Lead Dev Front et celle de Product Owner étant l'instigatrice du projet. Lors des phases de travaux en équipe où je rejoignais l'équipe back, j'ai également pu me familiariser avec le framework Symfony. Je poursuis encore mon apprentissage en ce moment en réalisant ce portfolio et un autre projet sur Laravel. Je m'apprête également à passer ma certification Opquast. Pour plus de détails sur mes compétences, rejoignez la page qui y est consacrée : <a href="/competences">juste ICI !</a>
                        </p>

                    </div>
                    <h1> Et maintenant ...? </h1>
                    <div class="about-first">
                    <div class="about-first-responsive">

                        <p>
                        Désormais diplômée, je recherche un emploi dès maintenant en full remote afin de mettre en pratique mes connaissances et de monter en compétences! Le métier de développeur (tant côté back que front) est très riche et inépuisable, ce qui consitue un réel moteur à ma motivation!
                        </p>
                        <div class="about-first-img">
                            <img class="about-first-img-dog" src="{{ asset('images/dog.svg') }}" alt="decorative image with dog">
                        </div>
                    </div>
                    </div>

        </div>
  </div>
@include ('layouts/footer')
