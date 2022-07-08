@include('layouts/navbar')

<div id="competences">
    <div className="skills">
      <h1 className="skills-title"><span>*</span>Skills</h1>
      <h2 className="subtitle"><span>•</span> Languages and frameworks</h2>
      <ul className="skills-list">
      @foreach ($competences as $competence){
        <p>echo $competence['array']->name</p>
      }

      @endforeach

          <li className="skills-list-skill" key={skill.icon}>
            <img src={skill.icon} alt="" className="skills-list-skill-icon" />
            <p className="skills-list-skill-title">{skill.title}</p>
          </li>

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
