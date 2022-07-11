@include('layouts/navbar')
<div class="skills">
    <h1 class="skills-title text-center"> <span class="the-span "> Compétences </span></h1>
    <div style="height:50px;display:block;"> </div>
    <h2 class="subtitle text-center"> <span class="the-span "> Les langages, outils et frameworks que j’utilise </span></h2>

      <ul class="skills-list text-center m-auto">
      @foreach ($competences as $competence)
          <li class="skills-list-skill" key="{{$competence['icon']}}">
          <img src="{{asset('/images/skills/'.$competence['icon'])}}" alt="" class="skills-list-skill-icon" />
            <p class="skills-list-skill-title">{{$competence['name']}}</p>
          </li>
         @endforeach
      </ul>

</div>



@include ('layouts/footer')
