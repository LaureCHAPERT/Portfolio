@include('layouts/navbar')
<div class="skills zoomIn">
    <h1 class="skills-title text-center "> <span class="the-span "> Compétences </span></h1>
    <div style="height:50px;display:block;"> </div>
    <h2 class="subtitle text-center"> <span class="the-span "> Les langages, outils et frameworks que j’utilise </span></h2>
    <div style="height:50px;display:block;"> </div>

      <ul class="skills-list text-center m-auto">
      @foreach ($competences as $competence)
          <li class="skills-list-skill" key="{{$competence['icon']}}">
          <img src="{{asset('/images/skills/'.$competence['icon'])}}" alt="" class="skills-list-skill-icon m-auto" />
            <p class="skills-list-skill-title">{{$competence['name']}}</p>
          </li>
         @endforeach
      </ul>
      <div style="height:50px;display:block;"> </div>
      <h2 class="subtitle text-center"> <span class="the-span "> Mes soft skills et autres compétences  </span></h2>
      <div style="height:50px;display:block;"> </div>
      <div class="secondary-skills-lists justify-content-around">
        <ul class="list">
          <li>Autonomie</li>
          <li>Sérieux</li>
          <li>Curiosité</li>
          <li>Créativité</li>
          <li>Adaptabilité</li>
          <li>Réactivité</li>
          <li>Collaboration</li>
        </ul>
        <ul class="list">
          <li>PHP &amp; POO</li>
          <li>MVC</li>
          <li>SGBDR</li>
          <li>Initiation à Docker </li>
          <li>Bases en SEO et en sécurité (injections, CSRF, ...)</li>
          <li>Méthodes agiles (SCRUM)</li>
          <li>Conception (Cahier des charges, wireframes, user stories,...)</li>
        </ul>
      </div>

</div>



@include ('layouts/footer')
