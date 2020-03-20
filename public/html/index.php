<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Bertrand ARNAUD - AR Developer</title>

  <!-- Bootstrap core CSS -->
  <link href="./public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="./public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  <!-- Toggle Bootstrap -->
  <link href="./public/vendor/bootstrap-toggle/bootstrap2-toggle.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="./public/css/resume.css" rel="stylesheet">

</head>

<body id="page-top">
	
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
	<div id="particlesJS"></div>
	<a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-block d-lg-none">Bertrand ARNAUD</span>
      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="./public/img/profile-square.jpg" alt="">
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#a-propos">A propos de moi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#competences">Compétences</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#projets">Projets</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#parcours">Parcours</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#temoignages">Témoignages</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid p-0">
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="a-propos">
      <div class="w-100">
        <h1 class="mb-0">Bertrand
          <span class="text-primary">ARNAUD</span>
        </h1>
        <div class="subheading mb-5">Toulouse
          <a href="mailto:b.arnaud@intech-sud.fr">b.arnaud@intech-sud.fr</a>
        </div>
        <p class="lead mb-5">Alternant en développement logiciel, j'exerce et développe mes compétences au sein de la branche avionique du groupe Thales. En parallèle, je poursuis mon cursus étudiant en 5ème année à IN'TECH Sud.</p> 

        <p class="lead mb-5 text-justify">Passionné par l'innovation, je suis animé par différents sujets et technologies tels que la réalité augmentée, Unity3D, l'intelligence artificielle ou  encore la cybersécurité.
          C'est notamment dans le domaine de la réalité augmentée et mixte et virtuelle que je souhaite me spécialiser et poursuivre ma carrière afin de devenir expert technique XR ou bien chef de projet XR.
        </p>
        <div class="social-icons">
          <a href="#">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a href="#">
            <i class="fab fa-github"></i>
          </a>
          <a href="#">
            <i class="fab fa-twitter"></i>
          </a>
        </div>
      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="competences">
      <div class="w-100">
        <h2 class="mb-5">Compétences</h2>
        <div class="subheading mb-3">Compétences techniques</div>
        <div class="container">
          <ul class="list-inline">
            <li><button onclick="openSkill('csharp')" class="btn btn-inline btn-custom">C#</button></li>
            <li><button onclick="openSkill('unity')" class="btn btn-custom">Unity</button></li>
            <li><button onclick="openSkill('git')" class="btn btn-custom">Git</button></li>
            <li><button onclick="openSkill('javascript')" class="btn btn-custom">JavaScript</button></li>
            <li><button onclick="openSkill('database')" class="btn btn-custom">Base de données</button></li>
            <li><button onclick="openSkill('web')" class="btn btn-custom">PHP/HTML/CSS</button></li>
          </ul>
        </div>
        <div class="subheading mb-3">Compétences humaines</div>
        <div class="container">
          <ul class="list-inline">
            <li><button onclick="openSkill('communication')" class="btn btn-custom">Communication</button></li>
            <li><button onclick="openSkill('autonomie')" class="btn btn-custom">Autonomie</button></li>
            <li><button onclick="openSkill('innovation')" class="btn btn-custom">Innovation</button></li>
            <li><button onclick="openSkill('polyvalence')" class="btn btn-custom">Polyvalence</button></li>
            <li><button onclick="openSkill('teamwork')" class="btn btn-custom">Travail d'équipe</button></li>
          </ul>
        </div>
      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="projets">
      <div class="w-100">
        <h2 class="mb-5">Projets</h2>
        <?php echo $projects_html;?>
      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="parcours">
      <div class="w-100">
        <h2 class="mb-5">Parcours</h2>
        <!-- Intégration Timeline -->
        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">IN'TECH Sud</h3>
            <div class="subheading mb-3">Titre RNCP d'expert en Ingénierie du logiciel</div>
            <div>Apprentissage de l'informatique grâce à une pédagogie par projet : Projet informatique en relation directe avec des professionnels - Projet de formation humaine afin de développer des compétences telles que la communication, l'organisation d’événements ou encore la gestion de budget.</div>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">Septembre 2015 - Septembre 2020</span>
          </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">Thales Avionics</h3>
            <div class="subheading mb-3">Alternant en ingénierie du logiciel - Unity/C#</div>
            <div>Au sein du hub innovation, contribution au développement de divers projets au travers de mes compétences Unity/C#. Parmis ces projets :</div>
            <ul>
              <li>Outil de conception et présentation des suites avioniques en 2D et 3D.</li>
              <li>Environnement de simulation 3D pour hélicoptères et drones.</li>
            </ul>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">Septembre 2018 - Septembre 2020</span>
          </div>
        </div>

      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="temoignages">
      <div class="w-100">
        <h2 class="mb-5">Interests</h2>
        <p>Apart from being a web developer, I enjoy most of my time being outdoors. In the winter, I am an avid skier and novice ice climber. During the warmer months here in Colorado, I enjoy mountain biking, free climbing, and kayaking.</p>
        <p class="mb-0">When forced indoors, I follow a number of sci-fi and fantasy genre movies and television shows, I am an aspiring chef, and I spend a large amount of my free time exploring the latest technology advancements in the front-end web development world.</p>
      </div>
    </section>
  </div>
  
  <div class="modal" id="myModal" role="document">
	  <div class="modal-dialog modal-lg">
		<div class="modal-content">

			<div class="modal-header">
		  <!-- Modal Header -->
				<div class="btn-group">
				<button id="prevButton" class="btn btn-primary" type="button" onclick="OnPressPrevButton()" disabled><</button></button>
				<button id="nextButton" class="btn btn-primary" type="button" onclick="OnPressNextButton()" disabled>></button></button>
				</div>
				<!--<button type="button" class="close btn-right" data-dismiss="modal">&times;</button>-->
			</div>
			
		  <!-- Modal body -->
		  <div class="modal-body">
			Modal body..
			
		  </div>

		  <!-- Modal footer -->
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		  </div>

		</div>
	  </div>
	</div>
  <!-- Bootstrap core JavaScript -->
  <script src="./public/vendor/jquery/jquery.min.js"></script>
  <script src="./public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Bootstrap Toggle JS -->
  <script src="./public/vendor/bootstrap-toggle/bootstrap2-toggle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="./public/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="./public/js/resume.min.js"></script>
  <script src="./public/js/particles.min.js"></script>
  <script src="./public/js/portfolio.js"></script>

</body>

</html>
