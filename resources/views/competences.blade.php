@include('layouts/navbar')

<div id="container-fluid zoomIn competences ">
<div className="skills m-auto container zoomIn text-center justify-content-space-between">">
      <h1 className="skills-title">Compétences</h1>
      <h2 className="subtitle"><span>•</span> Les langages, outils et frameworks que j’utilise</h2>
      <ul className="skills-list">
        @foreach ($competences as $competence)
          <li className="skills-list-skill" key="{{$competence['icon']}}">
            <img src="{{$competence['icon']}}" alt="" className="skills-list-skill-icon" />
            <p className="skills-list-skill-title">{{$competence['name']}}</p>
          </li>
         @endforeach
      </ul>
    </div>
    <div className="secondary-skills">
      <h2 className="subtitle"><span>♥</span> Ce que je vais approfondir et apprendre lors de ma formation en alternance, dans l’ordre du programme</h2>
      <div className="secondary-skills-lists">
        <ul>
          <li>PHP &amp; POO</li>
          <li>Conception (architecture synchrone, MVC)</li>
          <li>SGBDR</li>
          <li>Laravel</li>
          <li>JavaScript &amp; Vue.js</li>
          <li>Cloud Computing (Serverless, FaaS, etc.)</li>
          <li>Schémas UML</li>
        </ul>
        <ul>
          <li>Gestion de projet</li>
          <li>Node.js &amp; Express</li>
          <li>NoSQL</li>
          <li>API (REST, GraphQL, Websocket)</li>
          <li>Sécurité &amp; Multiplateformes</li>
          <li>Failles de sécurité et parafes (OWASP, injections)</li>
          <li>Développement Mobile et Desktop (Flutter)</li>
        </ul>
      </div>
    </div>
  </div>
@include ('layouts/footer')
