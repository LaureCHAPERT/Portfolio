@include('layouts/navbar')
{{-- We use Grid rules from Bootstrap to get a responsive design--}}
        <div class="container-fluid zoomIn row">
                <div class="col-lg-1"></div>
                <div class="col-lg-1"><img class="presentation-img " src="{{ asset('images/presentation.jpg') }}" alt="myself"></div>
                <div class="col-lg-1"></div>
                <div class="col-lg-9">
                    <h1> Bonjour !</h1> <br>
                    <p class="paragraph">Je m'appelle Laure Chapert. Anciennement technicienne du son et plus récemment conseillère de vente en multimédia, j'ai entamé une reconversion professionnelle dans un domaine qui me passionne : l'informatique. <br> Je suis récemment diplômée du diplôme de développeur web et web mobile et en pleine recherche d'emploi en full remote idéalement !
                    J'ai suivi une formation intensive chez O'clock afin d'y parvenir : celle de développeur web et web mobile basé sur un socle orienté PHP qui constitue la première partie de l'apprentissage. Ensuite, j'ai dû choisir une spécialisation. Ayant une certaine curiosité pour JavaScript, j'ai choisi la bibliothèque React. Pour finaliser notre formation, nous avons dû créer un projet en équipe d'A à Z sur un mois complet. J'ai travaillé sur la partie front avec React et j'ai eu la chance de porter deux casquettes pendant cette période de travail ce qui fût très enrichissant : celle de Lead Dev Front et celle de Product Owner étant l'instigatrice du projet. Lors des phases de travaux en équipe où je rejoignais l'équipe back, j'ai également pu me familiariser avec le framework Symfony. Je poursuis encore mon apprentissage en ce moment en réalisant ce portfolio et un autre sur Laravel. Je m'apprête également à passer ma certification Opquast. Pour plus de détails sur mes compétences merci de cliquer ici :

                    </p>

                </div>
                {{--<div class="col-lg-4">
                    <h1> Hello !</h1> <br>
                    <p class="paragraph">I'm Laure Chapert, recently graduated from the web and mobile web developer diploma and looking for a full remote job! </p>
                    </div>--}}
        </div>
@include ('layouts/footer')
