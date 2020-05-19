<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CV Evan Hoizey</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/resume.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-block d-lg-none">Evan Hoizey - CV en ligne</span>
      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="../img/profile.jpg" alt="">
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#about">À Propos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#experience">Expérience</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#education">Éducation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#skills">Aptitudes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#interests">Intérêts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#awards">Récompenses</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
      <div class="w-100">

        <h1 class="mb-0">Evan <span class="text-primary">Hoizey</span></h1>

        <div class="subheading mb-5">77 route de Sartrouville · 78230 Le Pecq · <a href="mailto:name@email.com">evan.hoizey@ynov.com</a></div>

        <p class="lead mb-5">J'ai des aisances particulières en développement logiciel et un grand intérêt en développement web. Je suis en première année d'études en informatique à Ynov Ingésup.</p>
        
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
          <a href="#">
            <i class="fab fa-facebook-f"></i>
          </a>
        </div>
      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
      <div class="w-100">
        <h2 class="mb-5">Expérience <a href="../index.php#experience"><strong>RETOUR PUBLIC</strong></a></h2>
        <a href="insert.php">AJOUTER UN <strong>ARTICLE</strong></a><br>
        <br>
        <?php
        $pdo = new PDO('mysql:host=localhost;dbname=experience;charset=utf8', 'root', '');   
        
        if (isset($_POST['title'])){

          $titre=$_POST['title'];
          $contenu=$_POST['content'];
          $dates=$_POST['dates'];
          $id_exp = $_POST['id_exp'];

          if ($_POST['btn'] == 'MODIFIER'){
            $insert = $pdo->query("UPDATE experience SET title='$titre', content='$contenu', dates='$dates' WHERE id_exp=$id_exp");
          }
          else{
            $remove = $pdo->query("DELETE FROM experience WHERE id_exp=$id_exp");
          }
        }

        $choix = $pdo->query('SELECT * FROM experience');
        while ($data = $choix->fetch()){
        ?>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0"><?php echo $data['title'];?></h3>   

            <p><?php echo $data['content']; ?></p>

            <form method="post">
              <input type="text" name = 'title' placeholder='Nouveau titre...'>

              <input type="text" name = 'content' placeholder='Nouveau contenu...'>

              <input type="text" name = 'dates' placeholder='Nouvelles dates...'>

              <input type="hidden" name = 'id_exp' value="<?php echo $data['id_exp']; ?>">

              <input type="submit" name = 'btn' value="MODIFIER" style="
                background-color:#4747;
                color:#474747;
                outline:none;
                font-family: 'Muli';">

              <input type="submit" name='btn' value="SUPPRIMER" style="
                background-color:#7447;
                color:#474747;
                outline:none;
                font-family: 'Muli';">

            </form>

          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary"><?php echo $data['dates']; ?></span>
          </div>
        
        </div>
        <?php
        }
        ?>
      </div>
      
    </section>
    
    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
      <div class="w-100">
        <h2 class="mb-5">Scolarité</h2>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">Lycée Violet-le-Duc</h3>
            <div class="subheading mb-3">Baccalauréat ES</div>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">2015-2018</span>
          </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">Université de Versailles Saint-Quentin en Yvelines</h3>
            <div class="subheading mb-3">1ère année de Licence de Sociologie</div>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">2018-2019</span>
          </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between">
          <div class="resume-content">
            <h3 class="mb-0">Ynov Ingésup Paris</h3>
            <div class="subheading mb-3">Bachelor informatique</div>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">2019-AUJOURD'HUI</span>
          </div>
        </div>

      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="skills">
      <div class="w-100">
        <h2 class="mb-5">Compétences en informatique</h2>

        <div class="subheading mb-3">Langages de programmation et de développement</div>
        <ul class="list-inline dev-icons">
          <li class="list-inline-item">
            <i class="fab fa-html5"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-css3-alt"></i>
          </li>

          <li class="list-inline-item">
            <i class="fab fa-js-square"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-python"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-cuttlefish"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-php"></i>
          </li>
        </ul>

        <div class="subheading mb-3">Projets</div>
        <ul class="fa-ul mb-0">
          <li>
            <i class="fa-li fa fa-check"></i>
            Création de jeu type 'bomberman' en Python (en console)</li>
          <li>
            <i class="fa-li fa fa-check"></i>
            Création d'un jeu type RPG en C (en console)</li>
          <li>
            <i class="fa-li fa fa-check"></i>
            Création d'un VPN</li>
          <li>
            <i class="fa-li fa fa-check"></i>
            Développement d'un jeu de carte du style 'hearthstone' simplifié en Python (avec une interface graphique en pygame)</li>
          <li>
            <i class="fa-li fa fa-check"></i>
            Ce CV en ligne que je suis actuellement en train de réaliser avec une certaine difficulté mais tout devrait s'arranger ne vous inquiétez pas hein</li>
        </ul>
      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="interests">
      <div class="w-100">
        <h2 class="mb-5">Intérêts divers</h2>
        <p>J'apprécie, en dehors de mes activités scolaires, jouer à un jeu compétitif en ligne avec une certaine ambition de faire de la compétition, sortir en ville pour aller au musée ou me balader dans les rues de Paris.</p>
        <p class="mb-0">En confinement, mes principales activités ont été la flemme et les cours, en plus de ça j'ai pu m'intéresser un peu plus à certains outils de programmation (la librairie SDL2 en C et pygame pour mon projet scolaire)</p>
      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="awards">
      <div class="w-100">
        <h2 class="mb-5">Certifications</h2>
        <ul class="fa-ul mb-0">
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            Champion du monde de rien</li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            Je suis vraiment compétent</li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            Der<sup>nier</sup>
            Mais ça personne ne le sait réellement</li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            :<sup>(</sup> • 
            J'ai arrêté la sociologie, j'aimais pas vraiment les cours que je suivais</li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            Mais aujourd'hui j'aime beaucoup mon école et mes professeurs</li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            8<sup>è</sup> • 
            Sinon, comment ça va?</li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            1<sup>er</sup> • 
            J'ai perdu au chifoumi en 100 manches deux fois d'affilée à 2 points d'écart récemment</li>
        </ul>
      </div>
    </section>

  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/resume.min.js"></script>

</body>

</html>