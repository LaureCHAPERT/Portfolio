@include('layouts/navbar')
<h1 class="text-center text-decoration-underline">Projet de fin de formation : Concert'O</h1>
<div class="container zoomIn text-center justify-content-space-between">
  <div class="row">
    <div class="col-lg-6">
      <div class="embed-responsive embed-responsive-16by9">
        <video src="{{ asset('videos/concerto.mp4') }}" autoplay controls></video>
      </div>
    </div>
    <div class="col-lg-6 ">
            <p class="ml-3"> Concert'O est une application permettant de rechercher des événements musicaux
                en fonction du genre musical et/ou de la région de l'utilisateur. Ce projet a été réalisé
                sur une durée d'un mois au sein d'une équipe de 4 personnes.
                Ayant eu l'idée du projet, je fus Product Owner mais également Lead Dev Front.</br>

            </p>
        </div>
  </div>
</div>
<div class="container zoomIn bolder" >
  <div class="row">
    <div class="col-lg-6">
    <h2 class= "text-decoration-underline">Technologies utilisées côté front : </br> </h2>
                <ul class="inline">
                    <li >
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
                <a href="https://github.com/LaureCHAPERT/Concert-O-Front"> Repo GitHub </a>

    </div>
    <div class="col-lg-6 ">
    <h2 class= "text-decoration-underline">Technologies utilisées côté back : </br> </h2>
                <ul class="inline">
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
             <a href="https://github.com/LaureCHAPERT/Concerto-Back"> Repo GitHub </a>
        </div>
  </div>
  </div>
@include('layouts/footer')
