@include('layouts/navbar')
<div class="zoomIn">
    <h1 class="main-title text-center "> <span class="title"> Projets </span></h1>

    <h1 class="title text-center "> <span class="title"> 1/ Projet de fin de formation : Concert'O </span></h1>
        <div class="container  text-center justify-content-space-between">
        {{--First row with 12 columns (grid bootstrap)--}}
            <div class="row align-items-center mt-5">
                <div class="col-lg-6">
                    <div class="embed-responsive embed-responsive-16by9">
                        <video src="{{ asset('videos/concerto.mp4') }}" autoplay controls></video>
                    </div>
                </div>
                    <div class="col-lg-6 ">
                        <p class="paragraph ml-3"> Concert'O est une application permettant de rechercher des événements musicaux
                        en fonction du genre musical et/ou de la région de l'utilisateur. Ce projet a été réalisé
                        sur une durée d'un mois au sein d'une équipe de 4 personnes.
                        Ayant eu l'idée du projet, je fus Product Owner mais également Lead Dev Front.</br> </p>
                    </div>
            </div>
        </div>
    <div class="container" >
         {{--Second row with 12 columns (grid bootstrap)--}}
        <div class="row">
            <div class="technology col-lg-6">
                <h2 class= "title">Technologies utilisées côté front : </br> </h2>
                    <ul class=" inline">
                        <li  >
                            React /
                        </li>
                        <li >
                            Redux /
                        </li>
                        <li >
                            React Bootstrap /
                        </li>
                        <li > React Router /</li>
                        <li >
                            Axios /
                        </li>
                        <li  >
                            Scss/SASS /
                        </li>
                    </ul>
                        <a class="github-link "href="https://github.com/LaureCHAPERT/Concert-O-Front"> Repo GitHub <img class="arrow-icon " src="{{ asset('images/icons/arrow.svg') }}" alt="arrow-icon"></a> <br>

            </div>
                <div class="technology col-lg-6 ">
                    <h2 class= "title">Technologies utilisées côté back : </br> </h2>
                        <ul class=" inline">
                            <li>
                                Symfony /
                            </li>
                            <li>
                                Doctrine /
                            </li>
                            <li>
                                MySQL /
                            </li>
                            <li> NelmioCors /</li>
                            <li>
                                JWT Token /
                            </li>
                            <li>
                                Faker
                            </li>

                        </ul>
                            <a class="github-link" href="https://github.com/LaureCHAPERT/Concerto-Back"> Repo GitHub <img class="arrow-icon " src="{{ asset('images/icons/arrow.svg') }}" alt="arrow-icon"></a>
                </div>
        </div>
    </div>

  <h1 class="text-center title"> <span class="title-underline"> 2/ Ce même projet de portfolio 🐾 </span> </h1>
    <div class="container text-center mb-4" >
        <div class="row">
            <div class="mb-4">

                <h2 class= "title">Technologies utilisées : </h2> </br>
                    <p class="paragraph">  L'idée était de me familiariser avec <strong>Laravel</strong> que je connaissais peu. J'ai déjà pu travailler avec Symfony lors de notre projet de fin de formation avec mes collègues qui travaillaient sur la partie back-end. Lors de ma formation, nous avons également expérimenté Lumen sur quelques jours mais je souhaitais approfondir cela en partant, cette fois sur Laravel. Ce portfolio est un exemple très simple, mais je continue mon apprentissage à travers un autre projet guidé sur Laracasts, notamment en manipulant une base de données.
                    Pour ce qui est du style, je continue à travailler avec <strong>Sass</strong> et <strong> Bootstrap</strong>.
                    </p>
                        <a class="github-link" href="https://github.com/LaureCHAPERT/Portfolio"> Repo GitHub <img class="arrow-icon " src="{{ asset('images/icons/arrow.svg') }}" alt="arrow-icon"></a>
            </div>
        </div>
  </div>
  </div>
@include('layouts/footer')
